<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Exam;
use App\Models\Keyanswer;
use App\Models\Student_exam;
use App\Models\Student_sheet;
use App\Models\Grade;

use PDF;
use Image;

use Illuminate\Support\Str;

class Student_examsController extends Controller
{
    public function show($Student_exam)
    {
        $id_exam       = $Student_exam;

        $active     = 'Exams';
        $content    = 'Student_exams';
        $panel_name = 'Student Exams';

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
                        ->first();

        $data   = Student_exam::
                            where('id_exams',$id_exam)
                            ->get();

        // if($Exam->is_generate == 0)
        // {       
        //     foreach ($data as $row) 
        //     {
        //         $answer         =  substr($row->lineofcode, -50);
        //         $total_correct  = 0;

        //         for ($i=0; $i < strlen($answer); $i++) 
        //         { 
        //             $correct    = 0;
        //             $Keyanswer  = Keyanswer::
        //                             where('id_exams',$id_exam)
        //                             ->where('no',($i + 1))
        //                             ->first();

        //             if($Keyanswer->key == $answer[$i])
        //             {
        //                 $correct = 1;
        //                 $total_correct++;
        //             }

        //             // Student_sheet
        //                 Student_sheet::create([
        //                     'id_exams'                  => $id_exam,                          
        //                     'id_student_exams'          => $row->id,              
        //                     'no'                        => ($i + 1),                       
        //                     'key'                       => $Keyanswer->key,              
        //                     'answer'                    => $answer[$i],             
        //                     'correct'                   => $correct 
        //                 ]);
        //         }

        //         $student_exam_update = Student_exam::findOrFail($row->id);

        //         $total_weight   = $total_correct * 2;
        //         $total_grade    = grade::
        //                             where('min', '<=', $total_weight)
        //                             ->where('max', '>=', $total_weight)
        //                             ->first();

        //         $student_exam_update->update([
        //             'true'      => $total_correct,
        //             'weight'    => $total_weight,
        //             'grade'     => $total_grade->nama
        //         ]);
        //     }
        // }
        
        // $Exam_final = Exam::findOrFail($Exam->id);

        // $Exam_final->update([
        //     'is_generate'      => 1,
        // ]);

        $new_data   = Student_exam::
                            where('id_exams',$id_exam)
                            ->get();

        return view('content.backend.'.strtolower($content).'.show', 
                compact(
                    'active', 
                    'new_data', 
                    'content', 
                    'panel_name',
                    'Exam'
                )
            );
    }

    public function exam_report($Student_exam)
    {
        $id_exam       = $Student_exam;

        $active     = 'Exams';
        $content    = 'Student_exams';
        $panel_name = 'Student Exams';

        $data       = DB::table('exams as e')
                        ->join('student_exams as se', 'se.id_exams', '=', 'e.id')
                        ->select(
                            'se.id', 
                            'se.interval', 
                            'se.nim', 
                            'se.nama', 
                            'se.true', 
                            'se.weight', 
                            'se.grade', 
                            'se.id_exams', 
                            'e.version', 
                            'e.deleted_at'
                            )
                        ->where('e.id',$id_exam)
                        ->whereNull('se.deleted_at')
                        ->orderby('se.nama')
                        ->get();

        $Exam       = DB::table('universities as u')
                        ->join('faculties as f', 'f.id_universities', '=', 'u.id')
                        ->join('courses as c', 'c.id_faculties', '=', 'f.id')
                        ->join('exams as e', 'e.id_courses', '=', 'c.id')
                        ->select(
                            'e.id', 
                            'e.nama as nama_exam', 
                            'c.nama as nama_course', 
                            'f.nama as nama_faculty', 
                            'u.nama as nama_university', 
                            'e.tanggal_ujian',  
                            'e.tanggal_scan' 
                            )
                        ->where('e.id',$id_exam)
                        ->first();

        $konversi_nilai = DB::table('student_exams as se')
                        ->join('grades as g', 'g.nama', '=', 'se.grade')
                        ->select(
                            'se.grade',
                            DB::raw('count(*) as count')
                            ) 
                        ->where('se.id_exams',$id_exam)
                        ->groupby('se.grade')                        
                        ->orderby('g.id')
                        ->get();

        // return view('content.backend.'.strtolower($content).'.exam_report', 
        //         compact(
        //             'active', 
        //             'data', 
        //             'content', 
        //             'panel_name', 
        //             'Exam', 
        //             'konversi_nilai'
        //         )
        //     );
           
        

        $pdf = PDF::loadView('content.backend.'.strtolower($content).'.exam_report', 
            compact(
                    'active', 
                    'data', 
                    'content', 
                    'panel_name', 
                    'Exam', 
                    'konversi_nilai'
                ))->setPaper('a4', 'landscape');

        // // $pdf = \PDF::loadView('chartjs');
        // $pdf->setOption('enable-javascript', true);
        // $pdf->setOption('javascript-delay', 5000);
        // $pdf->setOption('enable-smart-shrinking', true);
        // $pdf->setOption('no-stop-slow-scripts', true);
        // // return $pdf->download('chart.pdf');

        // return $pdf->download('exam_report_.pdf');

        // -- new
        // $pdf = \PDF::loadView('graphs');
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->download('exam_report_.pdf');
    }

    public function item_and_distructor_analysis($Student_exam)
    {
        //ITEM AND DISTRUCTOR ANALYSIS

        $id_exam       = $Student_exam;

        $active     = 'Exams';
        $content    = 'Student_exams';
        $panel_name = 'Item and Distructor Analysis';

        $data       = DB::table('exams as e')
                        ->join('keyanswers as k', 'k.id_exams', '=', 'e.id')
                        ->select(
                            'k.id',
                            'k.no',
                            'k.key',
                            'e.version',
                            'k.id_exams'
                            )
                        ->where('e.id',$id_exam)
                        ->orderby('k.no')
                        ->get();

        $Exam       = DB::table('universities as u')
                        ->join('faculties as f', 'f.id_universities', '=', 'u.id')
                        ->join('courses as c', 'c.id_faculties', '=', 'f.id')
                        ->join('exams as e', 'e.id_courses', '=', 'c.id')
                        ->select(
                            'e.id', 
                            'e.nama as nama_exam', 
                            'c.nama as nama_course', 
                            'f.nama as nama_faculty', 
                            'u.nama as nama_university', 
                            'e.tanggal_ujian',  
                            'e.tanggal_scan' 
                            )
                        ->where('e.id',$id_exam)
                        ->first();


        return view('content.backend.'.strtolower($content).'.item_and_distructor_analysis', 
                compact(
                    'active', 
                    'data', 
                    'content', 
                    'panel_name', 
                    'Exam',
                    'Student_exam'
                )
            );        
           
        // $pdf = PDF::loadView('content.backend.'.strtolower($content).'.item_and_distructor_analysis', 
        //     compact(
        //             'active', 
        //             'data', 
        //             'content', 
        //             'panel_name', 
        //             'Exam',
        // 'Student_exam'
        //         ));        
     
        // return $pdf->download('item_and_distructor_analysis_.pdf');
    }

    public function delete_duplicate($Student_exam)
    {
        // $duplicated = DB::table('student_exams')
        //             ->select('nama', DB::raw('count(`nama`) as occurences'))
        //             ->where('id_exams', '=', $Student_exam)
        //             ->groupBy('nama')
        //             ->having('occurences', '>', 1)
        //             ->get();

        // // foreach ($duplicated as $duplicate) 
        // // {
        // //     Student_exam::where('nama', $duplicate->nama)->delete();
        // // }

        // $same_data = DB::table('student_exams')->where('id_exams', '=', $Student_exam);

        // if ($same_data->count() > 1)
        // {
        //     $same_data_before = clone $same_data;
        //     $top = $same_data->first();
        //     $same_data_before->where('id', '!=', $top->id)->delete();
        // }

        DB::delete(DB::raw("DELETE t1 FROM student_exams t1 INNER JOIN student_exams t2 WHERE  t1.id < t2.id AND t1.nama = t2.nama"));



        Student_exam::where('nama', '')->delete();

        return redirect()
            ->route('Student_exams.show', $Student_exam)
            ->with(['Success' => 'Data successfully saved!']);
    }

    public function delete_me($id)
    {
        $content    = 'Student_exams';
        $panel_name = 'Student Exams';

        $data = Student_exam::findOrFail($id);
        $data->delete();

        if($data)
        {        
            return redirect()
                ->route('Student_exams.show', $data->id_exams)
                ->with(['Success' => 'Data successfully saved!']);
        }else{
            return redirect()
                ->route('Student_exams.show', $data->id_exams)
                ->with(['Success' => 'Data successfully saved!']);
        }
    }

    public function check_exam($Student_exam)
    {
        $id_exam       = $Student_exam;

        $active     = 'Exams';
        $content    = 'Student_exams';
        $panel_name = 'Student Exams';

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
                        ->first();

        $data   = Student_exam::
                            where('id_exams',$id_exam)
                            ->get();

        if($Exam->is_generate == 0)
        {       
            foreach ($data as $row) 
            {
                $answer         =  substr($row->lineofcode, -50);
                $total_correct  = 0;

                for ($i=0; $i < strlen($answer); $i++) 
                { 
                    $correct    = 0;
                    $Keyanswer  = Keyanswer::
                                    where('id_exams',$id_exam)
                                    ->where('no',($i + 1))
                                    ->first();

                    if($Keyanswer->key == $answer[$i])
                    {
                        $correct = 1;
                        $total_correct++;
                    }

                    // Student_sheet
                        Student_sheet::create([
                            'id_exams'                  => $id_exam,                          
                            'id_student_exams'          => $row->id,              
                            'no'                        => ($i + 1),                       
                            'key'                       => $Keyanswer->key,              
                            'answer'                    => $answer[$i],             
                            'correct'                   => $correct 
                        ]);
                }

                $student_exam_update = Student_exam::findOrFail($row->id);

                $total_weight   = $total_correct * 2;
                $total_grade    = grade::
                                    where('min', '<=', $total_weight)
                                    ->where('max', '>=', $total_weight)
                                    ->first();

                $student_exam_update->update([
                    'true'      => $total_correct,
                    'weight'    => $total_weight,
                    'grade'     => $total_grade->nama
                ]);
            }
        }
        
        $Exam_final = Exam::findOrFail($Exam->id);

        $Exam_final->update([
            'is_generate'      => 1,
        ]);

    
        return redirect()
            ->route('Student_exams.show', $Student_exam)
            ->with(['Success' => 'Data successfully saved!']);
    }
}
