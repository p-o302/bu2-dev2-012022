@extends('admin_page')
@section('content')
    
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Nhà cung cấp</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <table class="table"style="margin-left: 0px;">
      <a class="btn btn-primary" href="#" role="button" style="margin-bottom: 20px;">Thêm mới</a>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td class="btn-table"><button>Sửa</button>&nbsp;<button>Xóa</button></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
</div>
@endsection