@extends('template.color_admin_apple_v42.form')
@section('content')             
    <div id="content" class="content">
        <x-cv42.breadcrumb link2="{{ route($content.'.index') }}" level2="{{$panel_name}}" level3="Create" />
        <x-cv42.page-header header="{{$panel_name}}"/>
        <div class="panel panel-inverse">
            <x-cv42.panel-heading title="Form"/>
            <div class="panel-body">  
                <form action="{{ route($content.'.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row m-b-15">
                        <x-cv42.label-form title="Courses" />
                        <div class="col-md-5">
                            <select 
                                name        = "id_courses" 
                                class       = "form-control m-b-5 @error('id_courses') is-invalid @enderror" 
                                >
                                <option value="">
                                    Choose Courses
                                </option>
                                @foreach ($course as $row)
                                    <option value="{{$row->id}}">
                                        {{$row->nama}}
                                    </option>
                                @endforeach

                            </select>
                                
                            <!-- error message untuk title -->
                            @error('id_courses')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>  
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Nama Ujian" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "nama" 
                                class       = "form-control m-b-5 @error('nama') is-invalid @enderror" 
                                placeholder = "Nama Ujian" />
                                
                            @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>   

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Tanggal Ujian" />
                        <div class="col-md-3">
                            <input type="date" 
                                name        = "tanggal_ujian" 
                                class       = "form-control m-b-5 @error('tanggal_ujian') is-invalid @enderror" 
                                placeholder = "Nama" />
                                
                            @error('tanggal_ujian')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>         
                    
                    <div class="form-group row m-b-15">
                        <x-cv42.label-form title="File .txt" />
                        <div class="col-md-5">
                            <input type="file" 
                                name="file"
                                class=" @error('file') is-invalid @enderror" >
                        
                            <!-- error message untuk title -->
                            @error('file')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>     
                    </div>

                    <div class="form-group row m-b-15">
                        <x-cv42.label-form title="Format" />
                        <div class="col-md-2">
                            <select 
                                name        = "format" 
                                class       = "form-control m-b-5 @error('format') is-invalid @enderror" 
                                >
                                <option value="">
                                    Choose Format
                                </option>
                                <option value="1111">
                                    Format 1111
                                </option>
                                <option value="V01">
                                    Format V01
                                </option>

                            </select>
                                
                            <!-- error message untuk title -->
                            @error('format')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>  
                    </div>

                    <div class="form-group row m-b-15"> 
                        <div class="col-md-8 offset-md-2">
                            <x-cv42.button-submit />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
@endsection
