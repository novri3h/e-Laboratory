<!-- Aplikasi e-Laboratory dengan PHP7 dan MySQLi
*******************************************************
* Developer    : Tri Hartono
* Company      : Nadhif Studio
* Release Date : 03 Agustus 2023
* Website      : bit.ly/M-UMKM
* E-mail       : nadhif.studio@gmail.com
* Phone        : +62-8953-3130-9434
-->

<?php
session_start();
// hapus session
session_destroy();

// alihkan ke halaman login (index.php) dan berikan alert = 2
header('Location: index.php?alert=2');
?>
