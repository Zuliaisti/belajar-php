<?php


if (isset($_GET['p'])) {
    
} 

    if ($_GET['P'] == 'tampil'){ //standar 

        echo $_POST['nama'];
        echo "<br/>";
        echo $_POST['password'];

    }else if ($_GET['P'] == "pesan") { // ada pesannya
        echo "Hallo apa kabar ".$_GET['nama'];
        echo "<br/>";
        echo "Password anda adalah ".$_GET['password'];

    }else if ($_GET['p'] == "aman") { // tambahan eror
        if (!empty($_POST['nama'])) {
            echo $_POST['nama'];
        } else {
            echo "nama belum diinput";
        }

        echo "<br/>";

        if (!empty($_POST['password'])) {
            echo $_POST['password'];
        } else {
            echo "password masih kosong";
        }
    } else if ($_GET['P'] == "gambar"){ // tampil gambar 
        $size = getimagesize($_FILES['beras']['tmp_name']); //mengambil size
        $image = "data:" .$size('mime'). ";base64,". 
            base64_encode(file_get_contents($_FILES['berkas']['tmp_name'])); //menampilkan gambar

        echo "<image src=".$image."width='720'>";
    }

} else {
    echo "Anda tidak dapat mengakses halaman ini";
}
