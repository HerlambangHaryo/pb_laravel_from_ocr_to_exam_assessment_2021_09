<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Exam;
use App\Models\Keyanswer;
use App\Models\Student_exam;
use App\Models\Student_sheet;
use App\Models\Grade;

//Maximum execution time of 60 seconds exceeded

class Student_sheetsController extends Controller
{
    public function index()
    {        
        return redirect('Exams');
    }

    public function show($Student_sheet)
    {
        $active     = 'Exams';
        $content    = 'Student_sheets';
        $panel_name = 'Student Sheets';

        $id_student_exams       = $Student_sheet;

        $Student_exams          = Student_exam::find($id_student_exams);
            $id_exam            = $Student_exams->id_exams;

        $Exam       = DB::table('exams as e')
                        ->join('courses as c', 'c.id', '=', 'e.id_courses')
                        ->select(
                            'e.id', 
                            'c.nama as nama_course', 
                            'e.nama as nama_exam', 
                            'e.tanggal_ujian', 
                            'e.tanggal_scan', 
                            'e.is_generate'
                            )
                        ->where('e.id',$id_exam)
                        ->whereNull('e.deleted_at')
                        ->first();

        $data   = Student_sheet::
                            where('id_exams',$id_exam)
                            ->where('id_student_exams',$id_student_exams)
                            ->get();
    
        return view('content.backend.'.strtolower($content).'.show', 
                compact(
                    'active', 
                    'data', 
                    'content', 
                    'panel_name',
                    'Exam',
                    'Student_exams'
                )
            );
    }
}
