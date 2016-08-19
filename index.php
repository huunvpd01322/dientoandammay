<?php
    require "connect.php";
	require "database.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assignment</title>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="js/filterForTable.js"></script>
<style>
/* enable absolute positioning */
.inner-addon {
  position: relative;
}

/* style glyph */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align glyph */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }

</style>
</head>

<body>	

  <div class="jumbotron text-center" style="background-color:#fff">
  <h1 style="color:#CC1619"><a style="text-decoration:none" href="index.php">QUẢN LÝ BÁN HÀNG</a></h1>
</div>

		
        
        
        
        
        
        
        

          
        <ul class="nav nav-tabs  nav-justified">
          <li class="active"><a data-toggle="tab" href="#khachhang"><b>KHÁCH HÀNG</b></a></li>
          <li><a data-toggle="tab" href="#loaisanpham"><b>LOẠI SẢN PHẨM</b></a></li>
          <li><a data-toggle="tab" href="#sanpham"><b>SẢN PHẨM</b></a></li>
          <li><a data-toggle="tab" href="#hoadon"><b>HOÁ ĐƠN</b></a></li>
          <li><a data-toggle="tab" href="#chitiethoadon"><b>CHI TIẾT HÓA ĐƠN</b></a></li>
        </ul>
        
        <div class="tab-content" style="margin-top:5px">
          <div id="khachhang" class="tab-pane fade in active">
          
          		 <form class="form-horizontal" role="form" method="post" action="">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="makh">Mã khách hàng:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="makh" name="makh" placeholder="Nhập mã khách hàng" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="tenkh">Họ và tên:</label>
                    <div class="col-sm-10"> 
                      <input type="text" class="form-control" id="tenkh" name="tenkh" placeholder="Nhập tên khách hàng" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="diachi">Địa chỉ:</label>
                    <div class="col-sm-10"> 
                      <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập địa chỉ" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10"> 
                      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="sodt">Số điện thoại:</label>
                    <div class="col-sm-10"> 
                      <input type="tel" class="form-control" id="sodt" name="sodt" placeholder="Nhập số điện thoại" required>
                    </div>
                  </div>
       
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary" name="themkh" id="themkh">Thêm khách hàng</button>
                    </div>
                  </div>
                </form>
                
                  <div class="inner-addon left-addon">
                  <i class="glyphicon glyphicon-search"></i>      
                	<input class="form-control" id="searchInput" name="search" placeholder="Tìm kiếm..."/>
                	</div>
                <table class="table table-bordered tbkh">
                <thead>
                  <tr class="active">
                    <th>Mã khách hàng</th>
                    <th>Họ và tên</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Tùy chỉnh</th>
                  </tr>
                </thead>
                <tbody id="tbkhachhang">
                	<?php
						getkhachhang();
					?>
                </tbody>
              </table>
          </div>
          <div id="loaisanpham" class="tab-pane fade">
          
          		<form class="form-horizontal" role="form" method="post" action="">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="malsp">Mã loại sản phẩm:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="malsp" name="malsp" placeholder="Nhập mã loại sản phẩm" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="tenlsp">Tên loại sản phẩm:</label>
                    <div class="col-sm-10"> 
                      <input type="text" class="form-control" id="tenlsp" name="tenlsp" placeholder="Nhập tên loại sản phẩm" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="mota">Mô tả:</label>
                    <div class="col-sm-10"> 
                      <textarea class="form-control" id="mota" name="mota" placeholder="Nhập mô tả" required></textarea>
                    </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary" name="themlsp" id="themlsp">Thêm loại sản phẩm</button>
                    </div>
                  </div>
                </form>
          
          
          		<div class="inner-addon left-addon">
                  <i class="glyphicon glyphicon-search"></i>      
                  <input id="searchInput2" class="form-control" name="search" placeholder="Tìm kiếm..."/>
                	</div>
          
                <table class="table table-bordered tblsp">
                <thead>
              <tr class="active">
                    <th>Mã loại sản phẩm</th>
                    <th>Tên loại sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Tùy chỉnh</th>
                  </tr>
                </thead>
                <tbody id="tbloaisanpham">
                <?php
						getloaisanpham();
					?>
                </tbody>
              </table>
          </div>
          <div id="sanpham" class="tab-pane fade">
          
          <form class="form-horizontal" role="form" method="post" action="">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="masp">Mã sản phẩm:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="masp" name="masp" placeholder="Nhập mã sản phẩm" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="mmalsp">Mã loại sản phẩm:</label>
                    <div class="col-sm-10"> 	
                      <select id="mmalsp" name="mmalsp" class="form-control"  required>
                      <?php
					   getmaloaisanpham();
                      ?>
                    </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="tensp">Tên sản phẩm:</label>
                    <div class="col-sm-10"> 
                      <input type="text" class="form-control" id="tensp" name="tensp" placeholder="Nhập tên sản phẩm" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="dongia">Đơn giá:</label>
                    <div class="col-sm-10"> 
                      <input type="number" class="form-control" id="dongia" name="dongia" placeholder="Nhập đơn giá sản phẩm" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="tnsp">Thông tin sản phẩm:</label>
                    <div class="col-sm-10"> 
                      <textarea class="form-control" id="tnsp" name="tnsp" placeholder="Nhập thông tin sản phẩm" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="slc">Số lượng còn:</label>
                    <div class="col-sm-10"> 
                      <input type="number" class="form-control" id="slc" name="slc" placeholder="Nhập số lượng sản phẩm còn" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="ngaysx">Ngày sản xuất:</label>
                    <div class="col-sm-10"> 
                      <input type="date" class="form-control" id="ngaysx" name="ngaysx" required>
                    </div>
                  </div>
                  
                  
                  
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary" name="themsp" id="themsp">Thêm sản phẩm</button>
                    </div>
                  </div>
                </form>
                
                <div class="inner-addon left-addon">
                  <i class="glyphicon glyphicon-search"></i>      
                  <input id="searchInput3" class="form-control" name="search" placeholder="Tìm kiếm..."/>
                	</div>
          
          		<table class="table table-bordered tbsp">
                <thead>
              <tr class="active">
                    <th>Mã sản phẩm</th>
                    <th>Mã loại sản phẩm</th>
                    <th>Tên Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Thông tin sản phẩm</th>
                    <th>Số lượng còn</th>
                    <th>Ngày sản xuất</th>
                    <th>Tùy chỉnh</th>
                  </tr>
                </thead>
                <tbody id="tbsanpham">
                 <?php
						getsanpham();
				?>
                </tbody>
              </table>
          </div>
          <div id="hoadon" class="tab-pane fade">
          <form class="form-horizontal" role="form" method="post" action="">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="mahd">Mã hóa đơn:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="mahd" name="mahd" placeholder="Nhập mã hóa đơn" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="mmakh">Mã khách hàng:</label>
                    <div class="col-sm-10"> 
                           <select id="mmakh" name="mmakh" class="form-control"  required>
                          <?php
                           getmakhachhang();
                          ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="ghichu">Ghi chú:</label>
                    <div class="col-sm-10"> 
                      <textarea class="form-control" id="ghichu" name="ghichu" placeholder="Nhập ghi chú"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="ngaymua">Ngày mua:</label>
                    <div class="col-sm-10"> 
                      <input type="date" class="form-control" id="ngaymua" name="ngaymua" placeholder="Nhập ngày mua" required>
                    </div>
                  </div>
     
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary" name="themhd" id="themhd">Thêm hóa đơn</button>
                    </div>
                  </div>
                </form>
                <div class="inner-addon left-addon">
                  <i class="glyphicon glyphicon-search"></i>      
                  <input id="searchInput3" class="form-control" name="search" placeholder="Tìm kiếm..."/>
                	</div>
         		<table class="table table-bordered">
                <thead>
               <tr class="active">
                    <th>Mã hóa đơn</th>
                    <th>Mã khách hàng</th>
                    <th>Ghi chú</th>
                    <th>Ngày mua</th>
                    <th>Tùy chỉnh</th>
                  </tr>
                </thead>
                <tbody id="tbhoadon">
                <?php
						gethoadon();
					?>
                </tbody>
              </table>
          </div>
          <div id="chitiethoadon" class="tab-pane fade">
          
          <form class="form-horizontal" role="form" method="post" action="">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="mmahd">Mã hoá đơn:</label>
                    <div class="col-sm-10"> 
                           <select id="mmahd" name="mmahd" class="form-control"  required>
                          <?php
                           getmahoadon();
                          ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="mmasp">Mã sản phẩm:</label>
                    <div class="col-sm-10"> 
                           <select id="mmasp" name="mmasp" class="form-control"  required>
                          <?php
                           getmasanpham();
                          ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="soluong">Số lượng:</label>
                    <div class="col-sm-10"> 
                      <input type="number" class="form-control" id="soluong" name="soluong" placeholder="Nhập số lượng" required>
                    </div>
                  </div>
     
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary" name="themcthd" id="themcthd">Thêm chi tiết hóa đơn</button>
                    </div>
                  </div>
                </form>
          
          <div class="inner-addon left-addon">
                  <i class="glyphicon glyphicon-search"></i>      
                  <input id="searchInput4" class="form-control" name="search" placeholder="Tìm kiếm..."/>
                	</div>
         		<table class="table table-bordered">
                <thead>
               <tr class="active">
                    <th>Mã hóa đơn</th>
                    <th>Mã sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tùy chỉnh</th>
                  </tr>
                </thead>
                <tbody id="tbchitiethoadon">
                <?php
						getchitiethoadon();
					?>
                </tbody>
              </table>
          </div>
        </div>
        
        
        <div class="modal fade" id="capnhatkhachhang" role="dialog">
    	<div class="modal-dialog">
    	<form  class="form-horizontal" role="form" method="post" action="">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><b style="color:red">x</b></button>
              <h4 class="modal-title"><b style="color:#2196f3"><center>CẬP NHÂT KHÁCH HÀNG</center></b></h4>
            </div>
            <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="smakh">Mã khách hàng:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="smakh" name="smakh" placeholder="Nhập mã khách hàng" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="stenkh">Họ và tên:</label>
                    <div class="col-sm-10"> 
                      <input type="text" class="form-control" id="stenkh" name="stenkh" placeholder="Nhập tên khách hàng" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="sdiachi">Địa chỉ:</label>
                    <div class="col-sm-10"> 
                      <input type="text" class="form-control" id="sdiachi" name="sdiachi" placeholder="Nhập địa chỉ" required>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="semail">Email:</label>
                    <div class="col-sm-10"> 
                      <input type="email" class="form-control" id="semail" name="semail" placeholder="Nhập email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="ssodt">Số điện thoại:</label>
                    <div class="col-sm-10"> 
                      <input type="tel" class="form-control" id="ssodt" name="ssodt" placeholder="Nhập số điện thoại" required>
                    </div>
                  </div>
      
                        
            </div>
            <div class="modal-footer">
           
            	<button type="submit" class="btn btn-success" name="skh" id="skh">Cập nhật khách hàng</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
          </div>
           </form>
          
        </div>
      </div>
      
      
      <div class="modal fade" id="capnhatloaisanpham" role="dialog">
    	<div class="modal-dialog">
    	<form  class="form-horizontal" role="form" method="post" action="">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><b style="color:red">x</b></button>
              <h4 class="modal-title"><b style="color:#2196f3"><center>CẬP NHÂT LOẠI SẢN PHẨM</center></b></h4>
            </div>
            <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="smalsp">Mã loại sản phẩm:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="smalsp" name="smalsp" placeholder="Nhập mã loại sản phẩm"readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="stenlsp">Tên loại sản phẩm:</label>
                    <div class="col-sm-10"> 
                      <input type="text" class="form-control" id="stenlsp" name="stenlsp" placeholder="Nhập tên loại sản phẩm" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="smota">Mô tả:</label>
                    <div class="col-sm-10"> 
                      <textarea class="form-control" id="smota" name="smota" placeholder="Nhập mô tả" required></textarea>
                    </div>
                  </div>
      
                        
            </div>
            <div class="modal-footer">
            	<button type="submit" class="btn btn-success" name="slsp" id="slsp">Cập nhật loại sản phẩm</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
          </div>
           </form>
          
        </div>
      </div>
      
      
      
      <div class="modal fade" id="capnhatsanpham" role="dialog">
    	<div class="modal-dialog">
    	<form  class="form-horizontal" role="form" method="post" action="">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><b style="color:red">x</b></button>
              <h4 class="modal-title"><b style="color:#2196f3"><center>CẬP NHÂT SẢN PHẨM</center></b></h4>
            </div>
            <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="smasp">Mã sản phẩm:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="smasp" name="smasp" placeholder="Nhập mã sản phẩm" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="smmalsp">Mã loại sản phẩm:</label>
                    <div class="col-sm-10"> 	
                      <select id="smmalsp" name="smmalsp" class="form-control" required>
                      <?php
					   getmaloaisanpham();
                      ?>
                    </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="stensp">Tên sản phẩm:</label>
                    <div class="col-sm-10"> 
                      <input type="text" class="form-control" id="stensp" name="stensp" placeholder="Nhập tên sản phẩm" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="sdongia">Đơn giá:</label>
                    <div class="col-sm-10"> 
                      <input type="number" class="form-control" id="sdongia" name="sdongia" placeholder="Nhập đơn giá sản phẩm" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="stnsp">Thông tin sản phẩm:</label>
                    <div class="col-sm-10"> 
                      <textarea class="form-control" id="stnsp" name="stnsp" placeholder="Nhập thông tin sản phẩm" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="sslc">Số lượng còn:</label>
                    <div class="col-sm-10"> 
                      <input type="number" class="form-control" id="sslc" name="sslc" placeholder="Nhập số lượng sản phẩm còn" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="sngaysx">Ngày sản xuất:</label>
                    <div class="col-sm-10"> 
                      <input type="date" class="form-control" id="sngaysx" name="sngaysx" required>
                    </div>
                  </div>
         
      
                        
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="ssp" id="ssp">Cập nhật sản phẩm</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
            </div>
           </form>
          
        </div>
      </div>
      
      <div class="modal fade" id="capnhathoadon" role="dialog">
    	<div class="modal-dialog">
    	<form  class="form-horizontal" role="form" method="post" action="">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><b style="color:red">x</b></button>
              <h4 class="modal-title"><b style="color:#2196f3"><center>CẬP NHÂT HÓA ĐƠN</center></b></h4>
            </div>
            <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="smahd">Mã hóa đơn:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="smahd" name="smahd" placeholder="Nhập mã hóa đơn" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="smmakh">Mã khách hàng:</label>
                    <div class="col-sm-10"> 
                           <select id="smmakh" name="smmakh" class="form-control"  required>
                          <?php
                           getmakhachhang();
                          ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="sghichu">Ghi chú:</label>
                    <div class="col-sm-10"> 
                      <textarea class="form-control" id="sghichu" name="sghichu" placeholder="Nhập ghi chú"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="sngaymua">Ngày mua:</label>
                    <div class="col-sm-10"> 
                      <input type="date" class="form-control" id="sngaymua" name="sngaymua" placeholder="Nhập ngày mua" required>
                    </div>
                  </div>
                        
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="shd" id="shd">Cập nhật hóa đơn</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
            </div>
           </form>
          
        </div>
      </div>
      
      
      <div class="modal fade" id="capnhatchitiethoadon" role="dialog">
    	<div class="modal-dialog">
    	<form  class="form-horizontal" role="form" method="post" action="">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><b style="color:red">x</b></button>
              <h4 class="modal-title"><b style="color:#2196f3"><center>CẬP NHÂT CHI TIẾT HÓA ĐƠN</center></b></h4>
            </div>
            <div class="modal-body">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="smmahd">Mã hoá đơn:</label>
                    <div class="col-sm-10"> 
                           <select id="smmahd" name="smmahd" class="form-control">
                          <?php
                           getmahoadon();
                          ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="smmasp">Mã sản phẩm:</label>
                    <div class="col-sm-10"> 
                           <select id="smmasp" name="smmasp" class="form-control">
                          <?php
                           getmasanpham();
                          ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="ssoluong">Số lượng:</label>
                    <div class="col-sm-10"> 
                      <input type="number" class="form-control" id="ssoluong" name="ssoluong" placeholder="Nhập số lượng" required>
                    </div>
                  </div>
                        
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="scthd" id="scthd">Cập nhật chi tiết hóa đơn</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
            </div>
           </form>
          
        </div>
      </div>
        
        
    <script>
	$('.tbkh').filterForTable();



	$(".capnhatkh").click(function() {
    var $row = $(this).closest("tr");    
    var $cmakh = $row.find(".cmakh").text(); 
	var $ctenkh = $row.find(".ctenkh").text(); 
	var $cdiachi = $row.find(".cdiachi").text(); 
	var $cemail = $row.find(".cemail").text(); 
	var $csodienthoai = $row.find(".csodienthoai").text(); 
	$("#smakh").val($cmakh);
	$("#stenkh").val($ctenkh);
	$("#sdiachi").val($cdiachi);
	$("#semail").val($cemail);
	$("#ssodt").val($csodienthoai);
	});
	
	$(".capnhatlsp").click(function() {
    var $row = $(this).closest("tr");    
    var $cmaloaisp = $row.find(".cmaloaisp").text(); 
	var $ctenloaisp = $row.find(".ctenloaisp").text(); 
	var $cmota = $row.find(".cmota").text(); 
	$("#smalsp").val($cmaloaisp);
	$("#stenlsp").val($ctenloaisp);
	$("#smota").val($cmota);
	});
	
	$(".capnhatsp").click(function() {
    var $row = $(this).closest("tr");    
    var $cmasp = $row.find(".cmasp").text(); 
	var $cmmalsp = $row.find(".cmmalsp").text(); 
	var $ctensp = $row.find(".ctensp").text(); 
	var $cdongia = $row.find(".cdongia").text(); 
	var $ctnsp = $row.find(".ctnsp").text(); 
	var $cslc = $row.find(".cslc").text(); 
	var $cngaysx = $row.find(".cngaysx").text(); 
	$("#smasp").val($cmasp);
	$("#smmalsp").val($cmmalsp);
	$("#stensp").val($ctensp);
	$("#sdongia").val($cdongia);
	$("#stnsp").val($ctnsp);
	$("#sslc").val($cslc);
	$("#sngaysx").val($cngaysx);
	});
	
	$(".capnhathd").click(function() {
    var $row = $(this).closest("tr");    
    var $cmahd = $row.find(".cmahd").text(); 
	var $cmmakh = $row.find(".cmmakh").text(); 
	var $cghichu = $row.find(".cghichu").text(); 
	var $cngaymua = $row.find(".cngaymua").text(); 
	$("#smahd").val($cmahd);
	$("#smmakh").val($cmmakh);
	$("#sghichu").val($cghichu);
	$("#sngaymua").val($cngaymua);
	});
	
	$(".capnhatcthd").click(function() {
    var $row = $(this).closest("tr");    
    var $cmmahd = $row.find(".cmmahd").text(); 
	var $cmmasp = $row.find(".cmmasp").text(); 
	var $csoluong = $row.find(".csoluong").text(); 
	$("#smmahd").val($cmmahd);
	$("#smmasp").val($cmmasp);
	$("#ssoluong").val($csoluong);
	});
   </script>
    
    
</body>
</html>
