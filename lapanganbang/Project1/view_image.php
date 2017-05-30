<?php
include 'koneksi.php';
if(empty($_SESSION['id_user'])) {
    header("location:login.php");
} else if($_SESSION['id_user']){
    $id_user = $_SESSION['id_user'];
}

$sql= "SELECT gambar from lapangan where id_user=$id_user";
$folder = "image/gambar_lapangan"; //folder tempat gambar disimpan  
$handle = opendir($folder);  
echo '<table cellspacing="2" cellpadding="5">';  
echo '<tr>';  
$i = 1;  
if(false !== ($file = readdir($sql))){  
    if($file != '.' && $file != '..'){  
        echo '<td style="border:1px solid #000000;" align="center">  
            <img src="$file" width="500" /> 
        </td>';  
        if(($i % 4) == 0){  
            echo '</tr><tr>';  
        }  
        $i++;  
    }  
}  
echo '</tr>';  
echo '</table>';  
?>  

<?php
include 'koneksi.php';
if(empty($_SESSION['id_user'])) {
    header("location:login.php");
} else if($_SESSION['id_user']){
    $id_user = $_SESSION['id_user'];
}

//$sql= "SELECT gambar from lapangan where id_user = '$id_user'" ;
$folder = "image/gambar_lapangan"; //folder tempat gambar disimpan  
$handle = opendir($folder);  
echo '<table cellspacing="2" cellpadding="5">';  
  
$i = 1;  
while(false !== ($file = readdir($handle))){  
    if($file != '.' && $file != '..'){  
        echo '<td style="border:1px solid #000000;" align="center">  
            <img src="image/gambar_lapangan/]'.$file.'" width="500" /> 
        </td>';  
        if(($i % 4) == 0){  
            echo '</tr><tr>';  
        }  
        $i++;  
    }  
}  
echo '</tr>';  
echo '</table>';  
?>  