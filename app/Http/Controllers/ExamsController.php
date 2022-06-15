<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Models\Course;
use App\Models\Exam;
use App\Models\Faculty;

use App\Models\Keyanswer;
use App\Models\Student_exam;
use App\Models\Student_sheet;

class ExamsController extends Controller
{
    public function index()
    {
        $data           = DB::table('exams as e')
                            ->join('courses as c', 'c.id', '=', 'e.id_courses')
                            ->join('faculties as f', 'f.id', '=', 'c.id_faculties')
                            ->select(
                                'e.id', 
                                'f.nama as nama_fakultas', 
                                'c.nama as nama_course', 
                                'e.nama as nama_exam', 
                                'e.tanggal_ujian as exam_date', 
                                'e.tanggal_scan as scan_date', 
                                'e.format', 
                                )
                            ->whereNull('e.deleted_at')
                            ->get();

        $content    = 'Exams';
        $panel_name = 'Exams';

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
        $content    = 'Exams';
        $panel_name = 'Exams';

        $course       = Course::
                            orderBy('nama')
                            ->get();

        return  view('content.backend.'.strtolower($content).'.create', 
                compact(
                    'content',
                    'course', 
                    'panel_name'
                )
            );
    }

    public function store(Request $request)
    {
        $content    = 'Exams';

        // Exam
            $this->validate($request, [
                'id_courses'        => 'required',
                'nama'              => 'required',
                'tanggal_ujian'     => 'required',
                'file'              => 'required',
                'format'              => 'required',
            ]);

            $file = $request->file('file');
            $file->storeAs('public/file/'.$content, $file->hashName());

            // Read
            $fp         = fopen($file, "r");
            $text       = fread($fp, filesize($file));

            $data = Exam::create([
                'id_courses'        => $request->id_courses,
                'nama'              => $request->nama,
                'tanggal_ujian'     => $request->tanggal_ujian,
                'tanggal_scan'      => date('Y-m-d'),
                'file'              => $file->hashName(),
                'text'              => $text,
                'is_generate'       => 0,
                'format'            => $request->format,
            ]);

            $format = $request->format;

            if($format == '1111')
            {
                // breakdown
                $temp =  explode(PHP_EOL, $data->text);

                    // all line
                        $temp2 =  $temp[0];
                        $temp4 = str_replace('     ', '', $temp2);
                        $temp5 = str_replace('    ', '', $temp4);
                        $temp6 = str_replace('   ', '', $temp5);

                        $TEXT_keyanswer =  explode(" ", $temp6);
                        
                        $last_key = count($TEXT_keyanswer) - 1;

                // Keyanswer                    
                    for ($i=0; $i < strlen($TEXT_keyanswer[$last_key]); $i++) 
                    { 
                        Keyanswer::create([
                            'id_exams'      => $data->id,
                            'no'            => ($i + 1),
                            'key'           => $TEXT_keyanswer[$last_key][$i]
                        ]);
                    }

                // Student_exam                   
                    for ($i=1; $i < count($temp); $i++) 
                    { 
                        $lineofcode = str_replace("     ", "", $temp[$i]);
                        $cek_lineofcode = str_replace(" ", "", $temp[$i]);

                        if($cek_lineofcode != "")
                        {
                            $interval =  substr($lineofcode, 0, 4);
                            $answer =  substr($lineofcode, -50);

                            $clean_answer = str_replace($answer,'',$lineofcode);
                            $clean_answer_interval = str_replace($interval,'',$clean_answer);
                            $pre_kode =  substr($clean_answer_interval, -3);
                            $kode = str_replace(' ', '', $pre_kode);

                            $clean_kode_answer_interval = str_replace($kode,'',$clean_answer_interval);
                            $pre_tanggal_ujian =  substr($clean_kode_answer_interval, -8);
                            $tanggal_ujian = '20'.substr($pre_tanggal_ujian,4,2).'-'.substr($pre_tanggal_ujian,2,2).'-'.substr($pre_tanggal_ujian,0,2);

                                $cek_tanggal = str_replace(' ', '', $pre_tanggal_ujian);

                            $clean_tanggal_ujian_kode_answer_interval = str_replace($pre_tanggal_ujian,'',$clean_kode_answer_interval);
                            $pre_nim =  substr($clean_tanggal_ujian_kode_answer_interval, -13);
                            //$nim = str_replace(' ', '', $pre_nim);

                            $nama = str_replace($pre_nim,'',$clean_tanggal_ujian_kode_answer_interval);
                            if(!is_numeric($pre_nim[0])  &&  !is_numeric($pre_tanggal_ujian) )
                            {
                                $nama = $clean_kode_answer_interval;
                            }
                            
                            if(!is_numeric($cek_tanggal))
                            {
                                $tanggal_ujian =  NULL;
                            }

                            $nim = $pre_nim;
                            if(!is_numeric($pre_nim[0]))
                            {
                                $nim = '';
                            }

                            $student_exam = Student_exam::create([
                                'id_exams'          => $data->id,
                                'interval'          => trim($interval),
                                'nama'              => trim($nama),
                                'nim'               => trim($nim),
                                'tanggal_ujian'     => $tanggal_ujian,
                                'lineofcode'        => $lineofcode
                            ]);

                            /*
                            $total_correct = 0;
                            for ($i=0; $i < strlen($answer); $i++) 
                            { 
                                $correct = 0;
                                if($TEXT_keyanswer[5][$i] == $answer[$i])
                                {
                                    $correct = 1;
                                    $total_correct++;
                                }

                                // Student_sheet
                                    Student_sheet::create([
                                        'id_exams'                  => $data->id,                            
                                        'id_student_exams'          => $student_exam->id,              
                                        'no'                        => ($i + 1),              
                                        'key'                       => $TEXT_keyanswer[5][$i],              
                                        'answer'                    => $answer[$i],             
                                        'correct'                   => $correct 
                                    ]);
                            }


                            $student_exam_update = Student_exam::findOrFail($student_exam->id);

                            $student_exam_update->update([
                                'true'      => $total_correct
                            ]);
                            */
                        }
                    }

            }
            elseif($format == 'V01')
            {
                // breakdown
                $temp   =  explode(PHP_EOL, $data->text);
                    $temp2  =  $temp[0];
                    $temp3 = str_replace(' ', '/', $temp2);
                    $temp4 = explode('//////////////////////////////////////////////////', $temp3);                
                    $temp5 =  $temp4[0];
                    $TEXT_keyanswer = trim(substr($temp5,5));

                // Keyanswer                    
                    for ($i=0; $i < strlen($TEXT_keyanswer); $i++) 
                    { 
                        Keyanswer::create([
                            'id_exams'      => $data->id,
                            'no'            => ($i + 1),
                            'key'           => $TEXT_keyanswer[$i]
                        ]);
                    }

                // Student_exam                   
                    for ($i=1; $i < count($temp); $i++) 
                    { 
                        $lineofcode         = str_replace(' ', '/', $temp[$i]);

                        $temp_answr = explode('//////////////////////////////////////////////////', $lineofcode); 

                        $temp_answr2 = substr($temp_answr[0],5);

                        $interval = substr($temp_answr[0], 2, 3);

                        $nama = NULL;
                        $nim = NULL;

                        if(isset($temp_answr[1]))
                        {
                            $nim = trim(substr($temp_answr[1],1, 10));

                            $nama = trim(str_replace('/', ' ', substr($temp_answr[1],13)));
                        }

                        $tanggal_ujian =  NULL;

                        $student_exam = Student_exam::create([
                            'id_exams'          => $data->id,
                            'interval'          => trim($interval),
                            'nama'              => trim($nama),
                            'nim'               => trim($nim),
                            'tanggal_ujian'     => $tanggal_ujian,
                            'lineofcode'        => $lineofcode
                        ]);
                    }
            }


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

    public function edit(Exam $Exam)
    {
        $content    = 'Exams';
        $panel_name = 'Exams';

        $course       = Course::
                            orderBy('nama')
                            ->get();
        
        return  view('content.backend.'.strtolower($content).'.edit', 
                compact(
                    'content', 
                    'panel_name',
                    'course',
                    'Exam'
                )
            );
    }

    public function update(Request $request, Exam $Exam)
    {
        $content    = 'Exams';

        $this->validate($request, [
            'id_faculties'      => 'required',
            'nama'              => 'required',
        ]);

        $Exam = Exam::findOrFail($Exam->id);

        $Exam->update([
            'id_faculties'      => $request->id_faculties,
            'nama'              => $request->nama,
        ]);

        if($Exam)
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

    public function show($Exam)
    {
        
        $data = exam::findOrFail($Exam);

        $content    = 'Exams';
        $panel_name = 'Exams';

        return view('content.backend.'.strtolower($content).'.show', 
                compact(
                    'data', 
                    'content', 
                    'panel_name'
                )
            );
    }
}
