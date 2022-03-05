<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::all();
        return view('category.index', compact('data'));
    }
    public function view($id){
        return view('category.view');
    }
    public function create(){
        return view('category.create');
    }
    public function insert(Request $request){
        $this->validate(request(),[
            'name'=>'required',
            'status'=>'required'
        ]);
        Category::create(request(['name','status']));
        return view('/category');

    }
    public function edit($id){
        $data = Category::where('id',$id)->find($id);
        return view('category.edit',compact('data'));
    }
    public function update(Request $request, $id){
        $data = $request->all();
        $data = Category::find($id);
        $data->name = $request->name ;
        $data->status = $request->status;
        $data->save();
        return redirect('/category');

    }
    public function delete($id){
        Category::where('id',$id)->delete();
        return redirect()->back();
    }
}
