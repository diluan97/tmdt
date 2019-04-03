@extends('layouts.admin.master')
@section('content')


    <div class="row">
        <div class="col-md-12">
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Tiêu Đề</th>
                                                <th>Tên Khách Hàng </th>
                                                <th>Nội Dung</th>
                                                <th>Chức Năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($contact as $item)
                                            <tr>

                                                <td>{{ $item->subject }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->message }}</td>
                                                <td>

                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Sửa">
                                                           <a href="{{ $item->urlAdminEdit() }}"> <i class="zmdi zmdi-edit"></i></a>
                                                        </button>
                                                            {{--  @include('admin.category.component.btn_delete')  --}}

                                                    </div>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
        {{-- <div class="col-md-1"></div> --}}
    </div>

@endsection
