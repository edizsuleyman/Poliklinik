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
</body>
</html>


<?php

		try 
		{
			 $db = new PDO("mysql:host=localhost;dbname=poliklinik", "root", "");
		} 
		catch ( PDOException $e )
		{
			 print $e->getMessage();
		}
		$sth=$db-> prepare("select * from kullanici  ");
		$sth->execute();
		$result=$sth-> fetchAll(PDO :: FETCH_ASSOC);//bir kaç veri çektiğimde
?>	
<html>
<body>

<p  style="position: absolute; left: 30px; top: 100px; ">Tc No Seç:</p>
<select onchange="myFunction(this)"  style="position: absolute; left: 30px; top: 130px; ">
 <?php
		foreach($result as $yaz)
		{
			echo "<option value =' ".$yaz["kullanici_id"]."'>".$yaz["tc_no"]."</option>";
		}
 ?>
</select>

<p id="demo1"  style="position: absolute; left: 30px; top: 160px; "></p>

<script>
function myFunction(selTag)
{
var x = selTag.options[selTag.selectedIndex].text;
document.getElementById("demo1").innerHTML="You selected: " + x;
}
</script>

</body>
</html>

<?php

		try 
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
?>	
<html>
<body>

<p  style="position: absolute; left: 200px; top: 100px; " >Yetki Seç:</p>
<select onchange="myFunction1(this)"  style="position: absolute; left: 200px; top: 130px; ">
 <?php
		foreach($result as $yaz)
		{
			echo "<option value =' ".$yaz["rol_id"]."'>".$yaz["rol_adi"]."</option>";
		}
 ?>
</select>

<p id="demo2"  style="position: absolute; left: 200px; top: 160px; "></p>

<script>
function myFunction1(selTag)
{
var x = selTag.options[selTag.selectedIndex].text;
document.getElementById("demo2").innerHTML="You selected: " + x;
}
</script>
</body>
</html>





