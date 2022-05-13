<?php
if (isset($_POST['onay'])){
if (isset($_POST['isim'], $_POST['Soyisim'] ,$_POST['email'])
&& ($_POST['isim']!='')
&& ($_POST['Soyisim']!='')
&& ($_POST['email']!='')) {
echo "Kayıt İşleminiz Yapıldı...";
echo "<b>".$_POST['isim'] . ' ' . $_POST['Soyisim']."</b>";
}else{
echo"Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın.<br>
Eksik Bilgi Girdiniz...";
}

echo "<p> <a href='form2_post.html'>&lt;GERİ DÖN&gt;</a></p> ";
?>
