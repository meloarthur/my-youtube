<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function viewVideos() {
        return view('site.videos');
    }
}
