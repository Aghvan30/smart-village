<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Partnior;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //   public function index()
    //  {
    //      return view('login');
    //  }

    public function main()
    {
        $vil = Menu::with('childs')->where('icon', 'vil')->first();
        $kit = Menu::with('childs')->where('icon', 'kit')->first();

        return view('frontend.index', ['vil' => $vil, 'kit' => $kit]);
    }

    public function design()
    {
        return view('frontend.decor');
    }

    public function eventPlaning()
    {
        return view('frontend.event_planing');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function clients()
    {

        return view('frontend.clients');
    }

    public function press()
    {
        return view('frontend.press');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        $menu = "aus";
        $page = Page::with(
            (array('menu' => function ($query) use ($menu) {
                $query->where('icon', $menu);
            })))->first();


        return view('frontend.about', ['data'=>$page]);
    }

    public function village()
    {
        return view('frontend.services');
    }


    public function menu()
    {
        $menu = Menu::with('childs')->whereIn('icon', ['vil', 'kit'])->get();
        dd($menu);

        return view('frontend.menu', ['menus' => $menus]);
    }

    public function partnior()
    {
        $partnior = Partnior::with(
            (array('menus' => function ($query) {
                $query->where('icon', 'pts');
            })))->get();
        dd($partnior);
        return view('frontend.menu', ['partnior' => $partnior]);
    }
}
