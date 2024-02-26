<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function categoryList()
    {
        

        try{
            $categories = Category::all();
            return response()->json([

                'status' => 'success',
                'data' => $categories

            ],200);

        }catch (Exception $e){

            return response()->json([
                'status' => 'failed',
                'message' => $e->getMessage()

            ],200);

        }

    }
}
