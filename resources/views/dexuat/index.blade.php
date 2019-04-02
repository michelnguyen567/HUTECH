@extends("dexuat.layout")

@section('body')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin">
            <div class="card">
            <div class="card-body" style="padding: 1.5rem 0.5rem;">
                <div style="float: right;">
                <button type="button" style="font-size: 11px;" class="btn btn-success btn-fw" data-toggle="modal" data-target="#myModal">
                <i class="mdi mdi-loupe"></i>Thêm mới</button>


                <div class="modal" id="myModal">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                    
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Thêm mới</h5>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                            <label for="exampleFormControlSelect3">Loại</label>
                            <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                                <option>Thí nghiệm</option>
                                <option>Điện tử</option>
                                <option>Khác</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label>Tên dụng cụ</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Nhập tên dụng cụ" aria-label="Nhập tên dụng cụ">
                            </div>
                            <div class="form-group">
                            <label>Công ty</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Nhập công ty" aria-label="Nhập công ty">
                            </div>
                            <div class="form-group">
                            <label>Ngày nhập</label>
                            <input id="datepicker" class="form-control form-control-lg">
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                            </div>
                            <div class="form-group">
                            <label>Số lượng</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Nhập số lượng" aria-label="Nhập số lượng">
                            </div>
                            <div class="form-group">
                            <label>Giá</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">VNĐ</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                <span class="input-group-text">.000</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>  
                    </div>
                        
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Thêm</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                    </div>
                </div>
                </div>
                <button type="button" style="font-size: 11px;" class="btn btn-success btn-fw">
                <i class="mdi mdi-import"></i>Import</button>
                <button type="button" style="font-size: 11px;" class="btn btn-success btn-fw">
                <i class="mdi mdi-file-export"></i>Xuất file</button>
                
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Loại
                    </button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-reply fa-fw"></i>Thí nghiệm</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-history fa-fw"></i>Điện tử</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-check text-success fa-fw"></i>Khác</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                    </div>
                </div>
                </div>
                <h4 class="card-title">Bảng nguyên liệu & dụng cụ</h4>
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>
                        #
                        </th>
                        <th>
                        Tên dụng cụ
                        </th>
                        <th>
                        Phòng
                        </th>
                        <th>
                        Ngày nhập
                        </th>
                        <th>
                        Số lượng
                        </th>
                        <th>
                        Giá (VNĐ)
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr data-toggle="modal" data-target="#ModalView">
                        <td class="font-weight-medium">
                        1
                        </td>
                        <td>
                        Dụng cụ 1
                        </td>
                        <td>
                        <button type="button" class="btn btn-link btn-fw" style="text-align: left; padding: 0"><a href="#">E4.4/6</a></button>
                        </td>
                        <td>
                        9/3/2019
                        </td>
                        <td>
                        3
                        </td>
                        <td class="text-danger"> 500.000 VNĐ
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-medium">
                        2
                        </td>
                        <td>
                        Dụng cụ 2
                        </td>
                        <td>
                        <button type="button" class="btn btn-link btn-fw" style="text-align: left; padding: 0"><a href="#">E4.4/4</a></button>
                        </td>
                        <td>
                        9/3/2019
                        </td>
                        <td>
                        3
                        </td>
                        <td class="text-danger"> 1.500.000 VNĐ
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-medium">
                        3
                        </td>
                        <td>
                        Dụng cụ 3
                        </td>
                        <td>
                        <button type="button" class="btn btn-link btn-fw" style="text-align: left; padding: 0"><a href="#">E4.4/1</a></button>
                        </td>
                        <td>
                        10/3/2019
                        </td>
                        <td>
                        5
                        </td>
                        <td class="text-danger"> 2.500.000 VNĐ
                        </td>
                    </tr>
                    <tr>
                        <td class="font-weight-medium">
                        4
                        </td>
                        <td>
                        Dụng cụ 4
                        </td>
                        <td>
                        <button type="button" class="btn btn-link btn-fw" style="text-align: left; padding: 0"><a href="#">E4.4/6</a></button>
                        </td>
                        <td>
                        10/3/2019
                        </td>
                        <td>
                        2
                        </td>
                        <td class="text-danger"> 200.000 VNĐ
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('dexuat.footer')
    <!-- partial -->
</div>
@endsection
