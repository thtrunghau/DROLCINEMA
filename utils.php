<?php

    session_start();
 $_SESSION['test'] = "Test Sesion";
function getPOST($key)
{

    if (isset($_POST[$key])) {
        $result = $_POST[$key];
    } else {
        $result = '';
    }
    return $result;
}

function connectData()
{
    $conn = mysqli_connect("localhost", "root", "", "doan_database");
    mysqli_set_charset($conn, 'utf8');
    return $conn;
}

function checkAccountLogin($user, $pass)
{
    $data =  selectData($user,'taikhoan', 'email');
    
    if ($data == null) {
        return false;
    } else {
        if ($data['matKhau'] == $pass) {
            header('location: ./SourceCode/DROLCINEMA');
            return true;
        } else {
            return false;
        }
    }
}

function getData($statement, $getData)
{

    $conn = connectData();
    $data = "";

    $query = mysqli_query($conn, $statement);
    if ($getData == 1) {
        $data = mysqli_fetch_array($query, MYSQLI_ASSOC);
    }
    mysqli_close($conn);
    return $data;
}

function getAllData($statement, $getData)
{
    $result = [];
    $conn = connectData();
    $data = "";

    $query = mysqli_query($conn, $statement);
    
    while ($row = mysqli_fetch_assoc($query)) {
        array_push($result,$row);
    }
    
    mysqli_close($conn);
    return $result;
}

function selectData($user, $table, $id,)
{
    $statement = "SELECT * FROM $table WHERE $id = '$user'";
    return getData($statement, 1);
}

function addData($table, $key, $values)
{
    $statement  = "INSERT INTO $table ($key) VALUES ($values)";
    getData($statement, 0);
}

function updateData($table, $values, $user)
{
    $statement  = "UPDATE $table SET " . $values . " WHERE email = '$user'";
    getData($statement, 0);
}

function checkAccountRegis($user)
{

    $data =  selectData($user, 'taikhoan', 'email');
    if ($data == "") {
        return true;
    }

    return false;
}


if (isset($_POST['register'])) {
    $announce = register();
}

function register(){

$email = getPOST('email');

$pass = getPOST('password');
$name = getPOST('name');
$sdt = getPOST('phone');
echo $pass;
$values = "'$name','$email','$pass','$sdt',0";
$valuedefault = "'$email'";


if (checkAccountRegis($email)) {
    addData('taikhoan','ten,email,matKhau,sdt,admin', $values);

    return "You have successfully registered.<br/> Please login.";
}
return  "The account has been created.";
}

if (isset($_POST['login'])) {
    $announce = login();
}


function checkAdminAccount($email){

    $statement =  "SELECT admin FROM taikhoan WHERE email = '$email'";
    $data =  getData($statement, 1);

    if ($data['admin'] == 1){
        return true; 
    }

    return false;
}

function login()
{
    $email = getPOST('email');
    $pass = getPOST('password');

    if (checkAccountLogin($email, $pass)) {

        $statement = "SELECT ten FROM taikhoan WHERE email = '$email'";
        $data =  getData($statement,1);
        $_SESSION['username'] = $data;
        $_SESSION['email-user'] = $email;
        if (checkAdminAccount($email)){
            $_SESSION['admin'] = true;
            header('location: admin.php');
        }
        else{
            $_SESSION['admin'] = false;
            header('location: index.php');
        }
        return "";
    }
    return "Email or Password is incorrect.";
}
if (isset($_POST['login'])) {
    $announce = login();
}