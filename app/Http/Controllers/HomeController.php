<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $res = DB::table("category")->get();
        return view("index", compact("res"));
    }

    public function add()
    {
        return view("add");
    }

    public function stor(Request $add)
    {
        $add->validate([
            "title" => "required",
            "age" => "required"
        ]);

        Session::flash("success", "id  insert");

        DB::table("category")->insert(["title" => $add->title, "age" => $add->age]);
        return redirect("/home/index");
    }

    public function edit($id)
    {
        $data = DB::table("category")->where("id", $id)->first();
        return view("edit", compact("data"));
    }

    public function update(Request $Request)
    {
        DB::table("category")->where("id", $Request->id)->update(["title" => $Request->title, "age" => $Request->age]);
        Session::flash("success", "is updatede");
        return redirect("home/index");
    }

    public function delete($id)
    {
        db::table("category")->delete($id);
        Session::flash("success", "id delete");
        return redirect("home/index");
    }
}
