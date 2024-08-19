<?php

namespace App\Http\Controllers;

use App\Models\StuCampus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StuCampusRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class StuCampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $stuCampuses = StuCampus::paginate();

        return view('stu-campus.index', compact('stuCampuses'))
            ->with('i', ($request->input('page', 1) - 1) * $stuCampuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $stuCampus = new StuCampus();

        return view('stu-campus.create', compact('stuCampus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StuCampusRequest $request): RedirectResponse
    {
        StuCampus::create($request->validated());

        return Redirect::route('stu-campuses.index')
            ->with('success', 'Registro creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $stuCampus = StuCampus::find($id);

        return view('stu-campus.show', compact('stuCampus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $stuCampus = StuCampus::find($id);

        return view('stu-campus.edit', compact('stuCampus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StuCampusRequest $request, StuCampus $stuCampus): RedirectResponse
    {
        $stuCampus->update($request->validated());

        return Redirect::route('stu-campuses.index')
            ->with('success', 'Registro actualizado correctamente.');
    }

    public function destroy($id): RedirectResponse
    {
        StuCampus::find($id)->delete();

        return Redirect::route('stu-campuses.index')
            ->with('success', 'Registro borrado correctamente.');
    }
}
