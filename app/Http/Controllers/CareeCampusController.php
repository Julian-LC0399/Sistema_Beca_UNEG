<?php

namespace App\Http\Controllers;

use App\Models\CareeCampus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CareeCampusRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CareeCampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $careeCampuses = CareeCampus::paginate();

        return view('caree-campus.index', compact('careeCampuses'))
            ->with('i', ($request->input('page', 1) - 1) * $careeCampuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $careeCampus = new CareeCampus();

        return view('caree-campus.create', compact('careeCampus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CareeCampusRequest $request): RedirectResponse
    {
        CareeCampus::create($request->validated());

        return Redirect::route('caree-campuses.index')
            ->with('success', 'Registro creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $careeCampus = CareeCampus::find($id);

        return view('caree-campus.show', compact('careeCampus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $careeCampus = CareeCampus::find($id);

        return view('caree-campus.edit', compact('careeCampus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CareeCampusRequest $request, CareeCampus $careeCampus): RedirectResponse
    {
        $careeCampus->update($request->validated());

        return Redirect::route('caree-campuses.index')
            ->with('success', 'Registro actualizado correctamente.');
    }

    public function destroy($id): RedirectResponse
    {
        CareeCampus::find($id)->delete();

        return Redirect::route('caree-campuses.index')
            ->with('success', 'Registro borrado correctamente.');
    }
}
