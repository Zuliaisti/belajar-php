<?php

$nama = "Zulia";

echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;

//perulangan 

$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
}


$no = 10;
$i = 0;

while ($i < $no) {
     $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}


//MASIH EROR!
/*
$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/




//data , MASIH EROR

$data = array('Asus', 'Lenovo', 'Hp', 'Acer', 'Apple', 'Dell');

$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}


//echo $data[5];


foreach($data as $value) {
    echo $value."<br>";}


//Percabangan , eror in line 72
/*
if ($nama == "Zulia"){
    echo $nama. "adalah orang wonosobo";
} else if ($nama == "Bagas") {
    echo $nama. "berasal dari kediri";
} else {
    echo $nama. "dari mana ya?"
} */


switch($nama){
    case "Zulia":
        $pesan = $nama. "adalah orang wonosobo";
    break;
    case "Bagas" :
        $pesan = $nama. "berasal dari kediri" ;
    break;
    default:
        $pesan = $nama. "dari mana ya?";
    }

echo $pesan;

?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Zulia":
                    $pesan = $_POST['nama']." adalah orang wonosobo";
                break;
                case "Bagas":
                    $pesan = $_POST['nama']." berasal dari kediri";
                break;
                default:
                    $pesan = $_POST['nama']." dari mana ya?";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah.";
        }
    ?>
</body>
</html>