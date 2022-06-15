@extends('template.color_admin_apple_v42.datatable')

@section('content')             
    <div id="content" class="content">
        <x-cv42.breadcrumb link2="{{ route($content.'.index') }}" level2="{{$panel_name}}" level3="Data" />
        <x-cv42.page-header header="{{$panel_name}}"/>
        <div class="panel panel-inverse">
            <x-cv42.panel-heading title="Table"/>
            <div class="panel-body">
                Format {{ $data->format }} <br/>
                <?php

                    $temp   =  explode(PHP_EOL, $data->text);
                    $temp2  =  $temp[0];
                    $temp3 = str_replace(' ', '/', $temp2);
                    $temp4 = explode('//////////////////////////////////////////////////', $temp3);                
                    $temp5 =  $temp4[0];
                    $temp6 = substr($temp5,5);
                    echo $temp6;

                    echo '<br/>';


                    echo count($temp);
                    echo '<br/>';
                    echo '<br/>';
                    echo '<br/>';


                   
                    for ($i=1; $i < count($temp); $i++) 
                    { 
                        $lineofcode         = str_replace(' ', '/', $temp[$i]);
                        $cek_lineofcode     = str_replace(" ", "", $temp[$i]);

                            echo $lineofcode;
                                # //////////////////////////////////////////////////
                            echo '<br/>';
                            $temp_answr = explode('//////////////////////////////////////////////////', $lineofcode); 

                            $temp_answr2 = substr($temp_answr[0],5);

                            $intrvl = substr($temp_answr[0], 2, 3);

                            echo 'Intr : '.$intrvl;
                            echo '<br/>';

                            echo 'Anwr : '.$temp_answr2;
                            echo '<br/>';


                            if(isset($temp_answr[1]))
                            {
                                echo 'Nim : '.trim(substr($temp_answr[1],1, 10));
                                echo '<br/>';

                                $pre_nama = trim(str_replace('/', ' ', substr($temp_answr[1],13)));
                                echo 'Nama : '.$pre_nama;
                                echo '<br/>';
                            }
                            // print_r($temp_answr);

                            // $test =  $temp_answr[1];
                            // echo 'Nim : '.$temp_answr[1];
                            echo '<br/>';


                            echo '<br/>';
                            echo '<br/>';

                       
                    }

                ?>
            </div>
        </div>
    </div>    
@endsection
