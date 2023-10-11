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

    public function viewCadastro() {
        return view('site.cadastro');
    }

    public function cadastro(Request $request) {
        try {

            Video::create([
                'titulo' => $request->input('titulo'),
                'duracao' => $request->input('duracao'),
                'nome_arquivo' => $request->input('nome_arquivo')
            ]);

            return redirect('/');

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao inserir vídeo'], 400);

        }
    }
}
