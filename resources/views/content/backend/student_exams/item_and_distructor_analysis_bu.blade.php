@extends('template.print.A4_portrait')

@section('content')  
	<div class="font-arial line-13 font-size-10">

		<table class="text-center bold table-bordered border-color-grey header " width="100%">
			<thead class="">
				<tr>
					<th class="" width="20%">
						
					</th>
					<th class="" width="60%">				
						<div class="font-size-14">
							{{$Exam->nama_faculty}}
						</div>				
						<div class="uppercase">
							{{$Exam->nama_university}}
						</div>				
					</th>
					<th class="" width="20%">
						
					</th>
				</tr>
				<tr>
					<th class="" width="20%">
						
					</th>
					<th class=" " width="60%">	
						ITEM AND DISTRUCTOR ANALYSIS
						<br/>
						(CRITERION METHOD)
					</th>
					<th class="" width="20%">
						
					</th>
				</tr>
				<tr>
					<th class="" colspan="4">			
						<div class="font-size-13">
							{{$Exam->nama_exam}}
						</div>				
						<div class="italic">
							{{$Exam->nama_course}}		
						</div>						
					</th>
				</tr>
				<tr class="border-color-grey line-20" >
					<td width="20%">
						Halaman
					</td>
					<td width="30%">	
						Tanggal Ujian : {{date('d/m/Y', strtotime($Exam->tanggal_ujian))}}
					</td>
					<td width="50%">
						Tanggal Scan : {{date('d/m/Y', strtotime($Exam->tanggal_scan))}}
					</td>
				</tr>
			</thead>
			<tbody>
				
				<table class="table-bordered vertical-align-middle" width="100%">
					<tr class="">
						<td rowspan="2" class="">
							ITEM<br/>No.	
						</td>
						<td colspan="9" class="">
							VERSION AND KEY MAPPING	
						</td>
						<td rowspan="2" class="">
							OPTION	
						</td>
						<td colspan="3" class="">
							(p) DIFFICULITY INDEX	
						</td>
						<td rowspan="2" class="">
							(D) DISCR.<br/>INDEX	
						</td>
						<td rowspan="2" class="">
							DISTRIB	
						</td>
						<td rowspan="2" class="">
							NO	
						</td>
						<td rowspan="2" class="">
							RECOMDT	
						</td>
					</tr>
					<tr class="">
						<td class="">
							AA
						</td>
						<td class="">
							AB
						</td>
						<td class="">
							AC
						</td>
						<td class="">
							BA
						</td>
						<td class="">
							BB
						</td>
						<td class="">
							BC
						</td>
						<td class="">
							CA
						</td>
						<td class="">
							CB
						</td>
						<td class="">
							CC
						</td>
						<td class="">
							ALL
						</td>
						<td class="">
							COMP
						</td>
						<td class="">
							N-COMP
						</td>
					</tr>
					<tr class="bg-grey text-center">
						<td>
							1
						</td>
						<td>
							2
						</td>
						<td>
							3
						</td>
						<td>
							4
						</td>
						<td>
							5
						</td>
						<td>
							6
						</td>
						<td>
							7
						</td>
						<td>
							8
						</td>
						<td>
							9
						</td>
						<td>
							10
						</td>
						<td>
							11
						</td>
						<td>
							12
						</td>
						<td>
							13
						</td>
						<td>
							14
						</td>
						<td>
							15
						</td>
						<td>
							16
						</td>
						<td>
							17
						</td>
						<td>
							18
						</td>
						
					</tr>
									
					@forelse ($data as $row)
						<tr class="text-center">
							<td rowspan="5" class="">
								{{ $row->no }}
							</td>
							<td rowspan="5" class="">
								@if($row->version == 'AA')
									{{ $row->key }}
								@endif
							</td>
							<td rowspan="5" class="">
								@if($row->version == 'AB')
									{{ $row->key }}
								@endif
							</td>
							<td rowspan="5" class="">
								@if($row->version == 'AC')
									{{ $row->key }}
								@endif
							</td>
							<td rowspan="5" class="">
								@if($row->version == 'BA')
									{{ $row->key }}
								@endif
							</td>
							<td rowspan="5" class="">
								@if($row->version == 'BB')
									{{ $row->key }}
								@endif
							</td>
							<td rowspan="5" class="">
								@if($row->version == 'BA')
									{{ $row->key }}
								@endif
							</td>
							<td rowspan="5" class="">
								@if($row->version == 'CA')
									{{ $row->key }}
								@endif
							</td>
							<td rowspan="5" class="">
								@if($row->version == 'CB')
									{{ $row->key }}
								@endif
							</td>
							<td rowspan="5" class="">
								@if($row->version == 'CC')
									{{ $row->key }}
								@endif
							</td>
							<td class="">	                	
								@if($row->key == 'A')
									({{ $row->key }})	
								@else
									A
								@endif
							</td>
							<td class="">
								{{difficulity_index_all($row->id_exams,$row->no,'A')}}
							</td>
							<td class="">
								0
							</td>
							<td class="">
								0
							</td>
							<td class="">
								0
							</td>
							<td class="">
								{{distribution_answer($row->id_exams,$row->no,'A')}}
							</td>
							<td rowspan="5" class="">
								0
							</td>
							<td rowspan="5" class="">
								RT
							</td>
						</tr>
						<tr class="text-center ">
							<td class="">
								@if($row->key == 'B')
									({{ $row->key }})	
								@else
									B
								@endif
							</td>
							<td class="">
								{{difficulity_index_all($row->id_exams,$row->no,'B')}}
							</td>
							<td class="">
								0
							</td>
							<td class="">
								0
							</td>
							<td class="">
								0
							</td>
							<td class="">
								{{distribution_answer($row->id_exams,$row->no,'B')}}
							</td>
						</tr>
						<tr class="text-center ">
							<td class="">       	
								@if($row->key == 'C')
									({{ $row->key }})	
								@else
									C
								@endif
							</td>
							<td class="">
								{{difficulity_index_all($row->id_exams,$row->no,'C')}}
							</td>
							<td class="">
								0
							</td>
							<td class="">
								0
							</td>
							<td class="">
								0
							</td>
							<td class="">
								{{distribution_answer($row->id_exams,$row->no,'C')}}
							</td>
						</tr>
						<tr class="text-center ">
							<td class="">    	
								@if($row->key == 'D')
									({{ $row->key }})	
								@else
									D
								@endif
							</td>
							<td class="">
								{{difficulity_index_all($row->id_exams,$row->no,'D')}}
							</td>
							<td class="">
								0
							</td>
							<td class="">
								0
							</td>
							<td class="">
								0
							</td>
							<td class="">
								{{distribution_answer($row->id_exams,$row->no,'D')}}
							</td>
						</tr>
						<tr class="text-center ">
							<td class="">
								@if($row->key == 'E')
									({{ $row->key }})	
								@else
									E
								@endif
							</td>
							<td class="">
								{{difficulity_index_all($row->id_exams,$row->no,'E')}}
							</td>
							<td class="">
								0
							</td>
							<td class="">
								0
							</td>
							<td class="">
								0
							</td>
							<td class="">
								{{distribution_answer($row->id_exams,$row->no,'E')}}
							</td>
						</tr>
						@empty 
							<x-message.tr-no-record-data col="5"/>	
					@endforelse
				</table>
			</tbody>
		</table>


	</div>
@endsection
