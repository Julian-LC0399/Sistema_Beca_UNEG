<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\InstitutionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $institutions = Institution::paginate();

        return view('institution.index', compact('institutions'))
            ->with('i', ($request->input('page', 1) - 1) * $institutions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $institution = new Institution();

        return view('institution.create', compact('institution'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InstitutionRequest $request): RedirectResponse
    {
        Institution::create($request->validated());

        return Redirect::route('institutions.index')
            ->with('success', 'Institution created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $institution = Institution::find($id);

        return view('institution.show', compact('institution'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $institution = Institution::find($id);

        return view('institution.edit', compact('institution'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InstitutionRequest $request, Institution $institution): RedirectResponse
    {
        $institution->update($request->validated());

        return Redirect::route('institutions.index')
            ->with('success', 'Institution updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Institution::find($id)->delete();

        return Redirect::route('institutions.index')
            ->with('success', 'Institution deleted successfully');
    }
}
