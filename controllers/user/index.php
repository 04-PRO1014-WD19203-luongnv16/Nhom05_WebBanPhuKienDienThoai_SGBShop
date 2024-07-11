<?php
session_start();
ob_start();
include "../../views/user/header.php";
include "../../models/pdo.php";
include "../../models/taikhoan.php";
include "../../models/admin/danhmuc.php";
$loidn = [];
$loidk = [];
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "taikhoan":
            include "../../views/user/taikhoan.php";
            break;
        case "dangnhap":
            if (isset($_POST["dangnhap"])) {
                $tendn = $_POST["tendn"];
                $matkhau = $_POST["matkhaudn"];
                if (empty($tendn)) {
                    $loidn["tendn"] = "Không được để trống trường này";
                }
                if (empty($matkhau)) {
                    $loidn["matkhaudn"] = "Không được để trống trường này";
                }
                if (empty($loidn)) {
                    $taikhoan  = checkuser($tendn, $matkhau);
                    if (empty($taikhoan)) {
                        $loidn["saitt"] = "Thông tin tài khoản hoặc mật khẩu không chính xác";
                        include "../../views/user/taikhoan.php";
                    } else {
                        $vaitro = $taikhoan[0]["vaitro"];
                        if ($vaitro != 1) {
                            $_SESSION["user"] = $taikhoan;
                            header("Location: index.php");
                            include "../../views/user/trangchu.php";
                        } else {
                            $_SESSION["admin"] = $taikhoan;
                            header("Location: index.php");
                            include "../../views/admin/danhmuc/them.php";
                        }
                    }
                } else {
                    include "../../views/user/taikhoan.php";
                }
            }
            break;
        case "dangky":
            if (isset($_POST["dangky"])) {
                $tennd = $_POST["tennguoidungdk"];
                $tendndk = $_POST["tendangnhapdk"];
                $matkhaudk = $_POST["matkhaudk"];
                $matkhaunl = $_POST["matkhaunhaplai"];
                if (empty($tennd)) {
                    $loidk["tennd"] = "Không được để trống trường này";
                }
                if (empty($tendndk)) {
                    $loidk["tendndk"] = "Không được để trống trường này";
                }
                if (empty($matkhaudk)) {
                    $loidk["matkhaudk"] = "Không được để trống trường này";
                } elseif (strlen($matkhaudk) < 8) {
                    $loidk["dodaimkdk"] = "Mật khẩu tối thiểu 8 ký tự";
                }
                if (empty($matkhaunl)) {
                    $loidk["matkhaunl"] = "Không được để trống trường này";
                } else if ($matkhaudk != $matkhaunl) {
                    $loidk["nlsai"] = "Xác nhận mật khẩu thất bại";
                }
                if (!empty($loidk)) {
                    include "../../views/user/taikhoan.php";
                } else {
                    $count = taikhoantontai($tendndk);
                    if (!empty($count)) {
                        $loidk["tentontai"] = "Tên đăng nhập đã được sử dụng";
                    } else {
                        dangky($tennd, $tendndk, $matkhaudk);
                        $message = "Đăng ký thành công,đăng nhập để sử dụng";
                    }
                    include "../../views/user/taikhoan.php";
                }
            }
        case "dangxuat":
            if (isset($_SESSION["user"])) {
                unset($_SESSION["user"]);
                header("Location: index.php");
                include "../../views/user/trangchu.php";
            } else if (isset($_SESSION["admin"])) {
                unset($_SESSION["admin"]);
                header("Location: index.php");
                include "../../views/user/trangchu.php";
            }
            break;
        case "trangchu":
            include "../../views/user/trangchu.php";
            break;
            // ====================
            // QUẢN LÝ DANH MỤC
            // ====================
        case "qldanhmuc":
            if (isset($_SESSION["admin"])) {
                include "../../views/admin/danhmuc/them.php";
            }
            break;
        case "themdm":
            if (isset($_POST["themdm"])) {
                $tendm = $_POST["tendm"];
                $bieutuong = $_POST["icondm"];
                //chỉ có nhập đúng
                themdm($tendm, $bieutuong);
                $themok = "Thêm danh mục thành công";
            }
            include "../../views/admin/danhmuc/them.php";
            break;
        case "danhsachdm":
            $danhsach = danhsachdm();
            include "../../views/admin/danhmuc/danhsach.php";
            break;
        case "suadm":
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $danhmuc = suadm($id);
            }
            include "../../views/admin/danhmuc/sua.php";
            break;
        case "capnhat":
            if (isset($_POST["capnhatdm"])) {
                $id = $_POST["madm"];
                $tendm = $_POST["tendm"];
                $bieutuong = $_POST["icondm"];
                capnhatdm($id, $tendm, $bieutuong);
            }
            $danhsach = danhsachdm();
            include "../../views/admin/danhmuc/danhsach.php";
            break;
        case "xoadm":
            if(isset($_GET["id"])){
                $id=$_GET["id"];
                xoadm($id);
            }
            $danhsach = danhsachdm();
            include "../../views/admin/danhmuc/danhsach.php";
            break;
    }
} else {
    include "../../views/user/trangchu.php";
}
include "../../views/user/footer.php";
