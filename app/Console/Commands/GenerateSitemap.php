<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use URL;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $sitemap = Sitemap::create();

        // // Manually add static pages (you can add dynamic URLs later)
        // $sitemap->add(URL::create('/')->setPriority(1.0)->setChangeFrequency('daily'));
        // $sitemap->add(Url::create('/about')->setPriority(0.8)->setChangeFrequency('monthly'));
        // $sitemap->add(Url::create('/contact')->setPriority(0.8)->setChangeFrequency('monthly'));

        // // Dynamically add routes (e.g. database-driven routes)
        // // Example for a blog with dynamic URLs (using the `Blog` model)
        // $posts = \App\Models\Post::all();
        // foreach ($posts as $post) {
        //     $sitemap->add(Url::create("/blog/{$post->slug}")->setPriority(0.7)->setChangeFrequency('weekly'));
        // }

        // // Save sitemap to file
        // $sitemap->writeToFile(public_path('sitemap.xml'));

        // $this->info('Sitemap generated successfully!');
    }
}
