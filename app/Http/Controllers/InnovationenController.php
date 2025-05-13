<?php

namespace App\Http\Controllers;

use App\Models\InnovationCategory;
use App\Models\Innovationen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InnovationenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Fetch all categories from the database and create a map (associative array) by category ID
        $categories = InnovationCategory::all()->keyBy('id');
        $testCategories = InnovationCategory::all()->toArray();
        $categoriesById = $categories->keyBy('id');

        // Start the innovation query
        $query = Innovationen::query();

        // Apply category filter if a category is selected in the request
        if ($request->category) {
            $category = InnovationCategory::where('name', $request->category)->first();
            if ($category) {
                $query->where(function ($q) use ($category) {
                    $q->where('category1', $category->id)
                        ->orWhere('category2', $category->id)
                        ->orWhere('category3', $category->id)
                        ->orWhere('category4', $category->id);
                });
            }
        }
        $query->orderBy('innovation_date', 'desc');


        // Fetch the filtered innovation records and order by latest (newest first), paginate 5 articles per page
        $innovationen = $query->latest()->paginate(10);  // Paginate with 5 innovation per page

        // Map innovation to include category names
        $innovationen->getCollection()->transform(function ($innovation) use ($categoriesById) {
            // Add category1_name, category2_name, etc.
            $innovation->category1_name = isset($categoriesById[$innovation->category1]) ? $categoriesById[$innovation->category1]->name : null;
            $innovation->category2_name = isset($categoriesById[$innovation->category2]) ? $categoriesById[$innovation->category2]->name : null;
            $innovation->category3_name = isset($categoriesById[$innovation->category3]) ? $categoriesById[$innovation->category3]->name : null;
            $innovation->category4_name = isset($categoriesById[$innovation->category4]) ? $categoriesById[$innovation->category4]->name : null;

            return $innovation;
        });

        // Create an array to hold the unique categories for all innovations
        $uniqueCategories = [];

        // Iterate through each innovation and add its categories to the uniqueCategories array
        $innovationen->each(function ($innovation) use ($categoriesById, &$uniqueCategories) {
            // Add category1 if it exists and is not already added
            if (isset($categoriesById[$innovation->category1]) && !in_array($categoriesById[$innovation->category1], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$innovation->category1];
            }

            // Add category2 if it exists and is not already added
            if (isset($categoriesById[$innovation->category2]) && !in_array($categoriesById[$innovation->category2], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$innovation->category2];
            }

            // Add category3 if it exists and is not already added
            if (isset($categoriesById[$innovation->category3]) && !in_array($categoriesById[$innovation->category3], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$innovation->category3];
            }

            // Add category4 if it exists and is not already added
            if (isset($categoriesById[$innovation->category4]) && !in_array($categoriesById[$innovation->category4], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$innovation->category4];
            }
        });

        // Optionally sort categories alphabetically by name
        usort($uniqueCategories, function ($a, $b) {
            return strcmp($a->name, $b->name); // Sort categories by their name
        });

        $categoriesWithInnovationen = [];

        foreach ($testCategories as $category) {
            // Check if the category exists in any of the four category columns and has at least one innovation
            $hasInnovationen = Innovationen::where(function ($query) use ($category) {
                $query->where('category1', $category)
                    ->orWhere('category2', $category)
                    ->orWhere('category3', $category)
                    ->orWhere('category4', $category);
            })->exists();

            // If there is at least one innovation for the current category, add it to the array
            if ($hasInnovationen) {
                $categoriesWithInnovationen[] = $category;
            }
        }
        $testCategories = $categoriesWithInnovationen;
        usort($testCategories, function ($a, $b) {
            return strcmp($a['name'], $b['name']); // Sort categories by their name
        });
        // Return the view with the filtered innovationen, categories, and unique categories
        return view('innovationen.index', compact('innovationen', 'uniqueCategories', 'testCategories'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $innovationCategories = InnovationCategory::all();
        return view('innovationen.admin.create', compact('innovationCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the incoming data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'innovation_date' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required|string',
            'category1' => 'nullable|exists:innovation_categories,id',
            'category2' => 'nullable|exists:innovation_categories,id',
            'category3' => 'nullable|exists:innovation_categories,id',
            'category4' => 'nullable|exists:innovation_categories,id',
            'slug' => 'required|unique:innovationen,slug',  // Corrected validation for unique slug
            'home' => 'nullable|in:ja,nein',

        ]);

        // Handle the image upload (if an image is uploaded)
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('innovation_images', 'public');
        }

        // Create a new innovation entry
        $innovation = Innovationen::create([
            'slug' => $validated['slug'],
            'title' => $validated['title'],
            'data' => $validated['content'],
            'home' => $validated['home'],
            'innovation_date' => $validated['innovation_date'],
            'description' => $validated['description'],
            'image' => $imagePath,
            'category1' => $validated['category1'] ?? null,
            'category2' => $validated['category2'] ?? null,
            'category3' => $validated['category3'] ?? null,
            'category4' => $validated['category4'] ?? null,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.innovation.create')->with('success', 'Innovation created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $innovation = Innovationen::where('slug', $slug)->with(['category1Model', 'category2Model', 'category3Model', 'category4Model'])->first();
        return view('innovationen.show', compact('innovation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $innovation = Innovationen::find($id);
        $innovationCategories = InnovationCategory::all();

        return view('innovationen.admin.edit', compact('innovation', 'innovationCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the existing innovation entry by ID
        $innovation = Innovationen::findOrFail($id);

        // Validate the incoming data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'innovation_date' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required|string',
            'category1' => 'nullable|exists:innovation_categories,id',
            'category2' => 'nullable|exists:innovation_categories,id',
            'category3' => 'nullable|exists:innovation_categories,id',
            'category4' => 'nullable|exists:innovation_categories,id',
            // Exclude the current innovation's slug from the uniqueness check
            'slug' => 'required|unique:innovationen,slug,' . $innovation->id,
            'home' => 'nullable|in:ja,nein', // 'ja' or 'nein'
        ]);

        // Handle image upload (if an image is uploaded)
        $imagePath = $innovation->image;  // Use the current image by default
        if ($request->hasFile('image')) {
            // Delete the old image if it exists (optional, depending on your needs)
            if ($innovation->image && Storage::exists($innovation->image)) {
                Storage::delete($innovation->image);
            }
            // Upload new image
            $imagePath = $request->file('image')->store('innovation_images', 'public');
        }

        // Update the innovation entry with the validated data
        $innovation->update([
            'slug' => $validated['slug'],
            'title' => $validated['title'],
            'data' => $validated['content'],
            'home' => $validated['home'],
            'innovation_date' => $validated['innovation_date'],
            'description' => $validated['description'],
            'image' => $imagePath,
            'category1' => $validated['category1'] ?? null,
            'category2' => $validated['category2'] ?? null,
            'category3' => $validated['category3'] ?? null,
            'category4' => $validated['category4'] ?? null,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.innovation.edit', $innovation->id)->with('success', 'Innovation updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $innovation = Innovationen::findOrFail($id);

        if ($innovation) {
            $innovation->delete();
            return redirect()->route('admin.innovationen.index')->with('success', 'Innovation deleted successfully!');
        }
    }

    public function getAllForAdmin()
    {
        // Fetch all innovations from the database
        $innovationen = Innovationen::all();

        // Process the image URL and categories for each innovation
        $innovationen->each(function ($innovation) {


            // Fetch category names for category1, category2, category3, category4
            $innovation->category1_name = $innovation->category1 ? InnovationCategory::find($innovation->category1)->name : null;
            $innovation->category2_name = $innovation->category2 ? InnovationCategory::find($innovation->category2)->name : null;
            $innovation->category3_name = $innovation->category3 ? InnovationCategory::find($innovation->category3)->name : null;
            $innovation->category4_name = $innovation->category4 ? InnovationCategory::find($innovation->category4)->name : null;
        });

        // Return the view with the processed innovation data
        return view('innovationen.admin.index', compact('innovationen'));
    }

    public function loadMoreData(Request $request)
    {
        $categories = InnovationCategory::all();
        $categoriesById = $categories->keyBy('id');

        // Start the innovation query (without the 'home' condition)
        $query = Innovationen::query();

        // Apply category filter if a category is selected in the request
        if ($request->category) {
            // $category = InnovationCategory::where('name', $request->category)->first();
            // if ($category) {
            //     $query->where(function ($q) use ($category) {
            //         $q->where('category1', $category->id)
            //             ->orWhere('category2', $category->id)
            //             ->orWhere('category3', $category->id)
            //             ->orWhere('category4', $category->id);
            //     });
            // }
        }

        // Get the next page of results
        $innovationen = $query->paginate(10, ['*'], 'page', $request->page); // Use the 'page' parameter for pagination

        // Map category names to marketplaces
        $innovationen->getCollection()->transform(function ($innovation) use ($categoriesById) {
            $innovation->category1_name = isset($categoriesById[$innovation->category1]) ? $categoriesById[$innovation->category1]->name : null;
            $innovation->category2_name = isset($categoriesById[$innovation->category2]) ? $categoriesById[$innovation->category2]->name : null;
            $innovation->category3_name = isset($categoriesById[$innovation->category3]) ? $categoriesById[$innovation->category3]->name : null;
            $innovation->category4_name = isset($categoriesById[$innovation->category4]) ? $categoriesById[$innovation->category4]->name : null;

            return $innovation;
        });

        // Return the next page of marketplaces as a JSON response
        return response()->json([
            'innovationen' => view('innovationen.partials.innovationen', compact('innovationen'))->render(),
            'nextPage' => $innovationen->hasMorePages() ? $innovationen->currentPage() + 1 : null,
        ]);
    }
}
