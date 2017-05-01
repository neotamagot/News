@extends('layouts.app')


@section('content')

    <div class="panel panel-body">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Register Class</a></li>
        </ol>
    </div>

    <div class="card">

        <div class="panel panel-body">
            <div class="row">

                <div class="col-xs-3">
                    <h4>ข้อมูลรายวิชา</h4>
                </div>

            </div>
        </div>
        <div class="col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach($class as $data)
                        {!! Form::open(['url' => '/register_class','method'=>'POST'])!!}
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::label('id_label',"เลขที่", ["class" => "md-control-label"]) !!}
                                {!! Form::text("id", $data->id, ["class"=>"md-form-control", "required" =>"",'readonly',"spellcheck"=>"false","aria-required"=>"true"]) !!}
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::label('code_label',"รหัสวิชา", ["class" => "md-control-label"]) !!}
                                {!! Form::text("code", $data->code, ["class"=>"md-form-control", "required" =>"",'readonly',"spellcheck"=>"false","aria-required"=>"true"]) !!}
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::label('name_label',"ชื่อวิชา", ["class" => "md-control-label"]) !!}
                                {!! Form::text("name", $data->name, ["class"=>"md-form-control", "required" =>"",'readonly',"spellcheck"=>"false","aria-required"=>"true"]) !!}

                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::label('credit_label',"หน่วยกิต", ["class" => "md-control-label"]) !!}
                                {!! Form::text("credit", $data->credit, ["class"=>"md-form-control", "required" =>"",'readonly',"spellcheck"=>"false","aria-required"=>"true"]) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <button type="submit" class="btn btn-primary btn-block">ลงทำเบียน</button>
                            </div>
                        </div>

                        {!!Form::close()!!}
                            @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')

@stop