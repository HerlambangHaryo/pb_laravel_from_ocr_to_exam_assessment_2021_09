<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Faculty;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $data           = DB::table('courses as c')
                            ->join('faculties as f', 'f.id', '=', 'c.id_faculties')
                            ->select(
                                'c.id', 
                                'f.nama as nama_fakultas', 
                                'c.nama as nama_course', 
                                )
                            ->whereNull('c.deleted_at')
                            ->get();

        $content    = 'Courses';
        $panel_name = 'Courses';

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
        $content    = 'Courses';
        $panel_name = 'Courses';

        $faculty       = Faculty::
                            orderBy('nama')
                            ->get();

        return  view('content.backend.'.strtolower($content).'.create', 
                compact(
                    'content',
                    'faculty', 
                    'panel_name'
                )
            );
    }

    public function store(Request $request)
    {
        $content    = 'Courses';

        $this->validate($request, [
            'id_faculties'      => 'required',
            'nama'              => 'required',
        ]);

        $data = Course::create([
            'id_faculties'      => $request->id_faculties,
            'nama'              => $request->nama,
        ]);

        if($data)
        {
            return redirect()
                ->route($content.'.index')
                ->with(['Success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()
                ->route($content.'.index')
                ->with(['Error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Course $Course)
    {
        $content    = 'Courses';
        $panel_name = 'Courses';

        $faculty       = Faculty::
                            orderBy('nama')
                            ->get();
        
        return  view('content.backend.'.strtolower($content).'.edit', 
                compact(
                    'content', 
                    'panel_name',
                    'faculty',
                    'Course'
                )
            );
    }

    public function update(Request $request, Course $Course)
    {
        $content    = 'Courses';

        $this->validate($request, [
            'id_faculties'      => 'required',
            'nama'              => 'required',
        ]);

        $Course = Course::findOrFail($Course->id);

        $Course->update([
            'id_faculties'      => $request->id_faculties,
            'nama'              => $request->nama,
        ]);

        if($Course)
        {
            return redirect()
                ->route($content.'.index')
                ->with(['Success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()
                ->route($content.'.index')
                ->with(['Error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(Course $Course)
    {
        $content    = 'Courses';
        $panel_name = 'Courses';

        $faculty       = Faculty::
                            orderBy('nama')
                            ->get();
        
        return  view('content.backend.'.strtolower($content).'.show', 
                compact(
                    'content', 
                    'panel_name',
                    'faculty',
                    'Course'
                )
            );
    }

    public function destroy($id)
    {
        $content    = 'Courses';
        $panel_name = 'Courses';

        $course = Course::findOrFail($id);
        $course->delete();

        if($course){        
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
