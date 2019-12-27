<?php

namespace App\Http\Controllers\Admin;

use App\Model\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RatingController extends Controller
{
    public function index()
    {
        $rating=Rating::with('bus')->get();

        return view('admin.rating.index',['Rating'=>$rating]);
    }
}
