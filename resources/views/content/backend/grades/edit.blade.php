@extends('template.color_admin_apple_v42.form')

@section('content')             
    <div id="content" class="content">
        <x-cv42.breadcrumb link2="{{ route($content.'.index') }}" level2="{{$panel_name}}" level3="Edit" />
        <x-cv42.page-header header="{{$panel_name}}"/>
        <div class="panel panel-inverse">
            <x-cv42.panel-heading title="Form"/>
            <div class="panel-body">
                <form action="{{ route($content.'.update', $Grade->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Nama" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "nama" 
                                class       = "form-control m-b-5 @error('nama') is-invalid @enderror" 
                                value       = "{{ old('title', $Grade->nama) }}" />
                                
                            @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Min" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "min" 
                                class       = "form-control m-b-5 @error('min') is-invalid @enderror" 
                                value       = "{{ old('title', $Grade->min) }}" />
                                
                            @error('min')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Max" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "max" 
                                class       = "form-control m-b-5 @error('max') is-invalid @enderror" 
                                value       = "{{ old('title', $Grade->max) }}" />
                                
                            @error('max')
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
