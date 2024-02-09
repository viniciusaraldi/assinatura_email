<?php

namespace App\Http\Controllers;

use App\Models\ImagemFundo;
use Illuminate\Http\Request;

class ImagemFundoController extends Controller
{
    public function index() {
        $imagens = ImagemFundo::all();
        return view('home.assinatura', ['imagens' => $imagens]);
    }

    public function show() {
        return view('home.formImagem');
    }

    public function store(Request $request) {
        $dados = new ImagemFundo;
        $dados->empresa = $request->empresa;
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $urlImage = $request->imagem;
            $extension = $urlImage->extension();
            $nameImage = md5($urlImage->getClientOriginalName() . strtotime('now')) . ".{$extension}";
            $request->imagem->move(public_path('/imagens/empresas/assinaturas'), $nameImage);
            $dados->imagem = $nameImage; 
        }

        $dados->save();
        return to_route('assinatura')->with('succ', "Cadastrado imagem com sucesso!");
    }

    public function detail(Request $request, $id) {
        $assinaturaEncontrada = ImagemFundo::findOrFail($id);
        return to_route('detail', ['assinatura' => $assinaturaEncontrada]);
    }
}
