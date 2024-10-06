<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WasteCategory;
use Illuminate\Http\Request;

class WasterCategoryController extends Controller
{
    public function wasteCategory()
    {
        $allcategory = WasteCategory::all();
        return view('backend.wasteCategory',compact('allcategory'));
    }
    public function wasteCategoryForm()
    {
        return view('backend.wasteCategoryForm');
    }
    public function wasteCategoryStore(Request $request)
    {
        $allcategory = WasteCategory::all();
              WasteCategory::create([
            'category_name'=>$request->category_name,
        ]);
        return redirect()->back();
    }
}
