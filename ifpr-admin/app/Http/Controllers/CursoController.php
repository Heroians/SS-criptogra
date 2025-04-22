<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Nivel;
use App\Models\Eixo;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        // Mostrar todos os cursos
        $cursos = Curso::all();
        return view('curso.index', compact('cursos'));
    }

    public function create()
    {
        // Mostrar formulário para criar um novo curso
        $nivels = Nivel::all();
        $eixos = Eixo::all();
        return view('curso.create', compact('nivels', 'eixos'));
    }

    public function store(Request $request)
    {
        // Validar os dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'abreviatura' => 'required|string|max:10',
            'tempo' => 'required|string',
            'nivel_id' => 'required|exists:nivels,id',
            'eixo_id' => 'required|exists:eixos,id',
        ]);

        // Criar um novo curso
        Curso::create([
            'nome' => $request->nome,
            'abreviatura' => $request->abreviatura,
            'tempo' => $request->tempo,
            'nivel_id' => $request->nivel_id,
            'eixo_id' => $request->eixo_id,
        ]);

        return redirect()->route('curso.index')->with('success', 'Curso criado com sucesso!');
    }

    public function edit(Curso $curso)
    {
        // Mostrar o formulário para editar um curso
        $nivels = Nivel::all();
        $eixos = Eixo::all();
        return view('curso.edit', compact('curso', 'nivels', 'eixos'));
    }

    public function update(Request $request, Curso $curso)
    {
        // Validar os dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'abreviatura' => 'required|string|max:10',
            'tempo' => 'required|string',
            'nivel_id' => 'required|exists:nivels,id',
            'eixo_id' => 'required|exists:eixos,id',
        ]);

        // Atualizar o curso
        $curso->update([
            'nome' => $request->nome,
            'abreviatura' => $request->abreviatura,
            'tempo' => $request->tempo,
            'nivel_id' => $request->nivel_id,
            'eixo_id' => $request->eixo_id,
        ]);

        return redirect()->route('curso.index')->with('success', 'Curso atualizado com sucesso!');
    }

    public function destroy(Curso $curso)
    {
        // Deletar o curso
        $curso->delete();
        return redirect()->route('curso.index')->with('success', 'Curso deletado com sucesso!');
    }
}
