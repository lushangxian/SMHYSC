
<?php
include "conn.php";
//检测用户名(手机号)是否重名
if (isset($_POST['name'])) {
    $user = $_POST['name']; 
    $result = $conn->query("select * from registry where username='$user'");
    if ($result->fetch_assoc()) { //存在
        echo true; //1
    } else {
        echo false; //空
    }
}

// //接收前端表单提交的数据
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];
    $email = $_POST['email'];
    $shoujihao=$_POST['shoujihao'];
    $yanzhengma=$_POST['yanzhengma'];
    $conn->query("insert registry values(null,'$username','$password','$repass','$email','$shoujihao','$yanzhengma',NOW())");
    header('location:http://localhost/JS2002/SMHYSC/dist/html/login.html');
}

