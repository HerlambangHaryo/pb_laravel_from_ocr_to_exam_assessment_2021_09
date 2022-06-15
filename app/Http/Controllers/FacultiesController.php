<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Models\Faculty;
use App\Models\University;


class FacultiesController extends Controller
{
    public function index()
    {
        $data           = DB::table('faculties as f')
                            ->join('universities as u', 'u.id', '=', 'f.id_universities')
                            ->select(
                                'f.id', 
                                'u.nama as nama_universitas', 
                                'f.nama as nama_fakultas', 
                                )
                            ->whereNull('f.deleted_at')
                            ->get();


        $content    = 'Faculties';
        $panel_name = 'Faculties';

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
        $content    = 'Faculties';
        $panel_name = 'Faculties';

        $university       = University::
                            orderBy('nama')
                            ->get();

        return  view('content.backend.'.strtolower($content).'.create', 
                compact(
                    'content', 
                    'panel_name',
                    'university'
                )
            );
    }

    public function store(Request $request)
    {
        $content    = 'Faculties';

        $this->validate($request, [
            'id_universities'       => 'required',
            'nama'                  => 'required',
        ]);

        $data = Faculty::create([
            'id_universities'       => $request->id_universities,
            'nama'                  => $request->nama,
        ]);

        if($data)
        {
            return redirect()
                ->route($content.'.index')
                ->with(['Success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()
                ->route($content.'.index')
                ->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Faculty $Faculty)
    {
        $content    = 'Faculties';
        $panel_name = 'Faculties';

        $university       = University::
                            orderBy('nama')
                            ->get();
        
        return  view('content.backend.'.strtolower($content).'.edit', 
                compact(
                    'content', 
                    'panel_name',
                    'university',
                    'Faculty'
                )
            );
    }

    public function update(Request $request, Faculty $Faculty)
    {
        $content    = 'Faculties';
        $panel_name = 'Faculties';

        $this->validate($request, [
            'id_universities'       => 'required',
            'nama'                  => 'required',
        ]);

        $Faculty = Faculty::findOrFail($Faculty->id);

        $Faculty->update([
            'id_universities'       => $request->id_universities,
            'nama'                  => $request->nama,
        ]);


        if($Faculty)
        {
            return redirect()
                ->route($content.'.index')
                ->with(['Success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()
                ->route($content.'.index')
                ->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Faculty $Faculty)
    {
        $content    = 'Faculties';
        $panel_name = 'Faculties';

        $university       = University::
                            orderBy('nama')
                            ->get();
        
        return  view('content.backend.'.strtolower($content).'.show', 
                compact(
                    'content', 
                    'panel_name',
                    'university',
                    'Faculty'
                )
            );
    }

    public function destroy($id)
    {
        $content    = 'Faculties';
        $panel_name = 'Faculties';

        $faculty = Faculty::findOrFail($id);
        $faculty->delete();

        if($faculty){        
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
