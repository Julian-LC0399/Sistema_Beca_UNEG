<?php

namespace App\Http\Controllers;

use App\Models\StuCareer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StuCareerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class StuCareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $stuCareers = StuCareer::paginate();

        return view('stu-career.index', compact('stuCareers'))
            ->with('i', ($request->input('page', 1) - 1) * $stuCareers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $stuCareer = new StuCareer();

        return view('stu-career.create', compact('stuCareer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StuCareerRequest $request): RedirectResponse
    {
        StuCareer::create($request->validated());

        return Redirect::route('stu-careers.index')
            ->with('success', 'StuCareer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $stuCareer = StuCareer::find($id);

        return view('stu-career.show', compact('stuCareer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $stuCareer = StuCareer::find($id);

        return view('stu-career.edit', compact('stuCareer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StuCareerRequest $request, StuCareer $stuCareer): RedirectResponse
    {
        $stuCareer->update($request->validated());

        return Redirect::route('stu-careers.index')
            ->with('success', 'StuCareer updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        StuCareer::find($id)->delete();

        return Redirect::route('stu-careers.index')
            ->with('success', 'StuCareer deleted successfully');
    }
}
