<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    /**
     * Loads the home page for the storefront.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $categories = Category::where('status', 'ACTIVE')->whereNull('parent_id')->orderBy('id', 'DESC')->get();

        $products = Product::where('status', 'ACTIVE')->get();

        $sliders = Slider::where('status', 'ACTIVE')->orderBy("sort_order")->get();

        return view('index', compact('products', 'sliders'));
    }

    /**
     * Loads the home page for the storefront.
     *
     * @return \Illuminate\View\View
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Loads the home page for the storefront.
     *
     * @return \Illuminate\View\View
     */
    public function about_us()
    {
        return view('about_us');
    }

    /**
     * Loads the home page for the storefront.
     *
     * @return \Illuminate\View\View
     */
    public function contact_us()
    {
        return view('contact_us');
    }

    /**
     * Loads the home page for the storefront.
     *
     * @return \Illuminate\View\View
     */
    public function privacy_policy()
    {
        return view('privacy_policy');
    }

    /**
     * Loads the home page for the storefront.
     *
     * @return \Illuminate\View\View
     */
    public function category($slug)
    {
        $category = Category::where('status', 'ACTIVE')->where('slug', $slug)->first();

        $products = $category->products()->paginate(12);

        $categories = Category::where('status', 'ACTIVE')->whereNull('parent_id')->orderBy('id', 'DESC')->get();

        return view('category', compact('category', 'categories', 'products'));
    }

    /**
     * Loads the home page for the storefront.
     *
     * @return \Illuminate\View\View
     */
    public function product($url_key)
    {
        $product = Product::where('status', 'ACTIVE')->where('url_key', $url_key)->first();

        return view('product', compact('product'));
    }
}
