<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RewardsPointController extends Controller
{
    public function rewardPoint()
    {
        return view('backend.rewardpoint');
    }
}
