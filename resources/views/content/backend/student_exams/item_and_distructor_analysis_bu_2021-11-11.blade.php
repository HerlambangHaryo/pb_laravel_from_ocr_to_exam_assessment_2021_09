@extends('template.print.A4_portrait')

@section('content')  
	<div class="font-arial line-13 font-size-8">
				
		<table class=" vertical-align-middle" width="99%">

			<thead class=" ">
				<tr>
					<th class="border-top-grey border-right-grey border-left-grey" colspan="4">
						
					</th>
					<th class="border-top-grey border-right-grey" colspan="11">				
						<div class="font-size-14">
							{{$Exam->nama_faculty}}
						</div>				
						<div class="uppercase">
							{{$Exam->nama_university}}
						</div>				
					</th>
					<th class="border-top-grey border-right-grey" colspan="3">
						
					</th>
				</tr>
				
				
				<tr>
					<th class="border-top-grey border-right-grey border-left-grey" colspan="4">
						
					</th>
					<th class="border-top-grey border-right-grey" colspan="11">	
						ITEM AND DISTRUCTOR ANALYSIS
						<br/>
						(CRITERION METHOD)
					</th>
					<th class="border-top-grey border-right-grey" colspan="3">
						
					</th>
				</tr>
				
				<tr>
					<th class="border-top-grey border-right-grey border-left-grey" colspan="4">
						
					</th>
					<th class="border-top-grey border-right-grey" colspan="11">			
						<div class="font-size-13">
							{{$Exam->nama_exam}}
						</div>				
						<div class="italic">
							{{$Exam->nama_course}}		
						</div>				
					</th>
					<th class="border-top-grey border-right-grey" colspan="3">
						
					</th>
				</tr>


				<tr class="border-color-grey line-20 font-size-7" >
					<th colspan="4" class="border-top-grey border-right-grey border-left-grey">
						<div class="page">Page : </div>
					</th>
					<th colspan="11" class="border-top-grey border-right-grey">
						Exam date : {{date('d/m/Y', strtotime($Exam->tanggal_ujian))}} 
						Scan Date : {{date('d/m/Y', strtotime($Exam->tanggal_scan))}}
					</th>
					<th colspan="3" class="border-top-grey border-right-grey">
					</th>
				</tr>

				<tr>
					<th colspan="18" class="border-top-grey border-right-grey border-left-grey">
						
					</th>
				</tr>

				<tr class="font-size-7">
					<th rowspan="2" class="border-top-grey border-right-grey border-left-grey">
						ITEM<br/>No.	
					</th>
					<th colspan="9" class="border-top-grey border-right-grey">
						VERSION AND KEY MAPPING	
					</th>
					<th rowspan="2" class="border-top-grey border-right-grey">
						OPTION	
					</th>
					<th colspan="3" class="border-top-grey border-right-grey">
						(p) DIFFICULITY INDEX	
					</th>
					<th rowspan="2" class="border-top-grey border-right-grey">
						(D) DISCR.<br/>INDEX	
					</th>
					<th rowspan="2" class="border-top-grey border-right-grey">
						DISTRIB	
					</th>
					<th rowspan="2" class="border-top-grey border-right-grey">
						NO	
					</th>
					<th rowspan="2" class="border-top-grey border-right-grey">
						RECOMDT	
					</th>
				</tr>

				<tr class="font-size-7">
					<th  class="border-top-grey border-right-grey border-left-grey">
						AA
					</th>
					<th  class="border-top-grey border-right-grey">
						AB
					</th>
					<th  class="border-top-grey border-right-grey">
						AC
					</th>
					<th  class="border-top-grey border-right-grey">
						BA
					</th>
					<th  class="border-top-grey border-right-grey">
						BB
					</th>
					<th  class="border-top-grey border-right-grey">
						BC
					</th>
					<th  class="border-top-grey border-right-grey">
						CA
					</th>
					<th  class="border-top-grey border-right-grey">
						CB
					</th>
					<th  class="border-top-grey border-right-grey">
						CC
					</th>
					<th  class="border-top-grey border-right-grey">
						ALL
					</th>
					<th  class="border-top-grey border-right-grey">
						COMP
					</th>
					<th  class="border-top-grey border-right-grey">
						N-COMP
					</th>
				</tr>

				<tr class="bg-grey text-center font-size-6">
					<th width="4%" class="border-top-grey border-right-grey border-left-grey">
						1
					</th>
					<th width="4%" class="border-top-grey border-right-grey">
						2
					</th>
					<th width="4%" class="border-top-grey border-right-grey">
						3
					</th>
					<th width="4%" class="border-top-grey border-right-grey">
						4
					</th>
					<th width="4%" class="border-top-grey border-right-grey">
						5
					</th>
					<th width="4%" class="border-top-grey border-right-grey">
						6
					</th>
					<th width="4%" class="border-top-grey border-right-grey">
						7
					</th>
					<th width="4%" class="border-top-grey border-right-grey">
						8
					</th>
					<th width="4%" class="border-top-grey border-right-grey">
						9
					</th>
					<th width="4%" class="border-top-grey border-right-grey">
						10
					</th>
					<th width="7%" class="border-top-grey border-right-grey">
						11
					</th>
					<th width="7%" class="border-top-grey border-right-grey">
						12
					</th>
					<th width="7%" class="border-top-grey border-right-grey">
						13
					</th>
					<th width="7%" class="border-top-grey border-right-grey">
						14
					</th>
					<th width="8%" class="border-top-grey border-right-grey">
						15
					</th>
					<th width="9%" class="border-top-grey border-right-grey">
						16
					</th>
					<th width="4%" class="border-top-grey border-right-grey">
						17
					</th>
					<th width="7%" class="border-top-grey border-right-grey">
						18
					</th>
				</tr>
			</thead>

	        <tbody class="font-size-7">
								
				@forelse ($data as $row)
					<tr class="text-center  page-break-after">
						<td class="border-top-grey border-right-grey border-left-grey"> 
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
						<td class="border-top-grey border-right-grey">	                	
							@if($row->key == 'A')
								({{ $row->key }})	
							@else
								A
							@endif
						</td>
						<td class="border-top-grey border-right-grey">
							{{difficulity_index_all($row->id_exams,$row->no,'A')}}
						</td>
						<td class="border-top-grey border-right-grey">
							0
						</td>
						<td class="border-top-grey border-right-grey">
							0
						</td>
						<td class="border-top-grey border-right-grey">
							0
						</td>
						<td class="border-top-grey border-right-grey">
							{{distribution_answer($row->id_exams,$row->no,'A')}}
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
						<td class="border-top-grey border-right-grey"> 
						</td>
					</tr>
					<tr class="text-center  page-break-after">
						<td class="border-left-grey border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey">
							@if($row->key == 'B')
								({{ $row->key }})	
							@else
								B
							@endif
						</td>
						<td class="border-right-grey">
							{{difficulity_index_all($row->id_exams,$row->no,'B')}}
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							{{distribution_answer($row->id_exams,$row->no,'B')}}
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
					</tr>

					<!-- center -->
					<tr class="text-center  page-break-after">
						<td class="border-left-grey border-right-grey">
							{{ $row->no }}
						</td>
						<td class="border-right-grey">
							@if($row->version == 'AA')
								{{ $row->key }}
							@endif
						</td>
						<td class="border-right-grey">
							@if($row->version == 'AB')
								{{ $row->key }}
							@endif
						</td>
						<td class="border-right-grey">
							@if($row->version == 'AC')
								{{ $row->key }}
							@endif
						</td>
						<td class="border-right-grey">
							@if($row->version == 'BA')
								{{ $row->key }}
							@endif
						</td>
						<td class="border-right-grey">
							@if($row->version == 'BB')
								{{ $row->key }}
							@endif
						</td>
						<td class="border-right-grey">
							@if($row->version == 'BA')
								{{ $row->key }}
							@endif
						</td>
						<td class="border-right-grey">
							@if($row->version == 'CA')
								{{ $row->key }}
							@endif
						</td>
						<td class="border-right-grey">
							@if($row->version == 'CB')
								{{ $row->key }}
							@endif
						</td>
						<td class="border-right-grey">
							@if($row->version == 'CC')
								{{ $row->key }}
							@endif
						</td>
						<td class="border-right-grey">       	
							@if($row->key == 'C')
								({{ $row->key }})	
							@else
								C
							@endif
						</td>
						<td class="border-right-grey">
							{{difficulity_index_all($row->id_exams,$row->no,'C')}}
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							{{distribution_answer($row->id_exams,$row->no,'C')}}
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							RT
						</td>
					</tr>
					<!-- center -->

					<tr class="text-center  page-break-after">
						<td class="border-left-grey border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey">    	
							@if($row->key == 'D')
								({{ $row->key }})	
							@else
								D
							@endif
						</td>
						<td class="border-right-grey">
							{{difficulity_index_all($row->id_exams,$row->no,'D')}}
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							{{distribution_answer($row->id_exams,$row->no,'D')}}
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
					</tr>
					<tr class="text-center  page-break-after">
						<td class="border-left-grey border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey">
							@if($row->key == 'E')
								({{ $row->key }})	
							@else
								E
							@endif
						</td>
						<td class="border-right-grey">
							{{difficulity_index_all($row->id_exams,$row->no,'E')}}
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							0
						</td>
						<td class="border-right-grey">
							{{distribution_answer($row->id_exams,$row->no,'E')}}
						</td>
						<td class="border-right-grey"> 
						</td>
						<td class="border-right-grey"> 
						</td>
					</tr>
					@empty 
						<x-message.tr-no-record-data col="5"/>	
				@endforelse

					<tr>
						<td colspan="18" class="border-top-grey">
							<br/>
							<br/>
						</td>	
					</tr>
					<tr>
						<td colspan="18" class="page-break-after">
							<br/>
							<br/>

							<table width="100%" class="font-size-6 ">

								<tr>
									<td colspan="4" class="text-center bold bg-grey border-left-grey border-top-grey border-right-grey">
										History
									</td>
									<td rowspan="19">
										
									</td>
									<td rowspan="19" class="  bold vertical-align-middle text-center" width="2%">
										D<br/>
										I<br/>
										F<br/>
										F<br/>
										I<br/>
										C<br/>
										U<br/>
										L<br/>
										I<br/>
										T<br/>
										Y<br/>
										<br/>
										L<br/>
										E<br/>
										V<br/>
										E<br/>
										L<br/> 
									</td>
									<td class=" "> 
									</td>
									<td class="bold italic  " colspan="7">
										CROSS PLOT OF ITEM DISTRIBUTIONS
									</td>							
								</tr>

								<tr>
									<td colspan="2" class="  border-left-grey border-top-grey pl-px-5 pr-px-5">
										Examine Code
									</td>	
									<td colspan="2" class="  border-top-grey border-right-grey">
										: 50
									</td>	

									<td class="border-right-2"> 
									</td>
									<td class="bold text-center  border-top-grey border-right-grey" colspan="2">
										POOR
									</td>	
									<td class="bold text-center  border-top-grey border-right-grey" colspan="2">
										MARGINAL
									</td>	
									<td class="bold text-center  border-top-grey border-right-grey" colspan="2">
										REASONABLE
									</td>	
									<td class="bold text-center  border-top-grey border-right-grey" colspan="2">
										GOOD
									</td>	
									<td class="bold text-center  border-top-grey border-right-grey" colspan="2">
										VERY GOOD
									</td>		
									<td width="5%">
										
									</td>		
									<td width="5%">
										
									</td>
								</tr>

								<tr>
									<td colspan="2" class=" border-left-grey pl-px-5 pr-px-5">
										No. of Examine
									</td>	
									<td colspan="2" class="  border-right-grey">
										: 50
									</td>	
									<td class="border-right-2">
										
									</td>	
									<td class="text-center border-right-grey" colspan="2">
										< 0.01
									</td>	
									<td class="text-center border-right-grey" colspan="2">
										0.01 - 0.05
									</td>	
									<td class="text-center border-right-grey" colspan="2">
										0.10 - 0.19
									</td>		
									<td class="text-center border-right-grey" colspan="2">
										0.20 - 0.30
									</td>		
									<td class="text-center border-right-grey" colspan="2">
										0.40 - 1.00
									</td>
									<td class="border-left-grey">
										
									</td>
								</tr>

								<tr>
									<td colspan="2" class=" border-left-grey pl-px-5 pr-px-5">
										No. of Item's
									</td>	
									<td colspan="2" class="border-right-grey ">
										: 50
									</td>	
									<td class="bold text-right border-right-2 pr-px-5 ">
										1.00
									</td>
									<td class="italic pl-px-5 border-top-grey"  width="5%">
										(ZE1)
									</td>	
									<td class=" border-right-grey border-top-grey" width="5%">
										
									</td>
									<td class="italic pl-px-5 border-top-grey" width="5%">
										(ZC1)
									</td>	
									<td class=" border-right-grey border-top-grey" width="5%">
										
									</td>
									<td class="italic pl-px-5 border-top-grey" width="5%">
										(ZA1)
									</td>	
									<td class=" border-right-grey border-top-grey" width="5%">
										
									</td>
									<td class="italic pl-px-5 border-top-grey" width="5%">
										(ZA4)
									</td>	
									<td class=" border-right-grey border-top-grey" width="5%">
										
									</td>
									<td class="italic pl-px-5 border-top-grey" width="5%">
										(ZA7)
									</td>	
									<td class=" border-right-grey border-top-grey" width="5%">
										
									</td>
									<td class="bold text-center border-right-grey border-top-grey" width="12%" colspan="2">
										TOO EASY
									</td>			
								</tr>

								<tr>	
									<td colspan="4" class=" border-left-grey border-right-grey">

									</td>		
									<td class="bold text-right border-right-2 pr-px-5"> 

									</td>
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0.91-1.00
									</td>						
								</tr>

								<tr>
									<td colspan="2" class=" border-left-grey pl-px-5 pr-px-5">
										Examine Code
									</td>	
									<td colspan="2" class="border-right-grey">
										: 50
									</td>		
									<td class="bold text-right border-right-2 pr-px-5">
										0.90
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZE1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZC1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA4)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA7)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="bold text-center border-right-grey border-top-grey" colspan="2">
										EASY
									</td>			
								</tr>

								<tr>
									<td colspan="2" class=" border-left-grey pl-px-5 pr-px-5">
										No. of Examine
									</td>	
									<td colspan="2" class="border-right-grey">
										: 50
									</td>	
									<td class="bold text-right border-right-2 pr-px-5">

									</td>
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0.75-0.91
									</td>	
								</tr>

								<tr>
									<td colspan="2" class=" border-left-grey pl-px-5 pr-px-5">
										No. of Item's
									</td>	
									<td colspan="2" class="border-right-grey">
										: 50
									</td>	
									<td class="bold text-right border-right-2 pr-px-5">
										0.75
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZE1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZC1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA4)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA7)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class=" text-center border-top-grey border-right-grey" rowspan="6" colspan="2">
										<span class="bold">AVERAGE</span><br/>
										0.25-0.75
									</td>			
								</tr>

								<tr>	
									<td colspan="4" class=" border-left-grey border-right-grey">
										
									</td>		
									<td class="bold text-right border-right-2 pr-px-5"> 

									</td>
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>				
								</tr>

								<tr>
									<td class=" border-left-grey"> 
									</td>	
									<td class="">
										(p) Average
									</td>	
									<td colspan="2" class="border-right-grey ">
										: 50
									</td>	
									<td class="bold text-right border-right-2 pr-px-5">
										0.65
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZE1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZC1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA4)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey ">
										(ZA7)
									</td>		
									<td class="border-top-grey  border-right-grey">
										
									</td>
								</tr>

								<tr>
									<td class=" border-left-grey"> 
									</td>	
									<td class="">
										(D) Average
									</td>	
									<td colspan="2" class="border-right-grey ">
										: 50
									</td>		
									<td class="bold text-right border-right-2 pr-px-5"> 

									</td>
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>				
								</tr>

								<tr>	
									<td colspan="4" class=" border-left-grey border-right-grey">

									</td>	
									<td class="bold text-right border-right-2 pr-px-5">
										0.50
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZE1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZC1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA4)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey " >
										(ZA7)
									</td>		
									<td class="border-top-grey  border-right-grey">
										
									</td>
								</tr>

								<tr>
									<td colspan="4" class="text-center bold bg-grey border-left-grey border-right-grey border-top-grey  vertical-align-middle">
										(p) Difficulity Level Formula
									</td>		
									<td class="bold text-right border-right-2 pr-px-5"> 
									</td>
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>										
								</tr>

								<tr>	
									<td colspan="4" class="text-center border-left-grey border-right-grey border-top-grey ">
										<span class="underline">Total True</span>
									</td>
									<td class="bold text-right border-right-2 pr-px-5">
										0.25
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZE1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZC1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA4)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA7)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="bold text-center border-top-grey border-right-grey" colspan="2">
										DIFFICULT
									</td>				
								</tr>

								<tr>	
									<td colspan="4" class="text-center border-left-grey border-right-grey">
										Total Examine
									</td>		
									<td class="bold text-right border-right-2 pr-px-5"> 
									</td>
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2" colspan="2">
										0.11-0.25
									</td>									
								</tr>

								<tr>
									<td colspan="4" class=" border-left-grey border-right-grey">

									</td>
									<td class="bold text-right border-right-2 pr-px-5">
										0.10
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZE1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZC1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA1)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA4)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="italic pl-px-5 border-top-grey">
										(ZA7)
									</td>	
									<td class=" border-right-grey border-top-grey">
										
									</td>
									<td class="bold text-center border-top-grey border-right-grey" colspan="2">
										TOO DIFFICULT
									</td>							
								</tr>

								<tr>		
									<td colspan="4" class="text-center bold bg-grey border-left-grey border-right-grey border-top-grey vertical-align-middle ">
										(D) Discriminatory Power Formula
									</td>	
									<td class="bold text-right border-right-2 pr-px-5"> 
									</td>
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										0
									</td>	
									<td class=" text-center border-right-grey" colspan="2">
										1
									</td>	
									<td class=" text-center border-right-grey" colspan="2" colspan="2">
										0.00-0.10
									</td>					
								</tr>

								<tr>
									<td colspan="4" class="text-center border-left-grey border-right-grey border-top-grey ">
										<span class="underline">Total True (Comp)</span> - 
										<span class="underline">Total True (non-Comp)</span> 
									</td>	
									<td class="bold text-right pr-px-5">
										0.00
									</td>
									<td class=" text-center border-top-2 ">
										 
									</td>	
									<td class=" text-center border-top-2 bold" colspan="2">
										0.01
									</td>	
									<td class=" text-center border-top-2 bold" colspan="2">
										0.10
									</td>	
									<td class=" text-center border-top-2 bold" colspan="2">
										0.20
									</td>
									<td class=" text-center border-top-2 bold" colspan="2">
										0.40
									</td>	
									<td class=" text-center border-top-2 bold" colspan="2">
										1.00
									</td>		
									<td class=" text-center border-top-2 bold" >
									</td>							
								</tr>

								<tr>
									<td colspan="4" class="text-center border-left-grey border-right-grey ">
										Total Comp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Total Non Comp
									</td>	
									<td>
										
									</td>
									<td colspan="12" class="text-center bold">
										DISCRIMINATORY POWER (INDEX)
									</td>					
								</tr>

								<tr>
									<td colspan="4" class="text-center border-left-grey border-right-grey">
										<br/>
									</td>		
									<td colspan="15" class="border-left-grey">
										
									</td>						
								</tr>

								<tr class="text-center bold line-20 bg-grey border-left-grey border-right-grey border-top-grey vertical-align-middle ">
									<td class="border-right-grey border-left-grey vertical-align-middle">
										ZONE
									</td>
									<td class="border-right-grey vertical-align-middle" width="15%">
										RECOMDT.
									</td>
									<td class="border-right-grey vertical-align-middle">
										TOTAL
									</td>
									<td class="border-right-grey vertical-align-middle">
										(%)
									</td>
									<td colspan="15" class="border-right-grey vertical-align-middle">
										ITEM NUMBER DISTRIBUTION
									</td>
								</tr>

								<tr class="border-top-grey">
									<td class="text-center border-left-grey border-right-grey">
										<div class="bold">
											ZA
										</div>
										1-5
									</td>
									<td class="border-right-grey pl-px-5 pr-px-5  ">
										RETAIN
									</td>
									<td class="text-center border-right-grey">
										31.00
									</td>
									<td class="border-right-grey"> 

									</td>
									<td colspan="15" class="border-right-grey">

									</td>
								</tr>

								<tr class="border-top-grey">
									<td class="text-center border-left-grey border-right-grey border-top-grey">
										<div class="bold">
											ZB
										</div>
										1-12
									</td>
									<td class="border-right-grey pl-px-5 pr-px-5 border-top-grey ">
										RETAIN / REVISE
									</td>
									<td class="text-center border-right-grey border-top-grey">
										11.00
									</td>
									<td class="border-right-grey border-top-grey"> 

									</td>
									<td colspan="15" class="border-right-grey border-top-grey">
										
									</td>
								</tr>

								<tr class="border-top-grey">
									<td class="text-center border-left-grey border-right-grey border-top-grey">
										<div class="bold">
											ZC
										</div>
										1-3
									</td>
									<td class="border-right-grey pl-px-5 pr-px-5 border-top-grey ">
										RETAIN
									</td>
									<td class="text-center border-right-grey border-top-grey">
										1.00
									</td>
									<td class="border-right-grey border-top-grey"> 

									</td>
									<td colspan="15" class="border-right-grey border-top-grey">
										
									</td>
								</tr>

								<tr class="border-top-grey">
									<td class="text-center border-left-grey border-right-grey border-top-grey">
										<div class="bold">
											ZD
										</div>
										1-4
									</td>
									<td class="border-right-grey pl-px-5 pr-px-5  border-top-grey">
										REJECT / REVISE
									</td>
									<td class="text-center border-right-grey border-top-grey">
										4.00
									</td>
									<td class="border-right-grey border-top-grey"> 

									</td>
									<td colspan="15" class="border-right-grey border-top-grey">
										
									</td>
								</tr>

								<tr class="border-top-grey">
									<td class="text-center border-left-grey border-right-grey border-top-grey">
										<div class="bold">
											ZE
										</div>
										1-4
									</td>
									<td class="border-right-grey pl-px-5 pr-px-5 border-top-grey ">
										REJECT
									</td>
									<td class="text-center border-right-grey border-top-grey">
										4.00
									</td>
									<td class="border-right-grey border-top-grey"> 

									</td>
									<td colspan="15" class="border-right-grey border-top-grey">
										
									</td>
								</tr>

								<tr class="line-20 border-top-grey">
									<td class=" border-left-grey border-bottom-grey border-top-grey">
										
									</td>
									<td class="text-right bold border-bottom-grey border-top-grey border-right-grey border-top-grey pr-px-5">
										TOTAL :
									</td>
									<td class="text-center bg-grey border-bottom-grey border-top-grey border-right-grey border-top-grey">
										4.00
									</td>
									<td class="text-center bg-grey border-bottom-grey border-top-grey border-right-grey border-top-grey">

									</td>
									<td colspan="15" class=" border-bottom-grey border-right-grey border-top-grey">
										
									</td>
								</tr>

							</table>
						</td>
					</tr>
	        </tbody>
		</table>

	</div>
@endsection
