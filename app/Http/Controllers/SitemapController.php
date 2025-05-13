<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class SitemapController extends Controller
{
    public function index()
    {
        // Fetch all routes defined in the application
        $routes = Route::getRoutes();

        // Initialize an array to hold the URLs
        $urls = [];

        // Loop through each route and collect its URL
        foreach ($routes as $route) {
            if ($route->methods()[0] == 'GET' && !in_array($route->uri(), ['login', 'admin/*', 'register', 'up','foo'])) {
                // Get the URL for each route
                $urls[] = url($route->uri());
            }
        }

        // Return the sitemap view with the URLs
        return response()->view('sitemap.index', compact('urls'))
                         ->header('Content-Type', 'application/xml');
    }
}
