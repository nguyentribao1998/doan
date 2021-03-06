@extends('admin.layouts.master')

@section('title')
    Danh sách tin tức
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tin tức</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Tóm tắt</th>
                        <th>Nội dung</th>
                        <th>Nổi bật</th>
                        <th>Số lượt xem</th>
                        <th>idLoaiTin</th>
                        <th>Chỉnh sửa</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Tóm tắt</th>
                        <th>Nội dung</th>
                        <th>Nổi bật</th>
                        <th>Số lượt xem</th>
                        <th>idLoaiTin</th>
                        <th>Chỉnh sửa</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($tintuc as $key => $tt)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $tt->TieuDe }}
                                <img src="admin/img/upload/tintuc/{{$tt->image}}" alt="" style="width: 150px" height="150px">
                            </td>
                            <td>{{ $tt->TomTat }}</td>
                            <td>{{ $tt->NoiDung }}</td>
                            <td>{{ $tt->NoiBat }}</td>
                            <td>{{ $tt->SoLuotXem }}</td>
                            <td>{{ $tt->idLoaiTin }}</td>


                            <td>
                                <button class="btn btn-primary edit" title="{{ "Sửa ".$tt->name }}" data-toggle="modal" data-target="#edit" type="button" data-id="{{ $tt->id }}"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger delete" title="{{ "Xóa ".$tt->name }}" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $tt->id }}"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">{{ $tintuc->links() }}</div>
            </div>
        </div>
    </div>
    <!-- Edit Modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa the loai <span class="title"></span></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin: 5px">
                        <div class="col-lg-12">
                            <form role="form">
                                <fieldset class="form-group">
                                    <label>Name</label>
                                    <input class="form-control name" name="name" placeholder="Nhập tên category">
                                    <span class="error" style="color: red;font-size: 1rem;"></span>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success update">Save</button>
                    <button type="reset" class="btn btn-primary">Làm Lại</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- delete Modal-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-left: 183px;">
                    <button type="button" class="btn btn-success del">Có</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                    <div>
                    </div>
                </div>
            </div>
@endsection