<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecyclingCenterController extends Controller
{
    public function recyclingCenter()
    {
        return view('backend.recyclingCenter');
    }
}
