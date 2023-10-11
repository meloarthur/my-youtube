<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class HomeController extends Controller
{
    public function index() {
        $videos = $this->getVideos();

        return view('site.videos', [
            'videos' => $videos
        ]);
    }

    public function getVideos() {
        $videos = Video::orderBy('id', 'desc')->get();

        return json_decode($videos);
    }
}
