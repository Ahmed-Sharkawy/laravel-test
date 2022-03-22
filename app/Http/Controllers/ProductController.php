<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $res = DB::table("product")->get();
        return view("product.index", compact("res"));
    }

    public function add()
    {
        $res = DB::table("category")->get();
        return view("product.add", compact("res"));
    }

    public function stor(Request $Request)
    {
        DB::table("product")->insert(["name" => "$Request->name", "category_id" => $Request->id]);
        return redirect("product/index");
    }

    public function edit($id)
    {
        $res1 = DB::table("category")->select("id", "title")->get();
        $res2 = DB::table("product")->where("id", $id)->first();
        return view("product.edit", compact("res1", "res2"));
    }

    public function update(Request $Request)
    {

        DB::table("product")->where("id", $Request->id)->update([
            "name" => $Request->name,
            "category_id" => $Request->category_id
        ]);
        return redirect("product/index");
    }

    public function delete($id)
    {
        DB::table("product")->delete($id);
        return redirect("product/index");
    }
}
