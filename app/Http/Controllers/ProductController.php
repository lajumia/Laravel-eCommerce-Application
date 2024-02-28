<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Product by category
    public function productbyCategory(Request $request, $category_id)
    {
        try{
            $products = Product::where('category_id', $category_id)->get();

                return response()->json([
                    'status' => 'success',
                    'products' => $products
                ],200);

        }catch (Exception $e){

                return response()->json([
                    'status' => 'error',
                    'message' => $e->getMessage()
                ],200);

        }
        
        
    }
}
