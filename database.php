<?php
 	function getkhachhang() {
		require "connect.php";
    	$sql = "SELECT MaKH, TenKH, DiaChi, Email, SoDienThoai FROM khachhang";
		$result = $conn->query($sql);
						
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
								echo '<tr><td class="cmakh">' . $row["MaKH"].'</td><td class="ctenkh">'.$row["TenKH"].'</td><td class="cdiachi">'.$row["DiaChi"].'</td><td class="cemail">'.$row["Email"].'</td><td class="csodienthoai">'.$row["SoDienThoai"].'</td>';	
								echo '<td><button id="'. $row["MaKH"].'" type="button" class="btn btn-success capnhatkh" onclick="" data-toggle="modal" data-target="#capnhatkhachhang">Cập nhật</button> <a class="btn btn-danger" href="get.php?id='. $row["MaKH"].'">Xóa</a></td></tr>';		
							
							}
							
							} 
		else {
			echo '';
		}
		
		$conn->close();
	}
	
	
	function getloaisanpham() {
		require "connect.php";
		$sql = "SELECT MaLoaiSP, TenLoaiSP, ThongTinLoaiSP FROM loaisanpham";
		$result = $conn->query($sql);
						
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo '<tr><td class="cmaloaisp">' . $row["MaLoaiSP"].'</td><td class="ctenloaisp">'.$row["TenLoaiSP"].'</td><td class="cmota">'.$row["ThongTinLoaiSP"].'</td>';
			echo '<td><button id="'. $row["MaLoaiSP"].'" type="button" class="btn btn-success capnhatlsp" onclick="" data-toggle="modal" data-target="#capnhatloaisanpham">Cập nhật</button> <a class="btn btn-danger" href="get.php?id='. $row["MaLoaiSP"].'">Xóa</a></td></tr>';	
							}
		} else {
		echo '';
		}
		$conn->close();
	
	}
	
	function getmaloaisanpham() {
		require "connect.php";
		$sql = "SELECT MaLoaiSP FROM loaisanpham";
		$result = $conn->query($sql);
						
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo '<option value="'. $row["MaLoaiSP"].'">'. $row["MaLoaiSP"].'</option>';
							}
		} else {
		echo '';
		}
		$conn->close();
	
	}
	
	function getmasanpham() {
		require "connect.php";
		$sql = "SELECT MaSP FROM sanpham";
		$result = $conn->query($sql);
						
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo '<option value="'. $row["MaSP"].'">'. $row["MaSP"].'</option>';
							}
		} else {
		echo '';
		}
		$conn->close();
	
	}
	
	function getmakhachhang() {
		require "connect.php";
		$sql = "SELECT MaKH FROM khachhang";
		$result = $conn->query($sql);
						
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo '<option value="'. $row["MaKH"].'">'. $row["MaKH"].'</option>';
							}
		} else {
		echo '';
		}
		$conn->close();
	
	}
	
	function getmahoadon() {
		require "connect.php";
		$sql = "SELECT MaHD FROM hoadon";
		$result = $conn->query($sql);
						
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo '<option value="'. $row["MaHD"].'">'. $row["MaHD"].'</option>';
							}
		} else {
		echo '';
		}
		$conn->close();
	
	}
	
	
	function getsanpham() {
		require "connect.php";
		$sql = "SELECT MaSP, LoaiSanPham_MaLoaiSP, TenSP, DonGia, ThongTinSP, SoLuongCon, NgaySX FROM sanpham";
		$result = $conn->query($sql);			
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
								echo '<tr><td class="cmasp">' . $row["MaSP"].'</td><td class="cmmalsp">'.$row["LoaiSanPham_MaLoaiSP"].'</td><td class="ctensp">'.$row["TenSP"].'</td><td class="cdongia">'.$row["DonGia"].'</td><td class="ctnsp">'.$row["ThongTinSP"].'</td><td class="cslc">'.$row["SoLuongCon"].'</td><td class="cngaysx">'.$row["NgaySX"].'</td>';
								echo '<td><button id="'. $row["MaSP"].'" type="button" class="btn btn-success capnhatsp" onclick="" data-toggle="modal" data-target="#capnhatsanpham">Cập nhật</button> <a class="btn btn-danger" href="get.php?id='. $row["MaSP"].'">Xóa</a></td></tr>';	
							}
		} else {
		}
		$conn->close();
	}
	
	function gethoadon() {
		require "connect.php";
		$sql = "SELECT MaHD, KhachHang_MaKH,GhiChu, NgayMua FROM hoadon";
		$result = $conn->query($sql);
						
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo '<tr><td class="cmahd">' . $row["MaHD"].'</td><td class="cmmakh">'.$row["KhachHang_MaKH"].'</td><td class="cghichu">'.$row["GhiChu"].'</td><td class="cngaymua">'.$row["NgayMua"].'</td>';
			echo '<td><button id="'. $row["MaHD"].'" type="button" class="btn btn-success capnhathd" onclick="" data-toggle="modal" data-target="#capnhathoadon">Cập nhật</button> <a class="btn btn-danger" href="get.php?id='. $row["MaHD"].'">Xóa</a></td></tr>';	
							}
		} else {
		}
		$conn->close();
	}
	
	function getchitiethoadon() {
		require "connect.php";
		$sql = "SELECT HoaDon_MaHD, SanPham_MaSP, SoLuong FROM chitiethoadon";
		$result = $conn->query($sql);
						
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo '<tr><td class="cmmahd">' . $row["HoaDon_MaHD"].'</td><td class="cmmasp">'.$row["SanPham_MaSP"].'</td><td class="csoluong">'.$row["SoLuong"].'</td>';
		echo '<td><button id="'. $row["HoaDon_MaHD"].'" type="button" class="btn btn-success capnhatcthd" onclick="" data-toggle="modal" data-target="#capnhatchitiethoadon">Cập nhật</button> <a class="btn btn-danger" href="get.php?id='. $row["HoaDon_MaHD"].'">Xóa</a></td></tr>';	
							}
		} else {
		}
		$conn->close();
	}
	
	
	function deletekhachhang($id){
		require "connect.php";
		$sql = "DELETE FROM khachhang WHERE MaKH='$id'";
		if ($conn->query($sql) === TRUE) {
						header("Location:index.php");
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					
	}
	function deleteloaisanpham($id){
		require "connect.php";
		$sql = "DELETE FROM loaisanpham WHERE MaLoaiSP='$id'";
		if ($conn->query($sql) === TRUE) {
						header("Location:index.php");
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					
	}
	function deletesanpham($id){
		require "connect.php";
		$sql = "DELETE FROM sanpham WHERE MaSP='$id'";
		if ($conn->query($sql) === TRUE) {
						header("Location:index.php");
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					
	}
	function deletehoadon($id){
		require "connect.php";
		$sql = "DELETE FROM hoadon WHERE MaHD='$id'";
		if ($conn->query($sql) === TRUE) {
						header("Location:index.php");
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					
	}
	function deletechitiethoadon($id){
		require "connect.php";
		$sql = "DELETE FROM chitiethoadon WHERE HoaDon_MaHD='$id'";
		if ($conn->query($sql) === TRUE) {
						header("Location:index.php");
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					
	}
	
	

	
		
					if(isset($_POST["themkh"])){
						$makh = $_POST["makh"];
						$tenkh = $_POST["tenkh"];
						$diachi = $_POST["diachi"];
						$sodt = $_POST["sodt"];
						$email = $_POST["email"];
					
					$sql = "INSERT INTO khachhang(MaKH, TenKH, DiaChi, SoDienThoai, Email)
					VALUES ('$makh', '$tenkh', '$diachi','$sodt', '$email')";
					if ($conn->query($sql) === TRUE) {
						echo '<script language="javascript">alert("Thêm thành công")</script>';
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					}
					
					
					if(isset($_POST["skh"])){
						$makh = $_POST["smakh"];
						$tenkh = $_POST["stenkh"];
						$diachi = $_POST["sdiachi"];
						$sodt = $_POST["ssodt"];
						$email = $_POST["semail"];
						
						if ($makh === "") {
						echo '<script language="javascript">alert("Vui lòng nhập vào mã khách hàng")</script>';
						}else{

					
					$sql = "UPDATE khachhang SET TenKH='$tenkh',DiaChi='$diachi',SoDienThoai='$sodt',Email='$email'  WHERE MaKH='$makh'";
					if ($conn->query($sql) === TRUE) {
						echo '<script language="javascript">alert("Sửa thành công")</script>';
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					}	
					}
					
					if(isset($_POST["themlsp"])){
						$malsp = $_POST["malsp"];
						$tenlsp = $_POST["tenlsp"];
						$mota = $_POST["mota"];
					
					$sql = "INSERT INTO loaisanpham(MaLoaiSP, TenLoaiSP, ThongTinLoaiSP)
					VALUES ('$malsp', '$tenlsp', '$mota')";
					if ($conn->query($sql) === TRUE) {
						echo '<script language="javascript">alert("Thêm thành công")</script>';
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					}	
					
					if(isset($_POST["slsp"])){
						$smalsp = $_POST["smalsp"];
						$stenlsp = $_POST["stenlsp"];
						$smota = $_POST["smota"];
	
					$sql = "UPDATE loaisanpham SET TenLoaiSP='$stenlsp',ThongTinLoaiSP='$smota' WHERE MaLoaiSP='$smalsp'";
					if ($conn->query($sql) === TRUE) {
						echo '<script language="javascript">alert("Cập nhật thành công")</script>';
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					}	
					
					
					if(isset($_POST["themsp"])){
						$masp = $_POST["masp"];
						$mmalsp = $_POST["mmalsp"];
						$tensp = $_POST["tensp"];
						$dongia = $_POST["dongia"];
						$tnsp = $_POST["tnsp"];
						$slc = $_POST["slc"];
						$ngaysx = $_POST["ngaysx"];
					
					$sql = 
					"INSERT INTO sanpham (MaSP, LoaiSanPham_MaLoaiSP, TenSP, DonGia, ThongTinSP, SoLuongCon, NgaySX) VALUES ('$masp', '$mmalsp', '$tensp', '$dongia', '$tnsp', '$slc', '$ngaysx')";
					if ($conn->query($sql) === TRUE) {
						echo '<script language="javascript">alert("Thêm thành công")</script>';
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					}	
					
					
					if(isset($_POST["ssp"])){
						$masp = $_POST["smasp"];
						$mmalsp = $_POST["smmalsp"];
						$tensp = $_POST["stensp"];
						$dongia = $_POST["sdongia"];
						$tnsp = $_POST["stnsp"];
						$slc = $_POST["sslc"];
						$ngaysx = $_POST["sngaysx"];
	
					$sql = "UPDATE sanpham SET LoaiSanPham_MaLoaiSP='$mmalsp',TenSP='$tensp',DonGia='$dongia',ThongTinSP='$tnsp',SoLuongCon='$slc',NgaySX='$ngaysx' WHERE MaSP='$masp'";
					if ($conn->query($sql) === TRUE) {
						echo '<script language="javascript">alert("Cập nhật thành công")</script>';
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					}	
					
					
					if(isset($_POST["themhd"])){
						$mahd = $_POST["mahd"];
						$mmakh = $_POST["mmakh"];
						$ngaymua = $_POST["ngaymua"];
						$ghichu = $_POST["ghichu"];
					
					$sql = 
					"INSERT INTO hoadon (MaHD, KhachHang_MaKH, GhiChu, NgayMua) VALUES ('$mahd', '$mmakh', '$ghichu', '$ngaymua')";
					if ($conn->query($sql) === TRUE) {
						echo '<script language="javascript">alert("Thêm thành công")</script>';
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					}	
					
					if(isset($_POST["shd"])){
						$mahd = $_POST["smahd"];
						$mmakh = $_POST["smmakh"];
						$ngaymua = $_POST["sngaymua"];
						$ghichu = $_POST["sghichu"];
	
					$sql = "UPDATE hoadon SET KhachHang_MaKH='$mmakh',GhiChu='$ghichu',NgayMua='$ngaymua' WHERE MaHD='$mahd'";
					if ($conn->query($sql) === TRUE) {
						echo '<script language="javascript">alert("Cập nhật thành công")</script>';
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					}	
					
					
					
					if(isset($_POST["themcthd"])){
						$mmahd = $_POST["mmahd"];
						$mmasp = $_POST["mmasp"];
						$soluong = $_POST["soluong"];
					
					$sql = 
					"INSERT INTO chitiethoadon (HoaDon_MaHD, SanPham_MaSP, SoLuong) VALUES ('$mmahd', '$mmasp', '$soluong')";
					if ($conn->query($sql) === TRUE) {
						echo '<script language="javascript">alert("Thêm thành công")</script>';
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					}	
					
					if(isset($_POST["scthd"])){
						$mmahd = $_POST["smmahd"];
						$mmasp = $_POST["smmasp"];
						$soluong = $_POST["ssoluong"];
	
					$sql = "UPDATE chitiethoadon SET SoLuong='$soluong' WHERE HoaDon_MaHD='$mmahd' AND SanPham_MaSP='$mmasp'";
					if ($conn->query($sql) === TRUE) {
						echo '<script language="javascript">alert("Cập nhật thành công")</script>';
					} else {
						echo '<script language="javascript">alert("Đã có lỗi xãy ra")</script>';
					}
					
					$conn->close();
					}	
												
		
	
?>