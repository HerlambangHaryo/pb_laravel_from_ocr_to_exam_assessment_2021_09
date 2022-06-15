@extends('template.print.A4_portrait')

@section('content')  
	<div class="padding-10 font-arial line-13 font-size-10">
		<div>
			{{$Exam->nama_exam}} <br/>
			{{$Exam->nama_faculty}} - {{$Exam->nama_university}} <br/>
		</div>
		<div>
			<table>
				<tr>
					<td>
						Halaman
					</td>
					<td>
						: 
					</td>
				</tr>
				<tr>
					<td>
						Mata Kuliah
					</td>
					<td>
						: {{$Exam->nama_course}}
					</td>
				</tr>
				<tr>
					<td>
						Tanggal Ujian
					</td>
					<td>
						: {{$Exam->tanggal_ujian}}
					</td>
				</tr>
				<tr>
					<td>
						Tanggal Scan
					</td>
					<td>
						: {{$Exam->tanggal_scan}}
					</td>
				</tr>
			</table>
		</div>
		<div>
			<table class="table-bordered">
				<thead class="">
					<tr class="">
						<th rowspan="2" class="">
							No.	
						</th>
						<th rowspan="2" class="">
							Error ID	
						</th>
						<th rowspan="2" class="">
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
						<th colspan="3" class="">
							SCORE	
						</th>
					</tr>
					<tr>
						<th colspan="2" class="">
							SHEET / CORRECT
						</th>
						<th class="">
							T1
						</th>
						<th class="">
							T2
						</th>
						<th class="">
							T3
						</th>
						<th class="">
							T4
						</th>
						<th class="">
							T5
						</th>
						<th class="">
							TRUE
						</th>
						<th class="">
							WEIGHT
						</th>
						<th class="">
							GRADE
						</th>
					</tr>
				</thead>
				                    
		        @forelse ($data as $row)
		            <tr class="">
		                <td class="">
		                    {{ $row->id }}
		                </td>
		                <td class="">
		                    {{ $row->interval }}
		                </td>
		                <td class="text-center ">
		                    {{ $row->nim }}
		                </td>
		                <td class="">
		                    {{ $row->nama }}
		                </td>
		                <td class="text-center ">
		                    
		                </td>
		                <td class="text-center ">
		                    {{ $row->version }}
		                </td>
		                <td class="text-center ">
		                    0
		                </td>
		                <td class="text-center ">
		                    0
		                </td>
		                <td class="text-center ">
		                    0
		                </td>
		                <td class="text-center ">
		                    0
		                </td>
		                <td class="text-center ">
		                    0
		                </td>
		                <td class="text-center ">
		                    {{ $row->true }}
		                </td>
		                <td class="text-center ">
		                    {{ number_format($row->weight, 2, '.', '') }}
		                </td>
		                <td class="text-center ">
		                    {{ $row->grade }}
		                </td>
		            </tr>
	                @empty 
	                    <x-message.tr-no-record-data col="5"/>	
		        @endforelse
			</table>
		</div>
	</div>
@endsection
