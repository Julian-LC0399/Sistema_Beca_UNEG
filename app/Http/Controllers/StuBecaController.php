<?php

namespace App\Http\Controllers;

use App\Models\StuBeca;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StuBecaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Beca;
use App\Models\Campus;
use App\Models\StuCampus;
use App\Models\Career;
use App\Models\StuCareer;

class StuBecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $query = StuBeca::query();
        
        // Apply scholarship filter if selected
        if ($request->has('beca_id') && $request->beca_id != '') {
            $query->where('Beca_id', $request->beca_id);
        }

        // Apply campus filter if selected
        if ($request->has('campus_id') && $request->campus_id != '') {
            $studentIds = StuCampus::where('Campus_id', $request->campus_id)
                                 ->pluck('Student_id');
            $query->whereIn('Student_id', $studentIds);
        }

        // Apply career filter if selected
        if ($request->has('career_id') && $request->career_id != '') {
            $studentIds = StuCareer::where('Career_id', $request->career_id)
                                 ->pluck('Student_id');
            $query->whereIn('Student_id', $studentIds);
        }
        
        $stuBecas = $query->paginate();
        $becas = Beca::all(); // Get all scholarships for the filter dropdown
        $campuses = Campus::all(); // Get all campuses for the filter dropdown
        $careers = Career::all(); // Get all careers for the filter dropdown

        return view('stu-beca.index', compact('stuBecas', 'becas', 'campuses', 'careers'))
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
