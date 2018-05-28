@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h2>Danh sách app</h2>
                </div>
                <div class="box-divider m-0"></div>
                <div class="box-body">
                    <button id="btn-add" class="btn danger" style="margin-bottom: 10px"><i class="fa fa-plus"></i> Thêm
                    </button>
                    <div class="table-responsive">
                        <table class="table v-middle p-0 m-0 box" data-plugin="dataTable" id="datatable">
                            <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Package</th>
                                <th>Get Link</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($apps as $app)
                                <tr>
                                    <td>{{$app->name}}</td>
                                    <td>{{$app->package}}</td>
                                    <td><button class="btn success btnGetLink"
                                           value="{{config('custom.api') . $app->token}}">Get Link</button>
                                    </td>
                                    <td><a class="btn success"
                                           href="{{route('app.edit', ['id' => $app->id])}}">Sửa</a>
                                    </td>
                                    <td>
                                        <button class="btn danger btn-delete" data-toggle="modal" data-target="#m"
                                                id="btn-delete" value="{{$app->id}}">Xóa
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="m" class="modal" data-backdrop="true" style="display: none" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Xóa apps</h5></div>
                <div class="modal-body text-center p-lg"><p>Bạn muốn xóa apps này?</p></div>
                <div class="modal-footer">
                    <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">Không</button>
                    <button type="button" class="btn danger p-x-md" data-dismiss="modal" id="del-confirm">Có</button>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="del-id"/>
@endsection


@push('script')
    @include('layouts.plugin.datatable.datatable_script')
    @include('layouts.plugin.modal.modal_script')
    @include('layouts.plugin.notify.script')
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();

            $('.btn-delete').click(function (e) {
                console.log(e.target.value);
                $('#del-id').val(e.target.value);
            });

            $('#del-confirm').click(function (e) {
                window.location.href = "{{url('/app')}}/" + $('#del-id').val() + "/delete";
            });

            $('#btn-add').click(function () {
                window.location.href = "{{route('app.add')}}";
            });
            $('.btnGetLink').click(function (e) {
                window.open(e.target.value);
            });
            @if(session('success'))
            $.notify("Xóa app thành công", 'success');
            @endif
        })
    </script>
@endpush

@push('style')
    @include('layouts.plugin.datatable.datatable_style')
@endpush

@section('header')
    @include('layouts.header', ['title' => '', 'url' => ''])
@endsection
