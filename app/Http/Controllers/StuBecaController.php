<?php

namespace App\Http\Controllers;

use App\Models\StuBeca;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StuBecaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class StuBecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $stuBecas = StuBeca::paginate();

        return view('stu-beca.index', compact('stuBecas'))
            ->with('i', ($request->input('page', 1) - 1) * $stuBecas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $stuBeca = new StuBeca();

        return view('stu-beca.create', compact('stuBeca'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StuBecaRequest $request): RedirectResponse
    {
        StuBeca::create($request->validated());

        return Redirect::route('stu-becas.index')
            ->with('success', 'Registro creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $stuBeca = StuBeca::find($id);

        return view('stu-beca.show', compact('stuBeca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $stuBeca = StuBeca::find($id);

        return view('stu-beca.edit', compact('stuBeca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StuBecaRequest $request, StuBeca $stuBeca): RedirectResponse
    {
        $stuBeca->update($request->validated());

        return Redirect::route('stu-becas.index')
            ->with('success', 'Registro actualizado correctamente.');
    }

    public function destroy($id): RedirectResponse
    {
        StuBeca::find($id)->delete();

        return Redirect::route('stu-becas.index')
            ->with('success', 'Registro borrado correctamente.');
    }
}
