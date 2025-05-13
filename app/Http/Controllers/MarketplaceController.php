<?php

namespace App\Http\Controllers;

use App\Models\Marketplace;
use App\Models\MarketplaceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;

class MarketplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Fetch all categories from the database
        $categories = MarketplaceCategory::all();
        $testCategories = MarketplaceCategory::all()->toArray();

        // Create a map (associative array) of category ID to category details (name, etc.)
        $categoriesById = $categories->keyBy('id');

        // Start the marketplace query (without the 'home' condition)
        $query = Marketplace::query();

        // Apply category filter if a category is selected in the request
        if ($request->category) {
            $category = MarketplaceCategory::where('name', $request->category)->first();
            if ($category) {
                $query->where(function ($q) use ($category) {
                    $q->where('category1', $category->id)
                        ->orWhere('category2', $category->id)
                        ->orWhere('category3', $category->id)
                        ->orWhere('category4', $category->id);
                });
            }
        }

        // Paginate the marketplaces (10 per page)
        $marketPlaces = $query->paginate(10);

        // Map category names to marketplaces
        $marketPlaces->getCollection()->transform(function ($marketplace) use ($categoriesById) {
            // Add category1_name, category2_name, etc.
            $marketplace->category1_name = isset($categoriesById[$marketplace->category1]) ? $categoriesById[$marketplace->category1]->name : null;
            $marketplace->category2_name = isset($categoriesById[$marketplace->category2]) ? $categoriesById[$marketplace->category2]->name : null;
            $marketplace->category3_name = isset($categoriesById[$marketplace->category3]) ? $categoriesById[$marketplace->category3]->name : null;
            $marketplace->category4_name = isset($categoriesById[$marketplace->category4]) ? $categoriesById[$marketplace->category4]->name : null;

            return $marketplace;
        });

        // Create an array to hold the unique categories for all marketplaces
        $uniqueCategories = [];

        // Iterate through each marketplace and add its categories to the uniqueCategories array
        $marketPlaces->getCollection()->each(function ($marketplace) use ($categoriesById, &$uniqueCategories) {
            // Add category1 if it exists and is not already added
            if (isset($categoriesById[$marketplace->category1]) && !in_array($categoriesById[$marketplace->category1], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$marketplace->category1];
            }

            // Add category2 if it exists and is not already added
            if (isset($categoriesById[$marketplace->category2]) && !in_array($categoriesById[$marketplace->category2], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$marketplace->category2];
            }

            // Add category3 if it exists and is not already added
            if (isset($categoriesById[$marketplace->category3]) && !in_array($categoriesById[$marketplace->category3], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$marketplace->category3];
            }

            // Add category4 if it exists and is not already added
            if (isset($categoriesById[$marketplace->category4]) && !in_array($categoriesById[$marketplace->category4], $uniqueCategories)) {
                $uniqueCategories[] = $categoriesById[$marketplace->category4];
            }
        });

        $categoriesWithMarketplaces= [];

        foreach ($testCategories as $category) {
            // Check if the category exists in any of the four category columns and has at least one blog
            $hasBlogs = Marketplace::where(function ($query) use ($category) {
                $query->where('category1', $category)
                    ->orWhere('category2', $category)
                    ->orWhere('category3', $category)
                    ->orWhere('category4', $category);
            })->exists();

            // If there is at least one blog for the current category, add it to the array
            if ($hasBlogs) {
                $categoriesWithMarketplaces[] = $category;
            }
        }
        $testCategories = $categoriesWithMarketplaces;

        usort($testCategories, function ($a, $b) {
            // If $a is "Sonstiges", place it at the end
            if ($a['name'] === 'Sonstiges') {
                return 1;
            }
        
            // If $b is "Sonstiges", place it at the end
            if ($b['name'] === 'Sonstiges') {
                return -1;
            }
        
            // Otherwise, sort by name (alphabetically)
            return strcmp($a['name'], $b['name']);
        });
        
        // Return the view with the filtered marketplaces, categories, unique categories array, and pagination links
        return view('marketplace.index', compact('marketPlaces', 'uniqueCategories','testCategories'));
    }

    public function loadMore(Request $request)
    {
        $categories = MarketplaceCategory::all();
        $categoriesById = $categories->keyBy('id');

        // Start the marketplace query (without the 'home' condition)
        $query = Marketplace::query();

        // Apply category filter if a category is selected in the request
        if ($request->category) {
            $category = MarketplaceCategory::where('name', $request->category)->first();
            if ($category) {
                $query->where(function ($q) use ($category) {
                    $q->where('category1', $category->id)
                        ->orWhere('category2', $category->id)
                        ->orWhere('category3', $category->id)
                        ->orWhere('category4', $category->id);
                });
            }
        }

        // Get the next page of results
        $marketPlaces = $query->paginate(10, ['*'], 'page', $request->page); // Use the 'page' parameter for pagination

        // Map category names to marketplaces
        $marketPlaces->getCollection()->transform(function ($marketplace) use ($categoriesById) {
            $marketplace->category1_name = isset($categoriesById[$marketplace->category1]) ? $categoriesById[$marketplace->category1]->name : null;
            $marketplace->category2_name = isset($categoriesById[$marketplace->category2]) ? $categoriesById[$marketplace->category2]->name : null;
            $marketplace->category3_name = isset($categoriesById[$marketplace->category3]) ? $categoriesById[$marketplace->category3]->name : null;
            $marketplace->category4_name = isset($categoriesById[$marketplace->category4]) ? $categoriesById[$marketplace->category4]->name : null;

            return $marketplace;
        });

        // Return the next page of marketplaces as a JSON response
        return response()->json([
            'marketPlaces' => view('marketplace.partials.marketplaces', compact('marketPlaces'))->render(),
            'nextPage' => $marketPlaces->hasMorePages() ? $marketPlaces->currentPage() + 1 : null,
        ]);
    }






    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marketplaceCategories = MarketplaceCategory::all();
        return view('marketplace.admin.create', compact('marketplaceCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'content_text' => 'required|string',
            'category1' => 'required|exists:marketplace_categories,id', // Category 1 is mandatory
            'category2' => 'nullable|exists:marketplace_categories,id',
            'category3' => 'nullable|exists:marketplace_categories,id',
            'category4' => 'nullable|exists:marketplace_categories,id',
            'link' => 'nullable|url',
            'external_link' => 'required|in:ja,nein',
            'home' => 'required|in:ja,nein',
            'image' => 'nullable|url|image|mimes:jpg,jpeg,png|max:2048', // Image validation
        ]);

        // Create a new marketplace entry
        $marketplace = new Marketplace();
        $marketplace->name = $validated['name'];
        $marketplace->content_text = $validated['content_text'];
        $marketplace->category1 = $validated['category1'];
        $marketplace->category2 = $validated['category2'] ?? null;
        $marketplace->category3 = $validated['category3'] ?? null;
        $marketplace->category4 = $validated['category4'] ?? null;
        $marketplace->link = $validated['link'];
        $marketplace->external_link = $validated['external_link'];
        $marketplace->home = $validated['home'];

        // Handle image upload or URL
        if ($request->hasFile('image')) {
            // If an image file is uploaded, save the file
            $imagePath = $request->file('image')->store('marketplace_images', 'public');
            $marketplace->image = $imagePath;
        } elseif ($request->filled('image')) {
            // If an image URL is provided, use that URL
            $marketplace->image = $validated['image'];
        }

        // Save the marketplace entry
        $marketplace->save();

        // Redirect with a success message
        return redirect()->route('admin.marketplace.index')->with('success', 'Marktplatz erfolgreich hinzugefügt!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marketplace $marketplace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Fetch the marketplace using the provided ID
        $marketplace = Marketplace::findOrFail($id);
        $marketplaceCategories = MarketplaceCategory::all(); // Assuming you have categories
        return view('marketplace.admin.edit', compact('marketplace', 'marketplaceCategories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $marketplace = Marketplace::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'content_text' => 'nullable|string',
            'image' => 'nullable|url|max:2048', // Accept either a file or a URL
            'category1' => 'nullable|exists:marketplace_categories,id',
            'category2' => 'nullable|exists:marketplace_categories,id',
            'category3' => 'nullable|exists:marketplace_categories,id',
            'category4' => 'nullable|exists:marketplace_categories,id',
            'link' => 'nullable|url',
            'external_link' => 'nullable|in:ja,nein',
            'home' => 'nullable|in:ja,nein',
        ]);

        // Check if the image is uploaded or is a URL
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('marketplaces', 'public'); // Save to storage
            $marketplace->image = $imagePath; // Save the file path to the database
        } elseif ($request->input('image')) {
            // If the user provides an image URL, save it directly
            $marketplace->image = $request->input('image'); // Save the URL to the database
        }
        // Update other marketplace fields
        $marketplace->name = $request->input('name');
        $marketplace->content_text = $request->input('content_text');
        $marketplace->link = $request->input('link');
        $marketplace->external_link = $request->input('external_link');
        $marketplace->home = $request->input('home');

        // Update categories (Assume 4 categories)
        $marketplace->category1 = $request->input('category1');
        $marketplace->category2 = $request->input('category2');
        $marketplace->category3 = $request->input('category3');
        $marketplace->category4 = $request->input('category4');

        // Save the updated marketplace
        $marketplace->save();

        // Return a response (redirect or return success message)
        return redirect()->route('admin.marketplace.index')
            ->with('success', __('Marktplatz erfolgreich aktualisiert.'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the marketplace by ID
        $marketplace = Marketplace::find($id);

        // Check if the marketplace exists
        if ($marketplace) {
            // If an image exists, delete it from storage
            if ($marketplace->image && Storage::exists('public/' . $marketplace->image)) {
                Storage::delete('public/' . $marketplace->image);
            }

            // Delete the marketplace record from the database
            $marketplace->delete();

            // Redirect with a success message
            return redirect()->route('admin.marketplace.index')->with('success', 'Marketplace deleted successfully!');
        }

        // If the marketplace does not exist, redirect with an error message
        return redirect()->route('admin.marketplace.index')->with('error', 'Marketplace not found!');
    }


    public function getAllForAdmin()
    {
        // Fetch all marketplaces from the database
        $marketplaces = Marketplace::all();

        // Process the image URL and categories for each marketplace
        $marketplaces->each(function ($marketplace) {
            // Process the image URL
            if ($marketplace->image) {
                if (strpos($marketplace->image, 'https') === 0) {
                    $marketplace->image_url = $marketplace->image;
                } else {
                    $marketplace->image_url = asset('storage/' . $marketplace->image);
                }
            } else {
                $marketplace->image_url = null; // or a default image
            }

            // Fetch category names for category1, category2, category3, category4
            $marketplace->category1_name = $marketplace->category1 ? MarketplaceCategory::find($marketplace->category1)->name : null;
            $marketplace->category2_name = $marketplace->category2 ? MarketplaceCategory::find($marketplace->category2)->name : null;
            $marketplace->category3_name = $marketplace->category3 ? MarketplaceCategory::find($marketplace->category3)->name : null;
            $marketplace->category4_name = $marketplace->category4 ? MarketplaceCategory::find($marketplace->category4)->name : null;
        });

        // Return the view with the processed marketplace data
        return view('marketplace.admin.index', compact('marketplaces'));
    }


}