<?php
session_start();

if ( !isset($_SESSION['username']) ) {
    header('location:../login.php?errMsg=Silahkan Login Dahulu!'); 
}
else 
{ 
    $username = $_SESSION['username']; 
}

include '../../controllers/connect.php'; 

$promo_name = $_POST['promo_name'];
$promo_desc = $_POST['promo_desc'];
$merchant_name = $_POST['merchant_name'];
$promo_category = $_POST['promo_category'];
$promo_image = $_POST['promo_image'];
$errMsg ="";

$cekPromo = mysql_query("SELECT * FROM tbl_transaction_promo WHERE promo_name = '$promo_name'");

if ( mysql_num_rows($cekPromo) <> 0 ) 
{
   header('location:../insert_promo.php?errMsg=Promo sudah ada!');
} 
else 
{
    if ( !$promo_name || !$promo_desc || !$promo_category || !$merchant_name ) 
    { 
        header('location:../insert_promo.php?errMsg=Masih ada data kosong!');
    }
    elseif (!empty($_FILES['promo_image']['tmp_name'])) 
    {
        //lokasi file
        $folder = "../../Assets/img";
        //nama file
        $nama_file = $_FILES['promo_image']['name'];
        // Ukuran file
        $ukuran_file = $_FILES['promo_image']['size'];
        // simpan sebentar
        $tmp = $_FILES['promo_image']['tmp_name'];
        // Ekstensi file
        $ekstensi_file = $_FILES["promo_image"]["type"];
        //Ukuran file yang diperbolehkan ( 3 Mb )
        $ukuran = 30000;
        // Tujuan
        $lokasi = $folder."/".$nama_file;
        //header('location:../insert_coupon.php?errMsg=Masih ada data kosong!');

            // Cek ukuran file
            if(!$ukuran_file >= $ukuran)
            {
                // Cek ekstensi pada file
                if(!$ekstensi_file == "image/png" or !$ekstensi_file == "image/jpg" or !$ekstensi_file == "image/jpeg")
                {
                    echo "Ekstensi file hanya diperbolehkan png, jpg, jpeg, dan gif";
                }
            }
            else
            {
                echo "Ukuran file tidak bisa lebih dari 3 Mb.";
            }
            
            move_uploaded_file($tmp,$lokasi);
    }
    else 
    {
        

        $execute = mysql_query("INSERT INTO tbl_transaction_promo (promo_name,promo_description,merchant_name,promo_category,promo_image,lastUpdateBy,createdBy) VALUES('$promo_name','$promo_desc','$merchant_name','$promo_category','$promo_image','$username','$username')");


        if ($execute) 
        {
            echo "<script>alert('Berhasil Menambah Promo!');
            window.location='../list_promo.php';</script>";
        }
        else 
        {
            echo 'Proses Gagal!';
        }
    }
}
?>