<?php 
$db=mysqli_connect("localhost","root","","jualbeli");
session_start();
//session_unset();
//session_destroy();
$id=$_GET['id'];
if (isset($_SESSION['keranjang'][$id])) {
  $_SESSION['keranjang'][$id]+=1;
} else {
  $_SESSION['keranjang'][$id]=1;
}

echo "
    <script>
    alert('DATA BERHASIL DISIMPAN')
    document.location.href='keranjang.php'
    </script>
    ";

 ?>
 