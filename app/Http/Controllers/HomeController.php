<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\MarketplaceCategory;
use App\Models\InnovationCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getBlogCategories()
    {
        $blogCategories = BlogCategory::all();
        return view('categories.blog.index', compact('blogCategories'));
    }

    public function createBlogCategory()
    {
        return view('categories.blog.create');

    }

    public function blogCategoryStore(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        // Create new blog category
        BlogCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.blog.categories.index')->with('success', 'Blog category created successfully.');
    }

    public function BlogCategoryDestroy($id)
    {
        BlogCategory::destroy($id);
        return redirect()->route('admin.blog.categories.index')->with('success', 'Blog category deleted successfully.');
    }

    public function editBlogCategory($id)
    {
        // Retrieve the blog category from the database
        $blogCategory = BlogCategory::findOrFail($id); // If not found, it will throw a 404 error

        // Return the edit view with the blog category data
        return view('categories.blog.edit', compact('blogCategory'));
    }

    public function updateBlogCategory(Request $request, $id)
    {
        // Retrieve the blog category from the database
        $blogCategory = BlogCategory::findOrFail($id);

        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255', // Validate category name
            'description' => 'nullable|string',  // Validate category description (if exists)
            // Add other validation rules if needed
        ]);

        // Update the category with validated data
        $blogCategory->name = $validated['name'];
        $blogCategory->description = $validated['description'] ?? $blogCategory->description; // Keep old description if not provided

        // Save the updated blog category
        $blogCategory->save();

        // Redirect to the categories list or the updated category page with a success message
        return redirect()->route('admin.blog.categories.index') // Or change to another route if needed
            ->with('success', 'Blog category updated successfully!');
    }

    public function getMarketplaceCategories()
    {
        $marketplaceCategories = MarketplaceCategory::all();
        return view('categories.marketplace.index', compact('marketplaceCategories'));
    }

    public function createMarketplaceCategory()
    {
        return view('categories.marketplace.create');

    }

    public function editMarketplaceCategory($id)
    {
        // Retrieve the blog category from the database
        $marketplaceCategory = MarketplaceCategory::findOrFail($id); // If not found, it will throw a 404 error

        // Return the edit view with the blog category data
        return view('categories.marketplace.edit', compact('marketplaceCategory'));
    }

    public function marketplaceCategoryStore(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        // Create new blog category
        MarketplaceCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.marketplace.categories.index')->with('success', 'Marketplace category created successfully.');
    }

    public function updateMarketplaceCategory(Request $request, $id)
    {
        // Retrieve the blog category from the database
        $marketPlaceCategory = MarketplaceCategory::findOrFail($id);

        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255', // Validate category name
            'description' => 'nullable|string',  // Validate category description (if exists)
            // Add other validation rules if needed
        ]);

        // Update the category with validated data
        $marketPlaceCategory->name = $validated['name'];
        $marketPlaceCategory->description = $validated['description'] ?? $marketPlaceCategory->description; // Keep old description if not provided

        // Save the updated blog category
        $marketPlaceCategory->save();

        // Redirect to the categories list or the updated category page with a success message
        return redirect()->route('admin.marketplace.categories.index') // Or change to another route if needed
            ->with('success', 'Marketplace category updated successfully!');
    }
    public function marketplaceCategoryDestroy($id)
    {
        try {
            MarketplaceCategory::destroy($id);
            return redirect()->route('admin.marketplace.categories.index')->with('success', 'Marketplace category deleted successfully.');
        } catch (\Throwable $th) {
            dd('please delete the marketplace links that used this categories');
        }
    }
    
    public function getInnovationCategories()
    {
        $innovationCategories = InnovationCategory::all();
        return view('categories.innovation.index', compact('innovationCategories'));
    }

    public function createInnovationCategory()
    {
        return view('categories.innovation.create');

    }

    public function innovationCategoryStore(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        // Create new innovation category
        InnovationCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.innovation.categories.index')->with('success', 'Innovation category created successfully.');
    }

    public function InnovationCategoryDestroy($id)
    {
        InnovationCategory::destroy($id);
        return redirect()->route('admin.innovation.categories.index')->with('success', 'Innovation category deleted successfully.');
    }

    public function editInnovationCategory($id)
    {
        // Retrieve the innovation category from the database
        $innovationCategory = InnovationCategory::findOrFail($id); // If not found, it will throw a 404 error

        // Return the edit view with the innovation category data
        return view('categories.innovation.edit', compact('innovationCategory'));
    }

    public function updateInnovationCategory(Request $request, $id)
    {
        // Retrieve the innovation category from the database
        $innovationCategory = InnovationCategory::findOrFail($id);

        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255', // Validate category name
            'description' => 'nullable|string',  // Validate category description (if exists)
            // Add other validation rules if needed
        ]);

        // Update the category with validated data
        $innovationCategory->name = $validated['name'];
        $innovationCategory->description = $validated['description'] ?? $innovationCategory->description; // Keep old description if not provided

        // Save the updated innovation category
        $innovationCategory->save();

        // Redirect to the categories list or the updated category page with a success message
        return redirect()->route('admin.innovation.categories.index') // Or change to another route if needed
            ->with('success', 'Innovation category updated successfully!');
    }
    
    
    
    
    
    
    
    


}
