<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WasterCategoryController extends Controller
{
    public function wasteCategory()
    {
        return view('backend.wasteCategory');
    }
}
