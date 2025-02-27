<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Product; // Example Model
use App\Models\Category;
use App\Models\Brand;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml file';

    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0)) // Home Page
            ->add(Url::create('/about')->setPriority(0.8)) // About Page
            ->add(Url::create('/contact')->setPriority(0.8));

        // Add all products dynamically
        $products = Product::all();
        foreach ($products as $product) {
            $sitemap->add(Url::create('/products/' . $product->slug)->setPriority(0.9));
        }

        // Add all categories dynamically
        $categories = Category::all();
        foreach ($categories as $category) {
            $sitemap->add(Url::create('/categories/' . $category->slug)->setPriority(0.8));
        }

        // Add all brands dynamically
        $brands = Brand::all();
        foreach ($brands as $brand) {
            $sitemap->add(Url::create('/brands/' . $brand->slug)->setPriority(0.8));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
