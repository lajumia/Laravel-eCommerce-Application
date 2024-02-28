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

    public function productbyBrand($brand_id)
    {
        $products = Product::where('brand_id', $brand_id)->get();
        $count = $products->count();

        try{
            if($count>0){
                return response()->json([
                    'status' => 'success',
                    'products' => $products
                ],200);
            }else{
                return response()->json([
                    'status' => 'success',
                    'products' => 'Product not found !'
                ],200);

            }
                

        }catch (Exception $e){

                return response()->json([
                    'status' => 'failed',
                    'message' => $e->getMessage()
                ],200);

        }


    }
}
