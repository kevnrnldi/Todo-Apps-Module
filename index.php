<?php echo "<p>Halo</p>";


$nama = "Yuri";
$domisili = "Jakarta";
$umur = 24;


$a = rand(10,100);

$b = 3;
 $c = $a / $b;
 $c -= 2;
 $d = $a != $b;
 echo var_dump($d) . '<br>' ;
 echo  round($c, 2) ;

echo " ". $nama . "," . $domisili;

 $a = 2.2;
var_dump($a);

$array = [123,121,122,124];
echo $array[10] ?? "Error REKKK";

$namaKu = $_GET["nama"];
$alamat = $_GET['alamatku'];



$nilai = rand(10,100);
$tugas = "tidak kumpul";

if($nilai >= 50){
    if($tugas == "kumpul" ){
        echo $nilai + 50;
    }else{
        echo "anda tidak mengumpulkan tugas maka nilai anda : $nilai";
    }    
}else{
    echo "anda gagal";
}






?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GET</h1>
    <form >
        <input type="text" name="nama" id="">
        <input type="text" name="alamatku" id="">
        <input type="submit" name="" id="">
    </form>
    <div> 
        <p>Halo saya <?php echo $namaKu  ?> tinggal di <?php echo $alamat ?> dan saya sekarang sudah berumur <?php echo $umur ?> </p>
    </div>
    <h1>POST</h1>
    <form action="post.php" method="post">
       <input type="number" name="car">
        <input type="number" name="cat">
        <input type="submit" value="submit">
    </form>
</body>
</html>