@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    You are logged in!
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="{{ url('/register_2') }}" class="btn btn-sm btn-info pull-left" type="button"><span
                                        class="icon icon-plus-square-o icon-lg icon-fw"></span> กรอกข้อมูลเพิ่มเติม</a>
                        </div>

                        <div class="col-xs-3">
                            <a href="{{ url('/student') }}" class="btn btn-sm btn-info pull-left" type="button"><span
                                        class="icon icon-plus-square-o icon-lg icon-fw"></span> ดูข้อมูลนักศึกษา</a>
                        </div>

                        <div class="col-xs-3">
                            <a href="{{ url('/subject') }}" class="btn btn-sm btn-info pull-left" type="button"><span
                                        class="icon icon-plus-square-o icon-lg icon-fw"></span> ดูข้อมูลวิชาลงทะเบียน</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
