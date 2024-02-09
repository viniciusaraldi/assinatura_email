<?php

namespace App\Http\Controllers;

use App\Models\Assinatura;
use App\Models\ImagemFundo;
use Illuminate\Http\Request;

class AssinaturasController extends Controller
{
    public function index() {
        $assinaturas = Assinatura::all();
        return view('home.assinatura', ['assinaturas' => $assinaturas]);
    }

    public function show() {
        return view('home.formAssinatura');
    }

    public function store(Request $resquest) {
        $dados = new Assinatura;
        $dados->colaborador = $resquest->colaborador;
        $dados->funcao = $resquest->funcao;
        $dados->telefone = $resquest->telefone;
        $dados->celular = $resquest->celular;
        $dados->empresa = $resquest->empresa;

        $dados->save();
        return to_route('assinatura')->with('succ', "Cadastrado colaborador com sucesso!");
    }

    public function detail(Request $request, $id) {
        $assinaturaEncontrada = Assinatura::findOrFail($id);
        $imagem = ImagemFundo::where('empresa', $assinaturaEncontrada->empresa)->first();
        if ($imagem == null) {
            return redirect()->back()->with('msg', 'Imagem não encontrada');
        }
        return view('home.detail', [
            'assinatura' => $assinaturaEncontrada,
            'imagem' => $imagem
        ]);
    }

    public function edit(Request $request, $id) {
        $assinaturaEncontrada = Assinatura::findOrFail($id);
        return view('home.edit', ['assinatura' => $assinaturaEncontrada]);
    }

    public function update(Request $resquest, $id) {
        $dados = Assinatura::findOrFail($id);

        $dados->update([
            $dados->colaborador = $resquest->input('colaborador'),
            $dados->funcao = $resquest->input('funcao'),
            $dados->telefone = $resquest->input('telefone'),
            $dados->celular = $resquest->input('celular'),
            $dados->empresa = $resquest->input('empresa'),
        ]);
       
        return to_route('assinatura')->with('succ', "Cadastrado atualizado com sucesso!");
    }

    public function destroy(Request $request, $id) {
        $id = Assinatura::findOrFail($id);
        if ($id) {
            $id->delete();
            return to_route('assinatura')->with('dest', 'Assinatura Excluida com sucesso!');
        } else {
            return redirect('/assinaturas')->with('dest', "Assinatura não foi excluída, verifique com o suporte!");
        }
    }
}
