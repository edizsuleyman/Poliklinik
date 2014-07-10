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

			<form role="form" style="width:400px; margin: 0 auto;" method="POST" >
				<div class="required-field-block">
					<input  type="text" placeholder="Tc No"  name="tc_no" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				
				

					
				<button class="btn btn-primary" name="sorgula">SORGULA</button>	
				<button class="btn btn-primary" name="sil">SİL</button>
			</form>
		</div>
</body>
</html>


<?php
		
		$dizi =array();
		$dizi[1]=12;
		
if(isset($_POST["sorgula"]))
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
		$dizi[0]=14;
		echo $dizi[0];
		$sth=$db-> prepare("select * from kullanici where tc_no='$tc_no' ");
		$sth->execute();
		
		$yaz=$sth-> fetch(PDO :: FETCH_ASSOC);
		
		if($yaz == null)
		{
			echo "<br>Lutfen kullanici tc numaranizi kontrol ediniz";
		}
		else
		{
			?>
			<form role="form" style="width:400px; margin: 0 auto;" method="POST">
				<div class="required-field-block">
					<label type="text"  name="label_tc_no" class="form-control">
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<label type="text"  name="ad" class="form-control"><?php echo $yaz["ad"];?>
					</label>
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
				<div class="required-field-block">
					<label type="text" name="soyad" class="form-control"><?php echo $yaz["soyad"]; ?>
					</label>
					<div class="required-icon">
						<div class="text">*</div>
					</div>
				</div>
			</form>
			<?php
		}
		$db=null;
		
}
if(isset($_POST["sil"]))
	{
		//try 
		//{
		//	 $db = new PDO("mysql:host=localhost;dbname=poliklinik", "root", "");
		//} 
		//catch ( PDOException $e )
		//{
		/*	 print $e->getMessage();
		}
				$sil_tc_no=$_REQUEST['label_tc_no'];
				$query=$db-> prepare("DELETE FROM `kullanici` WHERE tc_no='$sil_tc_no'");
				$query->execute() or die ("error");
				
				
		$db=null;	*/
		echo "allta";
		echo $dizi[1];
		echo $dizi[0];
		
	}
?>
