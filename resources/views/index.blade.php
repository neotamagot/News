@extends('layouts.app')


@section('content')
    <div class="card">
        <div class="panel panel-body">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Show data</a></li>
            </ol>
        </div>
        {{--{!! Form::open(['method' => 'POST','url' => 'register_2','class' => 'form-horizontal', 'id' => 'p1', 'data-toggle' => 'md-validator', 'novalidate' => 'novalidate'])!!}--}}
        {{ csrf_field() }}
        <div class="card">
            <div class="card-body">
                <h4><span class="icon icon-pencil-square-o"></span> สมัครลงทะเบียนเรียน </h4>
                <div class="">
                    {{--@foreach($stu as $data)--}}
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("first_name", $stu->first_name, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                {!! Form::label('first_name_label',"ชื่อต้น", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("last_name", $stu->last_name, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                {!! Form::label('last_name_label',"นามสกุล", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("name",  $stu->last_name , ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true", 'readonly']) !!}
                                {!! Form::label('code_label',"รหัสนักศึกษา/อาจารย์", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("birth_date", $stu->birth_date, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                {!! Form::label('birth_date_label',"วันเกิด", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("faculty", $stu->faculty, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
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
                                {!! Form::email("email", $stu->email , ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true",'readonly']) !!}
                                {!! Form::label('email_label',"Email", ["class" => "md-control-label"]) !!}
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("phone", $stu->phone, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                {!! Form::label('phone_label',"เบอร์โทรศัพท์", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="md-form-group md-label-floating">
                                {!! Form::text("address", $stu->address, ["class"=>"md-form-control", "required" =>"","spellcheck"=>"false","aria-required"=>"true"]) !!}
                                {!! Form::label('address_label',"ที่อยู่", ["class" => "md-control-label"]) !!}

                            </div>
                        </div>
                    </div>
                    {{--@endforeach--}}
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="{{ url('/home') }}" class="btn btn-sm btn-info pull-left" type="button"><span
                                        class="icon icon-plus-square-o icon-lg icon-fw"></span> กลับไปหน้าเริ่มต้น</a>
                        </div>
                        <div class="col-xs-3">
                            {{--<button type="submit" class="btn btn-primary btn-block">บันทึกข้อมูล</button>--}}
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
<div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="building-index-table" class="table table-middle nowrap dataTable no-footer"
                               role="grid">
                            <thead>
                            <tr>
                                <th class="col-md-2">รหัสวิชา</th>
                                <th class="col-md-3">ชื่อ</th>
                                <th class="col-md-3">หน่วยกิต</th>
                                <th class="col-md-3">อื่นๆ</th>
                            </tr>
                            </thead>
                            @if($class_stu->count()===0)
                                    <tr>
                                        <td colspan="4"> ยังไม่ได้ลงทะเบียนเรียน </td>
                                    </tr>
                            @else
                                @foreach($class_stu as $data)
                                    {!! Form::open(['url' => '/register_class','method'=>'POST','id'=> $data->id])!!}
                                    <tr>
                                    <td>
                                        <a>{{$data->subject()->first()->code}}</a>
                                    </td>
                                    <td>
                                        <a href="{{url('register_class/'.$data->subject_id)}}">{{$data->subject()->first()->name}}</a>
                                    </td>
                                    <td>
                                        {{$data->subject_id}}
                                    </td>
                                    <td>
                                        <button name="del_reg" data-id={{$data->id}} class="btn">ยกเลิกลงทะเบียน</button>
                                        {{--<a href="{{ url('register_class/'.$data->id)}}" act="add">ยกเลิกลงทำเบียน</a>--}}
                                    </td>
                                </tr>
                                {!!Form::close()!!}
                            @endforeach
                                @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>

@endsection
@section('script')
        <script >
            $('button[name="del_reg"]').on('click',function() {
                console.log(this);
                var documentId = $(this).attr("data-id")
//                var documentName = $(this).attr("data-name")
                console.log(documentId);


//            alert('1');
                swal({
                    title: "ยืนยันการลบ?",
                    text: "คุณต้องการยกเลิกการลงทะเบียนใช่หรือไม่?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "ยืนยัน",
                    cancelButtonText: "ยกเลิก",
                }).
                then(function () {
                        $.ajax({
                        type: "POST",
                        contentType: "application/json; charset=utf-8",
                        url: "{{url("student_course")}}/"+documentId+"/delete",
                        dataType: 'json',
                            async: true,
                            headers: {
                                'X-CSRF-TOKEN': "{{csrf_token()}}"

                        },
                            data: {
                                _token: "{{csrf_token()}}"
                        },
                            success: function (data) {
                                swal({
                                    title: "ลบสำเร็จ!",
                                    text: "กรุณารอระหว่างระบบทำการ reload หน้าเว็บ",
                                    confirmButtonColor: "#66BB6A",
                                    type: "success"
                                });
                               window.location.reload()
                        },
                            error: function (result) {
                                swal({
                                    title: "เกิดข้อผิดพลาด!",
                                    text: "การร้องขอยกเลิกการลงทะเบียนเรียนไม่สำเร็จ",
                                    type: "error"
                    });
                                console.log(result)
                        }
                    })
                })

                {{--function(isConfirm){--}}
                    {{--if (isConfirm) {--}}
                        {{--swal("กรุณารอระหว่างระบบทำการลบข้อมูล")--}}
                        {{--$.ajax({--}}
                            {{--type: "POST",--}}
                            {{--contentType: "application/json; charset=utf-8",--}}
                            {{--url: "{{url("student_course")}}/"+documentId+"/delete",--}}
                            {{--dataType: 'json',--}}
                            {{--async: true,--}}
                            {{--headers: {--}}
                                {{--'X-CSRF-TOKEN': "{{csrf_token()}}"--}}
                            {{--},--}}
                            {{--data: {--}}
                                {{--_token: "{{csrf_token()}}"--}}
                            {{--},--}}
                            {{--success: function (data) {--}}
                                {{--swal({--}}
                                    {{--title: "ลบสำเร็จ!",--}}
                                    {{--text: "กรุณารอระหว่างระบบทำการ reload หน้าเว็บ",--}}
                                    {{--confirmButtonColor: "#66BB6A",--}}
                                    {{--type: "success"--}}
                                {{--});--}}
                                {{--window.location.reload()--}}
                            {{--},--}}
                            {{--error: function (result) {--}}
                                {{--swal({--}}
                                    {{--title: "เกิดข้อผิดพลาด!",--}}
                                    {{--text: "การร้องขอลบไฟล์ไม่สำเร็จ",--}}
                                    {{--type: "error"--}}
                                {{--});--}}
                                {{--console.log(result)--}}
                            {{--}--}}
                        {{--})--}}
                    {{--}--}}
                {{--})--}}
            });
        </script>
@stop