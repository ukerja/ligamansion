<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Include librari phpmailer
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

// $namalengkap = $_POST['namalengkap']; //Ambil nama lengkap dari inputan
$userid = $_POST['userid']; //Ambil userid dari inputan
$jumlah = $_POST['jumlah']; //Ambil jumlah dari inputan
$jenisemail = $_POST['jenisemail']; //Ambil jumlah dari inputan
$email = $_POST['email']; //Ambil email dari inputan
$nowa = $_POST['nowa']; //Ambil nowa dari inputan
$bank = $_POST['bank']; //Ambil bank dari inputan 
$banklainnya = $_POST['banklainnya']; //Ambil bank dari inputan 
$namarekening = $_POST['namarekening']; //Ambil namarekening dari inputan
$nomorrekening = $_POST['nomorrekening']; //Ambil nomorrekening dari inputan 
$jenispermainan = $_POST['jenispermainan']; //Ambil jenispermainan dari inputan 

$isAttachment = $_POST['isAttachment']; //Ambil status attachment apakah ada atau tidak
$email_pengirim = 'ligamansionsite@gmail.com'; // Isikan dengan email pengirim
$nama_pengirim = 'ligamansion.com'; // Isikan dengan nama pengirim
$email_penerima = $_POST['email_penerima']; // Ambil email penerima dari inputan form
$subjek = $_POST['subjek']; // Ambil subjek dari inputan form
$pesan = $_POST['pesan']; // Ambil pesan dari inputan form
$attachment = NULL; // Ambil nama file yang di upload
// $attachment = $_FILES['attachment']['name']; // Ambil nama file yang di upload
if($isAttachment == "false"){
	$attachment = "";
}else{
	$attachment = $_FILES['attachment']['name'];
}

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Username = $email_pengirim; // Email Pengirim
$mail->Password = 'nvithdsukehkfkdi'; // Isikan dengan Password email pengirim
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
// $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
$mail->setFrom($email_pengirim, $nama_pengirim);
$mail->addAddress($email_penerima, '');
$mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
// Load file content.php
ob_start();

if($jenisemail == "DEPOSIT"){
	include "contentDeposit.php";
}
	else if($jenisemail == "WITHDRAW"){
	include "contentWithdraw.php";
}
	else{
	include "content.php";
}

$content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
ob_end_clean();
$mail->Subject = $subjek;
$mail->Body = $content;
$mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
if(empty($attachment)){ // Jika tanpa attachment
    $send = $mail->send();
    if($send){ // Jika Email berhasil dikirim
        // echo "<h1>Email berhasil dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
        echo "Berhasil";
    }else{ // Jika Email gagal dikirim
        echo "<h1>Email gagal dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
        // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
    }
}else{ // Jika dengan attachment
    $tmp = $_FILES['attachment']['tmp_name'];
    $size = $_FILES['attachment']['size'];
    if($size <= 25000000){ // Jika ukuran file <= 25 MB (25.000.000 bytes)
        $mail->addAttachment($tmp, $attachment); // Add file yang akan di kirim
        $send = $mail->send();
        if($send){ // Jika Email berhasil dikirim
            // echo "<h1>Email berhasil dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
			echo "Berhasil";
        }else{ // Jika Email gagal dikirim
            echo "<h1>Email gagal dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
            // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
        }
    }else{ // Jika Ukuran file lebih dari 25 MB
        echo "<h1>Ukuran file attachment maksimal 25 MB</h1><br /><a href='index.php'>Kembali ke Form</a>";
    }
}
?>