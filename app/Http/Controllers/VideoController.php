<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function viewVideos() {
        dd('teste');
        $videos = $this->index();


        return view('site.videos', [
            'videos' => $videos
        ]);
    }

    public function index() {
        $videos = Video::orderBy('id', 'desc')->get();

        return json_decode($videos);
    }
}
