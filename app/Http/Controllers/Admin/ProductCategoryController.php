<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCategoryStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    public function create(){
        return view('admin.pages.product_category.create');
    }
    
    public function store(ProductCategoryStoreRequest $request){
            $check = DB::insert("INSERT INTO product_category(name, slug, status) VALUES (?, ?, ?)",
            [$request->name, $request->slug, $request->status]);
            return redirect()->route('admin.pages.product_category.list')
            ->with('msg', $check ? 'success' : 'fail');
            dd($request->all());
    }
}
