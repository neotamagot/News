@extends('layouts.app')


@section('content')

    <div class="panel panel-body">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Class</a></li>
        </ol>
    </div>

    <div class="card">

        <div class="panel panel-body">
            <div class="row">

                <div class="col-xs-3">
                    <h4>ข้อมูลรายวิชา</h4>
                </div>

                {{--<div class="col-xs-3">--}}
                    {{--<a href="{{ url('/customer') }}" class="btn btn-sm btn-info pull-right" type="button"><span--}}
                                {{--class="icon icon-plus-square-o icon-lg icon-fw"></span> เพิ่มข้อมูลลูกค้า</a>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="building-index-table" class="table table-middle nowrap dataTable no-footer"
                               role="grid">
                            <thead>
                            <tr>
                                <th class="col-md-2">เลขวิชา</th>
                                <th class="col-md-3">ชื่อ</th>
                                <th class="col-md-3">หน่วยกิต</th>
                                <th class="col-md-3">อื่นๆ</th>
                            </tr>
                            </thead>
                            @foreach($class as $data)
                                {!! Form::open(['url' => '/register_class','method'=>'POST','id'=> $data->id])!!}
                                <tr>
                                    <td>
                                        {{$data->id}}
                                    </td>
                                    <td>
                                        <a href="{{ url('register_class/'.$data->id)}}">{{$data->name}}</a>
                                    </td>
                                    <td>
                                        {{$data->credit}}
                                    </td>
                                    <td>
                                        <button name="add_reg" data-id={{$data->id}} class="btn btn-primary btn-block">ลงทำเบียน</button>
                                        {{--<a href="{{ url('register_class/'.$data->id)}}" act="add">ลงทำเบียน</a>--}}
                                    </td>
                                </tr>
                                {!!Form::close()!!}
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection

@section('script')
    <script >
        $('button[name="add_reg"]').on('click',function() {
//            console.log(this);
            var documentId = $(this).attr("data-id")
//                var documentName = $(this).attr("data-name")
            console.log(documentId);


//            alert('1');
            swal({
                title: "ยืนยันการลงทะเบียน?",
                text: "คุณต้องการลงทะเบียนใช่หรือไม่?",
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
                    url: "{{url("student_course")}}/"+documentId+"/insert",
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
                            title: "ลงทะเบียนสำเร็จ!",
                            text: "กรุณารอระหว่างระบบทำการ reload หน้าเว็บ",
                            confirmButtonColor: "#66BB6A",
                            type: "success"
                        });
                        window.location.reload()
                    },
                    error: function (result) {
                        swal({
                            title: "เกิดข้อผิดพลาด!",
                            text: "การร้องขอลงทะเบียนไม่สำเร็จ",
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