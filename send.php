<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Include librari phpmailer
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');
$email_pengirim = 'deyoga9595.ss@gmail.com'; // Isikan dengan email pengirim
$nama_pengirim = 'Yoga Arimbawa'; // Isikan dengan nama pengirim
$email_penerima = $_POST['email_penerima']; // Ambil email penerima dari inputan form
$subjek = $_POST['subjek']; // Ambil subjek dari inputan form
$pesan = $_POST['pesan']; // Ambil pesan dari inputan form
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Username = $email_pengirim; // Email Pengirim
$mail->Password = 'hnqhtttqxyfshfhr'; // Isikan dengan Password email pengirim
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
$mail->setFrom($email_pengirim, $nama_pengirim);
$mail->addAddress($email_penerima, '');
$mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
// Load file content.php
ob_start();
include "content.php";
$content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
ob_end_clean();
$mail->Subject = $subjek;
$mail->Body = $content;

    $send = $mail->send();
    if($send){ // Jika Email berhasil dikirim ?>
     <script type="text/javascript">window.location.href="emailTerkirim.php"</script>
    <?php }else{ // Jika Email gagal dikirim ?>
    	<script type="text/javascript">window.location.href="gagalTerkirim.php"</script>
   <?php } ?>

?>
