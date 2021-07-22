<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function all()
    {
//        $products = DB::table("products")->get();
//        $products = Product::all();
//        $products = Product::leftJoin("categories","categories.id","=","products.category_id")
//            ->select("product.*","categories.name as category_name")->get();
        $products = Product::with("Category")->get();


        return view("product.table", [
            "products" => $products
        ]);
    }

    public function form()
    {
        $categories = Category::all();
        return view("product.form", [
            "categories" => $categories
        ]);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            //"image"=>"required",
            "price" => "required|min:0",
            "qty" => "required|min:0",
            "category_id" => "required|numeric|min:1",
        ], [
            "name.required" => "Vui long nhap ten",
            "category_id.min" => "Vui long chon danh muc",
        ]);

        //upload file
        $image = null;
        if ($request->has("image")) {
            $file = $request->file("image");
//            dd($file);
            //$fileName = $file -> getClientOriginalName(); //lay ten file
            $extName = $file->getClientOriginalExtension(); //lay duoi file
            $fileName = time() . "." . $extName;
            $fileSize = $file->getSize();

            $allow = ["png", "jpeg", "jpg", "gif"]; //nhung file dc up len
            if (in_array($extName, $allow)) {
                if ($fileSize < 100000000) {
                    try {
                        $file->move("upload", $fileName);
                        $image = $fileName;
                    } catch (\Exception $e) {

                    }
                }
            }
        }

        try {
            Product::create([
                "name" => $request->get("name"),
                "image" => $image,
                "des" => $request->get("des"),
                "price" => $request->get("price"),
                "qty" => $request->get("qty"),
                "category_id" => $request->get("category_id"),
            ]);
        } catch (\Exception $e) {
            return $e;
        }
        return redirect()->to("products");
    }

    public function delete($id)
    {
        DB::table("products")->where("id", $id)->delete();
        return redirect()->to("products");
    }

    public function edit($id)
    {
        $categories = Category::all();
//        $cat = DB::table("categories")->where("id",$id)->first();
//        if($cat == null) return redirect()->to("categories");
        $item = Product::findOrFail($id);
        return view("product.edit", [
            "item" => $item,
            "categories" => $categories,
        ]);
    }

    public function update(Request $request, $id)
    {
//        $cat = DB::table("categories")->where("id",$id)->first();
//        if($cat == null) return redirect()->to("categories");
//        DB::table("categories")->where("id",$id)->update([
//            "name"=>$request->get("name"),
//            "updated_at"=>Carbon::now()
//        ]);
        $item = Product::findOrFail($id);
        $item->update([
            "name" => $request->get("name"),
            "image" => $request->get("name"),
            "des" => $request->get("des"),
            "price" => $request->get("price"),
            "qty" => $request->get("qty"),
            "categories_id" => $request->get("categories_id")
        ]);
        return redirect()->to("products");
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = [];
        if (Session::has("cart")) {
            $cart = session("cart");
        }
        if (!$this->checkCart($cart, $product)) {
            $product->cart_qty = 1;
            $cart[] = $product;
        } else {
            for ($i = 0; i < count($cart); $i++) {
                if ($cart[$i]->id == $product->id){
                    $cart[$i]->cart_qty = $cart[$i]->cart_qty + 1;
                }
            }
        }

        Session::put("cart",$cart);
        return redirect()->to("cart");
    }


    private function checkCart($cart, $p)
    {
        foreach ($cart as $item) {
            if ($item->id == $p->id) {
                return true;
            }
        }
        return false;
    }
    public function cart(){
        $cart = [];
        if(session()->has("cart")){
            $cart = session("cart");
        }
//        dd($cart);
    }
    public function checkout(){

    }
}
