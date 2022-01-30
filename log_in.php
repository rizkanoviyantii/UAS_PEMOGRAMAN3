<?php
    session_start();
    include "koneksi.php";
?>

<html>
<head>
<title>Silahkan Login terlebih dahulu</title>
</head>
<body> 
    <form method="post" align="center">
         
    <label> Nama Pengguna </label><input type="text" name="user" placeholder="masukan username"><br><br>        
        <label> Kata Sandi </label><input type="password" name="pass" placeholder="hati - hati passwordnya"> <br><br>
        <label>Pilih:</label>
            <select name="level">
                <option value="admin">Admin</option>
                <option value="user">Pengguna</option>
            </select>
            <br><br>
        <input type="submit" name="login" value="login"/><br>
</form>
<?php
    if (isset($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $data_user = mysqli_query ($koneksi,"SELECT * FROM user WHERE username='$user' AND password=md5('$pass')");
        $r = mysqli_fetch_array($data_user);
        $username=$r['username'];
        $password=$r['password'];
        $level=$r['level'];

        if ($user==$username && $pass=$password){
            $_SESSION['level']=$level;
            header ("location:awal.php");
            exit;
        }
        else{
            echo "salah nih masukin datanya";
        }
    }
?>
</body>
</html>
