<?php

namespace App\Http\Controllers;

use App\Models\Beca;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\BecaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $becas = Beca::paginate();

        return view('beca.index', compact('becas'))
            ->with('i', ($request->input('page', 1) - 1) * $becas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $beca = new Beca();

        return view('beca.create', compact('beca'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BecaRequest $request): RedirectResponse
    {
        Beca::create($request->validated());

        return Redirect::route('becas.index')
            ->with('success', 'Beca created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $beca = Beca::find($id);

        return view('beca.show', compact('beca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $beca = Beca::find($id);

        return view('beca.edit', compact('beca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BecaRequest $request, Beca $beca): RedirectResponse
    {
        $beca->update($request->validated());

        return Redirect::route('becas.index')
            ->with('success', 'Beca updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Beca::find($id)->delete();

        return Redirect::route('becas.index')
            ->with('success', 'Beca deleted successfully');
    }
}
