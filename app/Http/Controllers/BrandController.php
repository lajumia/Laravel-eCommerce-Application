<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //

    public function brandList(){

        try{
            $brands = Brand::all();

            return response()->json([
                'status' => 'success',
                'data' => $brands
            ],200);

        }catch (Exception $e){
            return response()->json([
                'status' => 'failed',
                'message' => $e->getMessage()

            ],200);
        }


    }
}
