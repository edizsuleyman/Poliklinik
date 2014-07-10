<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<script type="text/javascript" src="../jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
<script>
$(document).ready(function(){
	
	$('.dropdown-toggle').dropdown();
	});

</script>
</head>
<body>
<form action="" method="POST" >
	<nav id="navbar-example" class="navbar navbar-default navbar-static" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="../index.php" role="button">Ana Sayfa</a>
            </li>
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Kullanıcı <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://localhost/poliklinik/rol/admin1.php" >Kullanıcı Ekle</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://localhost/poliklinik/rol/admin2.php">Kullanıcı Sil</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://localhost/poliklinik/rol/admin3.php">Kullanıcı Güncelle</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://localhost/poliklinik/rol/admin4.php">Yetki Ata</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Admin <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><p class="navbar-text">Kullanıcı adı</p>
                <img src="../assets/images/resim5.jpg" width="100px" height="50px"></li>
              	<li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Kullanıcı Bilgileri</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Bilgileri Güncelle</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://localhost/poliklinik/index.php">Çıkış</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</form>

		<div class="container">

			<form role="form" style="width:400px; margin: 0 auto;" method="POST">
				<div class="required-field-block">
					<input type="text" placeholder="Tc No" name="tc_no" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<input type="text" placeholder="Adı " name="ad" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<input type="text" placeholder="Soyadı" name="soyad" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<input type="text" placeholder="Baba Adı" name="baba_adi" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<input type="text" placeholder="Anne Adı" name="anne_adi" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<input type="text" placeholder="Doğum Yeri" name="dogum_yeri" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<input type="date" placeholder="Doğum Tarihi" name="dogum_tarihi" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
					<!--<div class="required-field-block">
					<input type="text" placeholder="Cinsiyet" name="cinsiyet" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
					</div>-->
				
				<div class="required-field-block">
					<input type="text" placeholder="İlçe" name="ilce" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<input type="text" placeholder="İl" name="il" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<input type="text" placeholder="Kullanıcı Adı" name="kullanici_adi" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<input type="password" placeholder="Şifre" name="sifre" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
					
				<div class="required-field-block">
					<input type="radio" value="erkek" name="cinsiyet">Erkek
					<input type="radio" value="kadın" name="cinsiyet">Kadın
						
				</div>

					
					
				<button class="btn btn-primary" name="kaydet"> KAYDET</button>
			</form>
		</div>
		</body>
		</html>
<?php

/*		try 
		{
			 $db = new PDO("mysql:host=localhost;dbname=poliklinik", "root", "");
		} 
		catch ( PDOException $e )
		{
			 print $e->getMessage();
		}
		$sth=$db-> prepare("select * from rol  ");
		$sth->execute();
		$result=$sth-> fetchAll(PDO :: FETCH_ASSOC);//bir kaç veri çektiğimde
		
		
		echo "<form action='' method='POST' >";
		echo "<select id='rol' name='rol' style='position: absolute; left: 580px; top: 620px; '>";
		
		foreach($result as $yaz)
		{
			echo "<option value =' ".$yaz["rol_id"]."'>".$yaz["rol_adi"]."</option>";
		}
		echo "</select>";
		echo "</form>";-->*/
if(isset($_POST["kaydet"]))
{
		try 
		{
			 $db = new PDO("mysql:host=localhost;dbname=poliklinik", "root", "");
		} 
		catch ( PDOException $e )
		{
			 print $e->getMessage();
		}
		$tc_no=$_POST['tc_no'];
		$ad=$_POST['ad'];
		$soyad=$_POST['soyad'];
		$baba_adi=$_POST['baba_adi'];
		$anne_adi=$_POST['anne_adi'];
		$dogum_yeri=$_POST['dogum_yeri'];
		$dogum_tarihi=$_POST['dogum_tarihi'];
		$cinsiyet=$_POST['cinsiyet'];
		$ilce=$_POST['ilce'];
		$il=$_POST['il'];
		$kullanici_adi=$_POST['kullanici_adi'];
		$sifre=$_POST['sifre'];
		$sth=$db-> prepare("INSERT INTO kullanici(tc_no,ad,soyad,baba_adi,anne_adi,dogum_yeri,dogum_tarihi,cinsiyet,ilce,il,kullanici_adi,sifre ) 
		VALUES ('$tc_no','$ad','$soyad','$baba_adi','$anne_adi','$dogum_yeri','$dogum_tarihi','$cinsiyet','$ilce','$il','$kullanici_adi','$sifre')");
		$sth->execute() or die ("error");
}
?>


<!-- DOKTOR EKLE+GUNCELLE+SİL, ADMİN EKLE+SİL+GÜNCELLE, PERSONLE EKLE+SİL+GÜNCELLE   -->