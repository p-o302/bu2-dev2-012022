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




<button id="popup-btn"> Thêm mới </button>
<div class="popup">
<div class="popup-content">
<span class="close-btn">&times;</span>
<p> <table class="table"style="margin-left: 0px;">
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
      {{-- <td class="btn-table"><button>Sửa</button>&nbsp;<button>Xóa</button></td> --}}
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
</table></p>
</div>
</div>

<style>.popup {
  display: none;
  position: fixed;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.5);
  }
  .popup-content {
  position: relative;
  background-color: #FAFAFA;
  padding: 15px;
  margin: auto;
  width: 70%;
  }
  .close-btn {
  float: right;
  color: #2E2E2E;
  font-size: 25px;
  font-weight: 700;
  }
  .close-btn:hover {
  color: #D2D2D2;
  }</style>

<script>
  let modalBtn = document.getElementById("popup-btn");
  let modal = document.querySelector(".popup");
  let closeBtn = document.querySelector(".close-btn");
  // Hiển thị popup khi nhấp chuột vào button
  modalBtn.onclick = function(){
  modal.style.display = "block"
  }
  // Đóng popup khi ấn vào nút đóng
  closeBtn.onclick = function(){
  modal.style.display = "none"
  }
  // Đóng khi nhấp chuột vào bất cứ khu vực nào trên màn hình
  window.onclick = function(e){
  if(e.target == modal){
  modal.style.display = "none"
  }
  }
  </script>
@endsection