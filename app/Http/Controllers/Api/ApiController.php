<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function getSlider()
    {
        try {

            $data =Banners::where('status','active')->get();
            return response()->json(
                [

                    'data' => $data
                ],

            );
        } catch (\Throwable $e) {
            report($e) . 'errr';
            return false;
        }
    }
}
