<?php
require_once('../utils.php');

if(isset($_POST['deleteRow']))
{
 $rowNo=$_POST['rowID'];
 $table = $_POST['table'];
 $id = $_POST['id'];
 $statement = "DELETE FROM $table WHERE $id='$rowNo'";
$data =  getData($statement,0);
 echo "success";
 exit();
}

// if (isset($_POST['updateRowAccount'])) {
//     $email = getPOST('email');
//     $matKhau = getPOST('matKhau');
//     $ten = getPOST('ten');
//     $sdt = getPOST('sdt');
//     $admin = getPOST('admin');
//     $value="";
//     if ($matKhau != "") {
//         $value+= "matKhau = '$matKhau'";
//     }
//     if ($ten != "") {
//         $value+= "ten = '$ten'";
//     }
//     if ($admin != "") {
//         $value+= "admin = '$admin'";
//     }
//     if ($sdt != "") {
//         $value+= "sdt = '$sdt'";
//     }
//     echo "success";
//     updateData('taikhoan','',"'$email'");
//     exit();
// }
?>