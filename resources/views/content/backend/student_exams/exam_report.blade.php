@extends('template.print.A4_landscape')

@section('content')  
	<div class="font-arial line-13 font-size-10">

		<table class="" width="100%">
			       
			<thead class=" ">
				<tr class="p-b-5">
					<th colspan="2" class="text-left">
						<img src="{{ asset('/storage/app/public') }}/images/Universities/resize.png" >
					</th>
					<th colspan="22" class="text-left">
						<div class="font-size-18 bold">
							{{$Exam->nama_university}}
						</div>
						{{$Exam->nama_faculty}}
					</th>
				</tr>
				<tr class="border-top-2-biru p-t-5">
					<th colspan="2" class="text-left">
						Tanggal Scan
					</th>
					<th colspan="22" class="text-left">
						: {{$Exam->tanggal_scan}}
					</th>
				</tr>
				<tr>
					<th colspan="2" class="text-left">
						Fakultas / Prodi
					</th>
					<th colspan="22" class="text-left">
						: {{$Exam->nama_faculty}}
					</th>
				</tr>
				<tr>
					<th colspan="2" class="text-left">
						Mata Kuliah
					</th>
					<th colspan="22" class="text-left">
						: {{$Exam->nama_course}}
					</th>
				</tr>

				<tr class="font-size-9 ">
					<th rowspan="2" class="border-top border-left bg-biru-tua" width="5%">
						No.	
					</th>
					<th rowspan="2" class="border-top border-left bg-biru-muda"  width="6%">
						Versi
					</th>
					<th rowspan="2" class="border-top border-left bg-biru-muda"  width="4%">
						NIM	
					</th>
					<th rowspan="2" class="border-top border-left bg-biru-muda">
						NAMA	
					</th>
					<th class="border-full bg-biru-tua">
							&sum;	
					</th>
					<th class="border-full bg-biru-tua">
						BBT	
					</th>
					<th colspan="2" class="border-full bg-biru-muda">
						NILAI	
					</th>
					<th colspan="2" class="border-full bg-orange">
						STATUS	
					</th>
					<th colspan="2" class="border-full bg-merah">
						INVALID	
					</th>
					<th colspan="5" class="border-full bg-biru-tua">
						RESPON PILIHAN	
					</th>
					<th class="">
						
					</th>
					<th colspan="7" class="border-full  bg-biru-tua">
						STATISTIK & GRAFIK
					</th>
				</tr>

				<tr class="font-size-9">
					<th class="border-full bg-biru-muda">
						Benar
					</th>
					<th class="border-full bg-biru-muda">
						Soal
					</th>
					<th class="border-full bg-biru-muda">
						Angka 
					</th>
					<th class="border-full bg-biru-muda">
						Huruf
					</th>
					<th class="border-full bg-orange">
						KOMP
					</th>
					<th class="border-full bg-orange">
						LULUS
					</th>
					<th class="border-full bg-merah">
						N/R
					</th>
					<th class="border-full bg-merah">
						M/R
					</th>
					<th class="border-full bg-biru-muda">
						A
					</th>
					<th class="border-full bg-biru-muda">
						B
					</th>
					<th class="border-full bg-biru-muda">
						C
					</th>
					<th class="border-full bg-biru-muda">
						D
					</th>
					<th class="border-full bg-biru-muda">
						E
					</th>
					<th class="">
						
					</th>
					<th class="border-full bg-biru-muda">
						MIN
					</th>
					<th class="border-full bg-biru-muda">
						MAX
					</th>
					<th class="border-full bg-biru-muda">
						MED
					</th>
					<th class="border-full bg-biru-muda">
						AVG
					</th>
					<th class="border-full bg-biru-muda">
						MODE
					</th>
					<th class="border-full bg-biru-muda">
						VARIAN
					</th>
					<th class="border-full bg-biru-muda">
						ST-DEV
					</th>
				</tr>

				<tr class="font-size-7">
					<th class="border-full bg-biru">
						0
					</th>
					<th class="border-full bg-biru">
						1
					</th>
					<th class="border-full bg-biru">
						2
					</th>
					<th class="border-full bg-biru">
						3
					</th>
					<th class="border-full bg-biru">
						4
					</th>
					<th class="border-full bg-biru">
						5
					</th>
					<th class="border-full bg-biru">
						6
					</th>
					<th class="border-full bg-biru">
						7
					</th>
					<th class="border-full bg-biru">
						8
					</th>
					<th class="border-full bg-biru">
						9
					</th>
					<th class="border-full bg-biru">
						10
					</th>
					<th class="border-full bg-biru">
						11
					</th>
					<th class="border-full bg-biru">
						12
					</th>
					<th class="border-full bg-biru">
						13
					</th>
					<th class="border-full bg-biru">
						14
					</th>
					<th class="border-full bg-biru">
						15
					</th>
					<th class="border-full bg-biru">
						16
					</th>
					<th>
					
					</th>
					<th class="border-full bg-biru">
						17
					</th>
					<th class="border-full bg-biru">
						18
					</th>
					<th class="border-full bg-biru">
						19
					</th>
					<th class="border-full bg-biru">
						20
					</th>
					<th class="border-full bg-biru">
						21
					</th>
					<th class="border-full bg-biru">
						22
					</th>
					<th class="border-full bg-biru">
						23
					</th>
				</tr>
			</thead>

	        <tbody class="border-full">
		        @forelse ($data as $row)
		            <tr class="font-size-8"> 
		            	<!-- 0 -->
		                <td class="text-center  border-full" >
		                    {{ $loop->iteration }}
		                </td>
		            	<!-- 1 -->
		                <td class="text-center border-full"  width="6%">
		                    {{ $row->interval }}
		                </td>
		            	<!-- 2 -->
		                <td class="pl-px-5 pr-px-5"  width="5%">
		                    {{ $row->nim }}
		                </td>
		            	<!-- 3 -->
		                <td class="pl-px-5 pr-px-5">
		                    {{ $row->nama }}
		                </td>
		            	<!-- 4 -->
		                <td class="text-center border-left">
		                	{{ $row->true }}
		                </td>
		            	<!-- 5 -->
		                <td class="text-center ">
		                	<?php
		                	echo str_replace('−', '&minus;', $row->grade);
		                	?>
		                </td>
		            	<!-- 6 -->
		                <td class="text-center ">
		                    {{ number_format($row->weight, 2, '.', '') }}
		                </td>
		            	<!-- 7 -->
		                <td class="text-center ">
		                	<?php
		                	echo str_replace('−', '&minus;', $row->grade);
		                	?>
		                </td>
		                {!!td_komp_lulus($row->weight)!!}
		            	<!-- 10 -->
		                <td class="text-center ">
		                    0
		                </td>
		            	<!-- 11 -->
		                <td class="text-center ">
		                    0
		                </td>
		            	<!-- 12-->
		                <td class="text-center  border-left">
		                    {!!distribution_answer_per_student($row->id_exams,'A',$row->id)!!}
		                </td>
		            	<!-- 13 -->
		                <td class="text-center ">
		                    {!!distribution_answer_per_student($row->id_exams,'B',$row->id)!!}               
		                </td>
		            	<!-- 14 -->
		                <td class="text-center  "> 
		                    {!!distribution_answer_per_student($row->id_exams,'C',$row->id)!!}
		                </td>
		            	<!-- 15 -->
		                <td class="text-center ">
		                    {!!distribution_answer_per_student($row->id_exams,'D',$row->id)!!}
		                </td>
		            	<!-- 16 -->
		                <td class="text-center  border-right"> 
		                    {!!distribution_answer_per_student($row->id_exams,'E',$row->id)!!}
		                </td>
		                <td class="text-center "> 
		                </td>
		                @if($loop->iteration == 1)
			            	<!-- 17 -->
			                <td class="text-center border-full bg-orange"> 
			                	{!!number_format(student_exams_aggregate($row->id_exams,'min','weight'), 2, '.', '')!!}
			                </td>
			            	<!-- 18 -->
			                <td class="text-center border-full bg-orange"> 
			                	{!!number_format(student_exams_aggregate($row->id_exams,'max','weight'), 2, '.', '')!!}
			                </td>
			            	<!-- 19 -->
			                <td class="text-center border-full bg-orange"> 
			                	{!!number_format(student_exams_aggregate($row->id_exams,'median','weight'), 2, '.', '')!!}
			                </td>
			            	<!-- 20 -->
			                <td class="text-center border-full bg-orange"> 
			                	{!!number_format(student_exams_aggregate($row->id_exams,'avg','weight'), 2, '.', '')!!}
			                </td>
			            	<!-- 21 -->
			                <td class="text-center border-full bg-orange"> 
			                	{!!student_exams_aggregate($row->id_exams,'stdev','weight')!!}
			                </td>
			            	<!-- 22 -->
			                <td class="text-center border-full bg-orange"> 
			                </td>
			            	<!-- 23 -->
			                <td class="text-center border-full bg-orange"> 
			                	{!!student_exams_aggregate($row->id_exams,'stdev','weight')!!}
			                </td>	
		                @elseif ($loop->iteration == 2)
			            	<!-- 17 -->
			                <td colspan="8" class="text-center border-full bg-biru-muda"> 
			                	<i>
				                	Diambil dari seluruh sample data (Semua Versi)
				                </i>
			                </td>
		                @elseif ($loop->iteration == 3)
			            	<!-- 17 -->
			                <td colspan="8" rowspan="41" class="vertical-align-top text-center  border-left  border-right">
			                	<div style="height: 300px">
			                		<canvas id="canvas" class="canvagraph"></canvas>
			                	</div>
							</td>
						@endif

		            </tr>
	                @empty 
	                    <x-message.tr-no-record-data col="24"/>	
		        @endforelse
	        </tbody>
		</table>
	</div>


{{print_r($konversi_nilai)}}


<style type="text/css">
	.reportGraph{
		width: 100%;
		border-color: black;
		border-style: 1px solid;
		background-color: yellow;
	}
	.canvagraph{
		width: 100%;
		border-color: black;
		border-style: 1px solid;
		margin: 0;
	}
</style>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<script type="text/javascript">
    // wkhtmltopdf 0.12.5 crash fix.
    // https://github.com/wkhtmltopdf/wkhtmltopdf/issues/3242#issuecomment-518099192
    'use strict';
    (function(setLineDash) {
        CanvasRenderingContext2D.prototype.setLineDash = function() {
            if(!arguments[0].length){
                arguments[0] = [1,0];
            }
            // Now, call the original method
            return setLineDash.apply(this, arguments);
        };
    })(CanvasRenderingContext2D.prototype.setLineDash);
    Function.prototype.bind = Function.prototype.bind || function (thisp) {
        var fn = this;
        return function () {
            return fn.apply(thisp, arguments);
        };
    };

    function drawGraphs() {
        new Chart(
            document.getElementById("canvas"), 
            {
                "responsive": false,
                "type":"bar",
                "options":
                	{
			            "title": {
			                "display": true,
			                "text": 'Konversi Nilai (Grade)'
			            },
                    	"maintainAspectRatio": false,
                	},
                "data":
                	{
                		"labels":
                			[
                			<?php
                				foreach($konversi_nilai as $row)
                				{
                					echo '"'.str_replace('−', '-', $row->grade).'",';
                				}
                			?>
                			],
                		"datasets":
                			[
                				{
                					"label" : "Grade",
                					"data" : 
                						[                						
				                			<?php
				                				foreach($konversi_nilai as $row)
				                				{
				                					echo $row->count.', ';
				                				}
				                			?>
                						],
                					"fill" : true,
                					"backgroundColor" : "rgb(60, 179, 113)",
                					"lineTension" : 0.1,
								    "fillColor": "rgba(14,72,100,1)", //version >2 useus background color
								    "strokeColor": "brown",
                				}
                			]
                	},
                
            }
        );
    }
    window.onload = function() {
        drawGraphs();
    };
</script>
@endsection

