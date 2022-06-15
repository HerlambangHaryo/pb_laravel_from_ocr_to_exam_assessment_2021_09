@extends('template.color_admin_apple_v42.datatable')

@section('content')             
    <div id="content" class="content">
        <x-cv42.breadcrumb link2="{{ route($content.'.index') }}" level2="{{$panel_name}}" level3="Data" />
        <x-cv42.page-header header="{{$panel_name}}"/>
        <div class="panel panel-inverse">
            <x-cv42.panel-heading title="Table"/>
            <div class="panel-body">       

                @if(session()->has('Success'))
                    <x-cv42.alert-form-saved />
                @elseif(session()->has('Deleted'))
                    <x-cv42.alert-form-deleted />
                @endif

                <div class="row">
                    <div class="col-md-4">
                        <div class="widget-list widget-list-rounded m-b-30">
                            <div class="widget-list-item">
                                <div class="widget-list-content">
                                    <h4 class="widget-list-title">
                                        {{$Exam->nama_course}}
                                    </h4>
                                        {{$Exam->nama_exam}}
                                    <p class="widget-list-desc">
                                        Exam Date : {{$Exam->tanggal_ujian}}<br/>
                                        Scan Date : {{$Exam->tanggal_scan}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">   
                        <div class="widget-list widget-list-rounded m-b-30">
                            <div class="widget-list-item">
                                <div class="widget-list-content">
                                    <h4 class="widget-list-title">
                                        {{$Student_exams->nama}}
                                    </h4>
                                        {{$Student_exams->nim}}
                                    <p class="widget-list-desc">
                                        True : {{$Student_exams->true}}<br/>
                                        Weight : {{$Student_exams->weight}}<br/>
                                        Grade : {{$Student_exams->grade}}
                                    </p>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>                

                <div class="table-responsive">         
                    <table id="data-table-default" class="table table-striped table-bordered">
                        <thead>
                            <tr>               
                                <x-cv42.th-first/>            
                                <x-cv42.th-content title="Answer" />
                                <x-cv42.th-content title="Key" />
                                <x-cv42.th-content title="Status" />
                            </tr>
                        </thead>
                        <tbody>            
                            @php $counter = 0; @endphp                
                            @forelse ($data as $row)
                                <tr>
                                    <td>
                                        {{ $row->no }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->answer }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->key }}
                                    </td>
                                    <td class="text-center">
                                        @if($row->correct == 1)
                                            <i class="ion ion-ios-checkmark-circle-outline fa-2x fa-fw text-success"></i>
                                            @php $counter++; @endphp     
                                        @else
                                            <p class="text-danger">-</p>
                                        @endif
                                    </td>
                                </tr>
                                @empty 
                                    <x-message.tr-no-record-data col="5"/>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="font-weight-bold text-center">
                                    Total
                                </td>
                                <td class="text-center">
                                    {{$counter}}
                                </td>
                            </tr>                            
                        </tfoot>
                    </table>        
                </div>
            </div>
        </div>
    </div>    
@endsection
