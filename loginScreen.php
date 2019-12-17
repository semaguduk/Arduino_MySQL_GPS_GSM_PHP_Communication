<?php

$HtmlForm = <<< BLOK
   
<form name="login" method="post">
 <br><br><br> <br><br><br> <br><br><br> <br><br><br> 


    <center> 
    
           <table>
                <tr>
                    <td>Kullanıcı Adı</td>
                    <td><input type="text" name="kullanici_adi" /></td>
                </tr>
                <tr>
                    <td>Şifre</td>
                    <td><input type="password" name="kullanici_sifre" /></td>
                </tr>
                <tr>
                    <td></td> <br>
                    <td><input type="submit" value="GİRİŞ" style="background-color:yellow" /></td>
                </tr>
            </table>
    </center>
        </form>
BLOK;

$YetkisizGiris= <<< BLOK

   <div style="width:300px; height:100px; padding:50px; margin:50px auto; background-color:black; color:red; font-weight:20px;">Bu sayfayı görme yetkiniz yoktur</div>
   
BLOK;

$YetkiliGiris= <<< BLOK

   <div style="width:500px; height:100px; padding:50px; margin:50px auto; background-color:yellow; color:green; font-weight:20px;">Hoşgeldiniz</div>
   
BLOK;

?>
<!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body bgcolor="#ff8c00" >

<?php
$MyUsername = "goksema";  // kullanıcı adı
$MyPassword = "198718S!";  // sifre
$MyHostname = "178.62.217.16";

$dbh = mysql_pconnect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("gps",$dbh);

if (!empty($_POST)) {

    if ($_POST['kullanici_adi'] == 'test' && $_POST['kullanici_sifre'] == '123') {
        header("Location:data_view.php");

    } else {
        echo 'hatalı giris';
    }

} else {
    echo $HtmlForm;
}



?>

</body>
</html>