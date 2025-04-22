<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use App\Models\Curso;
use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    public function index()
    {
        // Mostrar todos os componentes
        $componentes = Componente::all();
        return view('componente.index', compact('componentes'));
    }

    public function create()
    {
        // Mostrar formulário para criar um novo componente
        $cursos = Curso::all();
        return view('componente.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        // Validar os dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'carga_horaria' => 'required|string|max:50',
            'curso_id' => 'required|exists:cursos,id',
        ]);

        // Criar um novo componente
        Componente::create([
            'nome' => $request->nome,
            'carga_horaria' => $request->carga_horaria,
            'curso_id' => $request->curso_id,
        ]);

        return redirect()->route('componente.index')->with('success', 'Componente criado com sucesso!');
    }

    public function edit(Componente $componente)
    {
        // Mostrar o formulário para editar um componente
        $cursos = Curso::all();
        return view('componente.edit', compact('componente', 'cursos'));
    }

    public function update(Request $request, Componente $componente)
    {
        // Validar os dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'carga_horaria' => 'required|string|max:50',
            'curso_id' => 'required|exists:cursos,id',
        ]);

        // Atualizar o componente
        $componente->update([
            'nome' => $request->nome,
            'carga_horaria' => $request->carga_horaria,
            'curso_id' => $request->curso_id,
        ]);

        return redirect()->route('componente.index')->with('success', 'Componente atualizado com sucesso!');
    }

    public function destroy(Componente $componente)
    {
        // Deletar o componente
        $componente->delete();
        return redirect()->route('componente.index')->with('success', 'Componente deletado com sucesso!');
    }
}
