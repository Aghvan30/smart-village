<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function deletedMenu()
    {
        try {

            $data = Menu::select('parent_id')
                ->where('parent_id', \request('id'))->first();
            return !empty($data->parent_id) ? 1 : 0;
        } catch (\Throwable $e) {
            report($e) . 'errr';
            return false;
        }
    }
}
