<?php

namespace App\Http\Controllers;

use App\Category;
use App\Restaurant;
use App\Testimonial;
use App\Gallery;
use App\Chef;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function home() {
        $restaurant = Restaurant::with(['times' => function ($query) {
            $query->where('status', '=', 'open');
        }])->get();

        return View('restaurant.index', compact('restaurant'));
    }

    public function menu() {

        $dishes = Category::with(['menus' => function ($query) {
            $query->orderBy('category_id', 'asc');
        }])->get();

        $menus = [];

        foreach ($dishes as $dish) {
            $menus[] = $dish;
        }

        return View('restaurant.menu', compact('menus'));
    }

    public function chef() {

        $chef = Chef::with('restaurants')->get();
        
        return View('restaurant.chef', compact('chef'));
    }

    public function testimonials() {

        $testimonials = Testimonial::with('restaurants')->get();
        
        return View('restaurant.testimonials', compact('testimonials'));
    }

    public function gallery() {

        $gallery = Gallery::with('restaurants')->get();
        return View('restaurant.gallery', compact('gallery'));
    }
}


