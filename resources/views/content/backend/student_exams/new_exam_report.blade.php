@extends('template.print.A4_portrait')

@section('content')  
	<div class="font-arial line-13 font-size-10">

		<table class="table-bordered" width="100%">
			       
			<thead class=" ">

				<tr class="border-none">
					<td colspan="2"  class="border-none">
					</td>
					<td colspan="10" class="text-center border-none">
						<div  class="text-right font-size-9">
							Semester / Th. Akademi	
						</div>
						<div class="font-size-13 bold">
							{{$Exam->nama_exam}}
						</div>
						<div class="font-size-14 bold">
							{{$Exam->nama_faculty}} - {{$Exam->nama_university}}
						</div>
					</td>
					<td colspan="2" rowspan="2"  class="text-center border-none">
						<!-- rl(http://localhost/omrfile/storage/app/public/images/Universities/jCB3xYsIWkXOJBDINVXe0PhYhVw5ZbQXiVfUkuD9.png -->
						<img src="{{ asset('/storage/app/public') }}/images/Universities/resize.png" >

					</td>

				</tr>

				<tr class="border-none">
					<td colspan="12" class="font-size-9 border-none">
						<div>
							<div class="width-20 float-left">
								Halaman<br/>
								Mata Kuliah<br/>
								Tanggal Ujian<br/>
								Tanggal Scan<br/>
							</div>
							<div class="width-50 float-left">
								<div class="page">: </div>

								: <span class="bold">{{$Exam->nama_course}}</span><br/>
								: {{$Exam->tanggal_ujian}}<br/>
								: {{$Exam->tanggal_scan}}
								
							</div>
						</div>
						<div class="clear border-none">
						</div>
					</td>
					
				</tr>

				<tr>
					<th colspan="14" class="clear">
						
					</th>
				</tr>

				<tr>
					<th colspan="14">
						
					</th>
				</tr>

				<tr class="font-size-9">
					<th rowspan="2" class="" width="5%">
						No.	
					</th>
					<th rowspan="2"  width="6%" class="pl-px-3 pr-px-3">
						Error ID	
					</th>
					<th rowspan="2" class=""  width="13%">
						STD NUMBER (NIM)	
					</th>
					<th rowspan="2" class="">
						NAME	
					</th>
					<th colspan="2" class="">
						VERSION	
					</th>
					<th colspan="5" class="">
						RAW SCORE (Q TYPE)	
					</th>
					<th colspan="3" class="border-left-double">
						SCORE	
					</th>
				</tr>

				<tr class="font-size-7">
					<th colspan="2"  class="font-size-6" width="10%">
						SHEET / CORRECT
					</th>
					<th class="" width="4%">
						T1
					</th>
					<th class="" width="4%">
						T2
					</th>
					<th class="" width="4%">
						T3
					</th>
					<th class="" width="4%">
						T4
					</th>
					<th class="" width="4%">
						T5
					</th>
					<th class="border-left-double" width="5%">
						TRUE
					</th>
					<th class="" width="7%">
						WEIGHT
					</th>
					<th class="" width="6%">
						GRADE
					</th>
				</tr>

				<tr class="font-size-9 bg-grey">
					<th>
						 
					</th>
					<th class="">
						 
					</th>
					<th class="">
						1
					</th>
					<th class="">
						2
					</th>
					<th class="" width="5%">
						3
					</th>
					<th class="" width="5%">
						4
					</th>
					<th class="">
						5
					</th>
					<th class="">
						6
					</th>
					<th class="">
						7 
					</th>
					<th class="">
						8 
					</th>
					<th class="">
						9 
					</th>
					<th class="border-left-double">
						10 
					</th>
					<th class="">
						11 
					</th>
					<th class="">
						12 
					</th>
				</tr>
			</thead>

	        <tbody>
		        @forelse ($data as $row)
		            <tr class="font-size-8"> 
		            	<!-- 1 -->
		                <td class="text-center " >
		                    {{ $loop->index + 1 }}
		                </td>
		            	<!-- 2 3 4-->
		                <td class="pl-px-5 pr-px-5"  width="6%">
		                    {{ $row->interval }}
		                </td>
		            	<!-- 5 -->
		                <td class="pl-px-5 pr-px-5"  width="5%">
		                    {{ $row->nim }}
		                </td>
		            	<!-- 6 -->
		                <td class="pl-px-5 pr-px-5">
		                    {{ $row->nama }}
		                </td>
		            	<!-- 7 -->
		                <td class="text-center ">
		                    
		                </td>
		            	<!-- 8 -->
		                <td class="text-center ">
		                    {{ $row->version }}
		                </td>
		            	<!-- 9 -->
		                <td class="text-center ">
		                    0
		                </td>
		            	<!-- 10 -->
		                <td class="text-center ">
		                    0
		                </td>
		            	<!-- 11 -->
		                <td class="text-center ">
		                    0
		                </td>
		            	<!-- 12-->
		                <td class="text-center ">
		                    0
		                </td>
		            	<!-- 13 -->
		                <td class="text-center ">
		                    0
		                </td>
		            	<!-- 14 -->
		                <td class="text-center border-left-double ">
		                    {{ $row->true }}
		                </td>
		            	<!-- 15 -->
		                <td class="text-center ">
		                    {{ number_format($row->weight, 2, '.', '') }}
		                </td>
		            	<!-- 16 -->
		                <td class="text-center ">
		                    {{ $row->grade }}
		                </td>
		            </tr>
	                @empty 
	                    <x-message.tr-no-record-data col="5"/>	
		        @endforelse
	        </tbody>
		</table>

	</div>
@endsection
