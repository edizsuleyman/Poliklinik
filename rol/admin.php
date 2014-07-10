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



<!-- DOKTOR EKLE+GUNCELLE+SİL, ADMİN EKLE+SİL+GÜNCELLE, PERSONLE EKLE+SİL+GÜNCELLE   -->