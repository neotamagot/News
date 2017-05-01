@extends('layouts.app')


@section('content')
    <div class="card">
        <div class="panel panel-body">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Regis2</a></li>
            </ol>
        </div>
        {!! Form::open(['method' => 'POST','url' => 'register_2','class' => 'form-horizontal', 'id' => 'p1', 'data-toggle' => 'md-validator', 'novalidate' => 'novalidate'])!!}
        {{ csrf_field() }}
        <div class="card">
            <div class="card-body">
                <h4><span class="icon icon-pencil-square-o"></span> สมัครลงทะเบียนเรียน </h4>
                <div class="">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("first_name", null, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                {!! Form::label('first_name_label',"ชื่อต้น", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("last_name", null, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                {!! Form::label('last_name_label',"นามสกุล", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("name",  Auth::user()->name , ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true", 'readonly']) !!}
                                {!! Form::label('code_label',"รหัสนักศึกษา/อาจารย์", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="md-form-group md-label-floating">
                                    {!! Form::text("birth_date", null, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                    {!! Form::label('birth_date_label',"วันเกิด", ["class" => "md-control-label"]) !!}

                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="md-form-group md-label-floating">
                                    {!! Form::text("faculty", null, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                    {!! Form::label('faculty_label',"คณะ", ["class" => "md-control-label"]) !!}

                                </div>
                            </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::select("gender", array('ชาย','หญิง'), ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                <small class="md-help-block">เพศ</small>
                            </div>
                        </div>
                        {{--<div class="col-xs-3">--}}
                            {{--<div class="md-form-group md-label-floating">--}}
                                {{--{!! Form::select("level", array('นักศึกษา','อาจารย์'), ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}--}}
                                {{--<small class="md-help-block">อาชีพ</small>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                         </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="md-form-group md-label-floating">
                                {!! Form::email("email",  Auth::user()->email , ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true",'readonly']) !!}
                                {!! Form::label('email_label',"Email", ["class" => "md-control-label"]) !!}
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("phone", null, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                {!! Form::label('phone_label',"เบอร์โทรศัพท์", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("address", null, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                {!! Form::label('address_label',"ที่อยู่", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-3">
                            <a href="{{ url('/home') }}" class="btn btn-sm btn-info pull-left" type="button"><span
                                        class="icon icon-plus-square-o icon-lg icon-fw"></span> กลับไปหน้าเริ่มต้น</a>
                        </div>
                        <div class="col-xs-3">
                            <button type="submit" class="btn btn-primary btn-block">บันทึกข้อมูล</button>
                            {{--<a href="{{ url('/booking') }}" class="btn btn-sm btn-info pull-right" type="button"><span--}}
                            {{--class="icon icon-plus-square-o icon-lg icon-fw"></span> ไปต่อ</a>--}}
                        </div>
                        {{--<div class="col-xs-3">--}}
                            {{--<button type="submit" class="btn btn-primary btn-block">บันทึกข้อมูล</button>--}}
                            {{--<a href="{{ url('/booking') }}" class="btn btn-sm btn-info pull-right" type="button"><span--}}
                                        {{--class="icon icon-plus-square-o icon-lg icon-fw"></span> ไปต่อ</a>--}}
                        {{--</div>--}}
                    </div>

                </div>
            </div>
        </div>

    {!! Form::close()!!}

@endsection

@section('script')

@stop