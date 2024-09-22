<?php
if(!empty($_POST['mantap']))
{
    print_r($_POST);
}

$warna ='merah';
$ukuran = "L" ;
$biaya = rand(50000,100000);
$biayaTambahan = 15000;
$totalTambahan = $biaya + $biayaTambahan;

echo ($warna == 'merah' && $ukuran == 'XL')?
   "dikenakan biaya tambahan maka bayaran anda yaitu ". $totalTambahan : 
   "total yg harus anda bayarkan yaitu $biaya";

   $hewan = 'Kuda';
   switch($hewan){
       case 'Kuda':
         echo 'Kuda dipilih.';
         break;
       case 'Kucing':
         echo 'Kucing dipilih.';
         break;
      
       default:
         echo 'Tidak ada pilihan';
   }
$nomor = 10;
   for($i = 0;$i <= $nomor; $i++){
    echo $i;
   }

$mobilku = ['bmw','porsche','mercedes','lamborghini','ferrari','mazda','toyota','lexus','ferrari','mazda','lamborghini','lamborghini'];
$jumlahMobil = 0;
$i = 1;

//do{
 // if($mobilku[$i] == "lamborghini"){
  //  $jumlahMobil++;
  //}
  //$i++;
//}
//while($i < 12);


foreach ($mobilku as $index => $nilai) {
  if($nilai == "ferrari"){
  continue;
  }
  echo "jumlah kendaraan  $nilai berada di baris $index <br>";
}




//for($i = 0;$i < 12; $i++){
  //if($mobilku[$i] == 'porsche'){
   // $jumlahMobil++;
 // }
//}

$karyawan =
[
  ['nama'=>'Naufal','alamat'=>'Bandung','jenis_kelamin'=>'Pria'],
  ['nama'=>'Winda','alamat'=>'Surabaya','jenis_kelamin'=>'Wanita'],
  ['nama'=>'Abyasa','alamat'=>'Bandung','jenis_kelamin'=>'Pria']
];


$a = 0;
for($i=1;$i<=20;$i++){
    if($i%4==0){
        $a = $a+1;
    }   
}
echo $a;


function namaOrang ($karyawan){
  foreach ($karyawan as $key => $value) {
    echo "karyawan saya yaitu " .$value['nama']."<br>";
  }

}
echo namaOrang($karyawan);


$namaSaya = "kevin";

function namatest (&$namaSaya){
  $namaSaya = "jamal";
  return $namaSaya;
}

echo $namaSaya;
namatest($namaSaya);
echo namatest($namaSaya);
echo namatest($namaSaya);



$nilai = 60;
if ($nilai > 60)
    echo 'Lulus';
else
    echo 'Tidak Lulus';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form action="" method="post">
Nama: <input type="text" name="nama">
<br><br>
Alamat: <textarea name="alamat" rows="8" col="200"></textarea>
<br><br>
Program Studi :
<select name="program_studi">
  <option value="SI">Sistem Informasi</option>
  <option value="TI">Teknik Informatika</option>
  <option value="MI">Manajemen Informatika</option>
</select>
<br><br>
<input type="submit" name="mantap" value="submit">
</form>


<br>
<br>
<table border="1">
  <tr>
    <th>Jenis Kelamin</th>
    <th>Nama </th>
    <th>Alamat</th>
  </tr>
  <?php foreach ($karyawan as $key => $value) { ?>
  <tr>
    <td><?php echo $value['jenis_kelamin']; ?></td>
    <td><?php echo $value['nama']; ?></td>
    <td><?php echo $value['alamat']; ?></td>
  </tr>






  
  <?php } ?>
</table>



</body>
</html>

