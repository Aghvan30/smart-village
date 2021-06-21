<?php

use App\Models\Banners;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Partnior;

function menu()
{
    return Menu::with('childs')->whereNull('parent_id')->get()->toArray();
}

function getSubmenuByMenu($menu)
{
//    dd(Menu::with('childs')->where('icon', $menu)->get());
    return Menu::with('childs')->where('icon', $menu)->get();

}
function getSubmenuContent($menu)
{
//    dd(Menu::with('childs')->where('icon', $menu)->get());
    return Page::with(
        (array('menu' => function($query) use ($menu)  {
            $query->where('icon', $menu);
        })))->get();

}
function getPartniors($link)
{

    $menu =Menu::where('icon', $link)->first();
    $partners = Partnior::get();
    return ['menu'=>$menu, 'partners' =>$partners];

}
function getBanner(){
   return Banners::where('status', 'active')->get();
}

function menuLinks(){
    return ['aus','art', 'smart', 'pts'];
}
