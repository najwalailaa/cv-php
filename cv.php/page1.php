<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>ABOUT ME</title>';
echo '<link rel="stylesheet" href="file.css">';
$tgl = '21-06-2003';
$lahir = new DateTime($tgl);
$hari_ini = new DateTime();
$umur = $hari_ini->diff($lahir);
echo '</head>';
echo '<body>';
echo '<div class="container">';
echo '<div class="box1">';
echo '<center>';
echo '<h1 style="color:white;" class="font">0 1</h1>';
echo '</center>';
echo '</div>';
echo '<center>';
echo '<h2 class="pics"></h2>';
echo '<p class="font2">NAJWA LAILA ANGGRAINI</p>';
echo  "Usia ".$umur->y ." tahun " .$umur->m ." bulan " .$umur->d ." hari";
echo '<p class="font3">Najwa is a proactive student who believes in the effectiveness of persuasive communication. She once had several projects that were related to many people. Through her experience, she has been equipped with teamwork and communication skills. She is eager to learn and loves challenging experiences that can make her a better version of herself. She has a lot of interest and will to develop.</p>';
echo '</center>';
echo '';
echo '</div>';
echo '<div class="cpbox">';
echo '<a href="page2.php"><button>more about Najwa</button></a>';
echo '</div>';
echo '</body>';
echo '';
echo '</html>';
echo '';
?>

