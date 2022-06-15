<?php
	
use App\Models\Student_sheet;
use App\Models\Student_exam;

	if(!function_exists('distribution_answer'))
	{
		function distribution_answer($id_exams,$no,$key)
		{
			return Student_sheet::where('id_exams',$id_exams)
						->where('no',$no)
						->where('answer',$key)
						->count();
		}
	}

	if(!function_exists('difficulity_index_all'))
	{
		function difficulity_index_all($id_exams,$no,$key)
		{
			$top 	= distribution_answer($id_exams,$no,$key);

			$base 	= Student_exam::where('id_exams',$id_exams)
						->count();

			$total = $top / $base;

			return number_format($total, 2, '.', ',');
		}
	}

	if(!function_exists('td_komp_lulus'))
	{
		function td_komp_lulus($weight)
		{
			$isi = '';

			if($weight >= 60)
			{
				$isi .= '
				<td class="text-center border-full border-left">
					K
				</td>
				<td class="text-center border-full border-right">
					Lulus
				</td>
				';
			}
			else
			{
				$isi .= '
				<td class="text-center border-full border-left">
					NK
				</td>
				<td class="text-center border-full border-right bg-merah">
					TL
				</td>
				';

			}

			$word = $isi;
			return $word;
		}
	}

	if(!function_exists('distribution_answer_per_student'))
	{
		function distribution_answer_per_student($id_exams,$key,$id_student_exams)
		{
			return Student_sheet::where('id_exams',$id_exams)
						->where('answer',$key)
						->where('id_student_exams',$id_student_exams)
						->count();
		}
	}

	if(!function_exists('student_exams_aggregate'))
	{
		function student_exams_aggregate($id_exams,$aggregate,$value)
		{
			if($aggregate == 'min')
			{
				return Student_exam::where('id_exams','=',$id_exams)
							->min($value);
			}
			elseif($aggregate == 'max')
			{
				return Student_exam::where('id_exams','=',$id_exams)
							->max($value);
			}
			elseif($aggregate == 'avg')
			{
				return Student_exam::where('id_exams','=',$id_exams)
							->avg($value);
			}
			elseif($aggregate == 'median')
			{
				$data =  Student_exam::select($value)->where('id_exams','=',$id_exams)->get();
				return collect($data)->median($value);
			}
			elseif($aggregate == 'mode')
			{
				$data =  Student_exam::select($value)->where('id_exams','=',$id_exams)->get();
				// return collect($data)->mode($value);
			}
			elseif($aggregate == 'varian')
			{
				$data =  Student_exam::select($value)->where('id_exams','=',$id_exams)->get();
				// return collect($data)->mode($value);
			}
			elseif($aggregate == 'stdev')
			{
				// $arr =  Student_exam::select($value)->where('id_exams','=',$id_exams)->get();
				// $avg =  Student_exam::select($value)->where('id_exams','=',$id_exams)
				// 			->avg($value);

    //     		$num_of_elements = count($arr);
		          
		  //       $variance = 0.0;
		          
		  //               // calculating mean using array_sum() method
		  //       $average = $avg/$num_of_elements;
		          
		  //       foreach($arr as $i)
		  //       {
		  //           // sum of squares of differences between 
		  //                       // all numbers and means.
		  //           $variance += pow(($i - $average), 2);
		  //       }
		          
		  //       return sqrt($variance/$num_of_elements);
			}
		}
	}