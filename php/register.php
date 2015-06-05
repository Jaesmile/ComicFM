<?php

session_start();

if (isset($_POST["submit"]) && $_POST["submit"] == "注册")
{

   $name = $_POST["nickname"];
   $email = $_POST["username"];
   $pwd = $_POST["password"];
   $pwdcheck = $_POST["checkpwd"];

   if ($name == "" || $email == "" || $pwd == "" || $pwdcheck == "")
   {
     //{$nameErr = "Name is required";}
     echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
   }
   else if (!preg_match("/^[a-zA-Z ]*$/",$name))
   {
      echo "<script>alert('用户名只能为大小写字母和空格！'); history.go(-1);</script>";
           //$nameErr = "Only letters and white space allowed";
   }
   else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
   {
       echo "<script>alert('email格式不正确！'); history.go(-1);</script>";
           //$emailErr = "Invalid email format";
   }
   else
   {
     if($pwd == $pwdcheck)
     {
        $connect = mysql_connect("127.0.0.1","root","123456");
        if(!$connect)
        {
            die("Connection fail.");
        }
        $database = "db_comicfm";

        mysql_select_db($database,$connect);
        mysql_query("SET NAMES 'utf8'",$connect);

        $sql_getuser = "SELECT nickname FROM user WHERE nickname = '$_POST[nickname]'";
        $result_user = mysql_query($sql_getuser);
        $count = mysql_num_rows($result_user);
        if($count != 0) //当前用户名已存在
        {
            echo "<script>alert('当前用户名已存在！'); history.go(-1);</script>";
        }
        else
        {
            $sql_getcount = "SELECT email FROM user WHERE email = '$_POST[username]'";
            $result_count = mysql_query($sql_getcount);
            $num = mysql_num_rows($result_count);
            if($num != 0) //当前邮箱已被注册
            {
                echo "<script>alert('当前邮箱已被注册！'); history.go(-1);</script>";
            }
            else
            {
                $sql_insert = "INSERT INTO user (nickname, email, password) VALUES ('$_POST[nickname]', '$_POST[username]', '$_POST[password]')";
                $result_insert = mysql_query($sql_insert);
                if($result_insert)
                {
                    echo "<script>alert('注册成功！'); history.go(-1);</script>";
                    header('Location: ../ComicFan_login.php');
                }
                else
                {
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
                }
            }
        }
     }
     else
     {
        echo "<script>alert('两次密码输入不一致！'); history.go(-1);</script>";
     }
   }
}
    //header("Location: $_SERVER[HTTP_REFERER]");
?>