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
            if ($request->hasFile('arquivo')) {
                $file = $request->file('arquivo');
                $fileName = $file->getClientOriginalName(); // Nome original do arquivo
    
                // Mova o arquivo para um diretório no projeto (por exemplo, "public/videos")
                $file->storeAs('videos', $fileName, 'public');
    
                Video::create([
                    'titulo' => $request->input('titulo'),
                    'duracao' => $request->input('duracao'),
                    'nome_arquivo' => $fileName // Salve o nome do arquivo no banco de dados
                ]);
    
                return redirect('/');
            } else {
                return response()->json(['erro' => 'Nenhum arquivo enviado.'], 400);
            }
        } catch (\Throwable $th) {
            report($th);
            return response()->json(['erro' => 'Erro ao inserir vídeo'], 400);
        }
    }
}
