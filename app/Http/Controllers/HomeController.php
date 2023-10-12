<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        $videos = $this->getAllVideos();

        return view('site.videos', [
            'videos' => $videos
        ]);
    }

    public function getAllVideos()
    {
        $videos = Video::orderBy('id')->get();

        return json_decode($videos);
    }

    public function getVideo($id)
    {
        $video = Video::find($id);

        if (!isset($video)) {
            return response()->json(['erro' => 'Vídeo não encontrado'], 404);
        }

        return json_decode($video);
    }

    public function viewCadastro()
    {
        return view('site.cadastro');
    }

    public function viewAtualizar(Request $request)
    {
        $video = $this->getVideo($request->id);
        
        return view('site.atualizar',[
            'video' => $video
        ]);
    }

    public function cadastro(Request $request)
    {
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

    public function atualizar(Request $request)
    {
        try {
            
            $video = Video::find($request->id);

            if (!isset($video)) {
                return response()->json(['erro' => 'Vídeo solicitado não existe'], 404);
            }

            $video->update([
                'titulo' => $request->titulo
            ]);

            return redirect()
                ->route('home')
                ->with('msg', 'Vídeo atualizado com sucesso');

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao atualizar vídeo'], 400);

        }
    }

    public function excluir(Request $request)
    {
        try {
            
            $video = Video::find($request->id);

            if (!isset($video)) {
                return response()->json(['erro' => 'Vídeo solicitado não existe'], 404);
            }
            
            $video->delete();

            return redirect()
                ->route('home')
                ->with('msg', 'Vídeo excluido com sucesso');

        } catch (\Throwable $th) {

            report($th);
            return response()->json(['erro' => 'Erro ao excluir vídeo'], 400);

        }
    }
}
