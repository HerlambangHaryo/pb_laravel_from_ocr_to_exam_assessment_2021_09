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
                    <div class="col-md-8">  
                        <x-cv42.a-white-right-open-link link="{{ route($content.'.new_exam_report', $Exam->id) }}" icon="ion-ios-print" title="New Exam Report"/>   
                        <x-cv42.a-white-right-open-link link="{{ route($content.'.exam_report', $Exam->id) }}" icon="ion-ios-print" title="Exam Report"/>   
                        <x-cv42.a-white-right-open-link link="{{ route($content.'.item_and_distructor_analysis', $Exam->id) }}" icon="ion-ios-print" title="Item and Distructor Analysis"/>  

                        <x-cv42.a-white-right link="{{ route($content.'.delete_duplicate', $Exam->id) }}" icon="ion-ios-trash" title="Delete Duplicate Data"/>

                        <x-cv42.a-white-right link="{{ route($content.'.check_exam', $Exam->id) }}" icon="ion-ios-print" title="Check Exam"/>                         
                    </div>
                </div>                

                <div class="table-responsive">         
                    <table id="data-table-default" class="table table-striped table-bordered">
                        <thead>
                            <tr>               
                                <x-cv42.th-first/>            
                                <x-cv42.th-content title="Name" />
                                <x-cv42.th-content title="True" />
                                <x-cv42.th-content title="Weight" />
                                <x-cv42.th-content title="Grade" />
                                <x-cv42.th-last/>
                            </tr>
                        </thead>
                        <tbody>                            
                            @forelse ($new_data as $row)
                                <tr>
                                    <td>
                                        {{ $row->id }}
                                    </td>
                                    <td>
                                        {{ $row->nama }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->true }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->weight }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->grade }}
                                    </td>
                                    <td class="with-btn" nowrap> 
                                        <div class="btn-group m-r-5 m-b-5">
                                            <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                            <ul class="dropdown-menu">
                                                <x-cv42.dropdown-li-a link="{{ route('Student_sheets.show', $row->id) }}" icon="ion-ios-eye" title="show"/>

                                                
                                                <x-cv42.dropdown-li-a link="{{ route('Student_exams.delete_me', $row->id) }}" icon="ion-ios-trash" title="Delete"/>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @empty 
                                    <x-message.tr-no-record-data col="5"/>
                            @endforelse
                        </tbody>
                    </table>        
                </div>
            </div>
        </div>
    </div>    
@endsection
