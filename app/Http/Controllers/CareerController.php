<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CareerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $careers = Career::paginate();

        return view('career.index', compact('careers'))
            ->with('i', ($request->input('page', 1) - 1) * $careers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $career = new Career();

        return view('career.create', compact('career'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CareerRequest $request): RedirectResponse
    {
        Career::create($request->validated());

        return Redirect::route('careers.index')
            ->with('success', 'Carrera creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $career = Career::find($id);

        return view('career.show', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $career = Career::find($id);

        return view('career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CareerRequest $request, Career $career): RedirectResponse
    {
        $career->update($request->validated());

        return Redirect::route('careers.index')
            ->with('success', 'Registro de carrera actualizado correctamente.');
    }

    public function destroy($id): RedirectResponse
    {
        Career::find($id)->delete();

        return Redirect::route('careers.index')
            ->with('success', 'Registro de carrera borrado correctamente.');
    }
}
