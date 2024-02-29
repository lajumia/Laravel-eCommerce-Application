<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Models\ProductReview;
use App\Models\ProductSlider;
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

    public function productbyRemark($remark)
    {
        $products = Product::where('remark', $remark)->get();
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

    // Product slider
    public function productSlider()
    {
        $slide = ProductSlider::all();

        try{
            if($slide->count()>0){
                return response()->json([
                    'status' => 'success',
                    'slides' => $slide
                ],200);
            }else{
                return response()->json([
                    'status' => 'success',
                    'slides' => 'Product not found !'
                ],200);

            }


        }catch (Exception $e){

                return response()->json([
                    'status' => 'failed',
                    'message' => $e->getMessage()
                ],200);

        }


    }

    // Product details

    public function productDetails($id)
    {
        $product = ProductDetail::find($id);

        try{
            if($product){
                return response()->json([
                    'status' => 'success',
                    'product' => $product
                ],200);
            }else{
                return response()->json([
                    'status' => 'success',
                    'product' => 'Product not found !'
                ],200);

            }


        }catch (Exception $e){

                return response()->json([
                    'status' => 'failed',
                    'message' => $e->getMessage()
                ],200);

        }


    }

    // Product Review form database
    public function productReview()
    {
        $product = ProductReview::all();

        try{
            if($product){
                return response()->json([
                    'status' => 'success',
                    'product' => $product
                ],200);
            }else{
                return response()->json([
                    'status' => 'success',
                    'product' => 'Product not found !'
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
