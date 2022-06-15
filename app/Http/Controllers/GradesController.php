<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Grade;

class GradesController extends Controller
{
    public function index()
    {
        $data       = Grade::get();
        $content    = 'Grades';
        $panel_name = 'Grades';

        return view('content.backend.'.strtolower($content).'.index', 
                compact(
                    'data', 
                    'content', 
                    'panel_name'
                )
            );
    }

    public function create()
    {
        $content    = 'Grades';
        $panel_name = 'Grades';

        return  view('content.backend.'.strtolower($content).'.create', 
                compact(
                    'content', 
                    'panel_name'
                )
            );
    }

    public function store(Request $request)
    {
        $content    = 'Grades';

        $this->validate($request, [
            'nama'      => 'required',
            'min'       => 'required',
            'max'       => 'required'
        ]);

        $data = Grade::create([
            'nama'      => $request->nama,
            'min'       => $request->min,
            'max'       => $request->max
        ]);

        if($data)
        {
            return redirect()
                ->route($content.'.index')
                ->with(['Success' => 'Data successfully saved!']);
        }else{
            return redirect()
                ->route($content.'.index')
                ->with(['Error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Grade $Grade)
    {
        $content    = 'Grades';
        $panel_name = 'Grades';
        
        return  view('content.backend.'.strtolower($content).'.edit', 
                compact(
                    'content', 
                    'panel_name',
                    'Grade'
                )
            );
    }

    public function update(Request $request, Grade $Grade)
    {
        $content    = 'Grades';

        $this->validate($request, [
            'nama'      => 'required',
            'min'       => 'required',
            'max'       => 'required',
        ]);

        $Grade = Grade::findOrFail($Grade->id);

        $Grade->update([
            'nama'      => $request->nama,
            'min'       => $request->min,
            'max'       => $request->max,
        ]);

        if($Grade)
        {
            return redirect()
                ->route($content.'.index')
                ->with(['Success' => 'Data successfully saved!']);
        }else{
            return redirect()
                ->route($content.'.index')
                ->with(['Error' => 'Data Gagal Disimpan!']);
        }
    }


    public function show(Grade $Grade)
    {
        $content    = 'Grades';
        $panel_name = 'Grades';
        
        return  view('content.backend.'.strtolower($content).'.show', 
                compact(
                    'content', 
                    'panel_name',
                    'Grade'
                )
            );
    }

    public function destroy($id)
    {
        $content    = 'Grades';
        $panel_name = 'Grades';

        $grade = Grade::findOrFail($id);
        $grade->delete();

        if($grade){        
            return redirect()
                ->route($content.'.index')
                ->with(['Deleted' => 'Data successfully deleted!']);
        }else{
            return redirect()
                ->route($content.'.index')
                ->with(['Error' => 'Data Gagal Disimpan!']);
        }
    }
}
