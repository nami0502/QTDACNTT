<?php 
   session_start();
?>
<!doctype html>
<html lang="en">
  <head>
                    <?php
                        $idTin = $_GET["iDTinTuc"];
                        require("KetNoiCSDL.php");
                        $SQL = "SELECT * FROM tintuc where iDTinTuc =  $idTin";
                        $result = $conn->query($SQL);
                        $row = $result->fetch_assoc();
                    ?>
    <title><?=$row["TieuDe"]?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
    <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
    <link rel="stylesheet" href="CSS/main.css">
    <script src="JAVASCRIPT/main.js"></script>
</head>
  <body>
    <div class="headertop">
        <?php require("Header.php");?>
    </div>
    <?php
                        $idTin = $_GET["iDTinTuc"];
                        require("KetNoiCSDL.php");
                        $SQL = "SELECT * FROM tintuc where iDTinTuc =  $idTin";
                        $result = $conn->query($SQL);
                        $row = $result->fetch_assoc();
                    ?>
     
     <div class ="tintuc"> 
            <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang Ch???</a></li>
                    <li class="breadcrumb-item"><a href="TinTuc.php">Tin T???c</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$row['TieuDe']?></li>
                </ol>
            </nav>
                <p> <b>Ng??y ????ng Tin :  </b><?=$row['NgayDangTin']?></p>
                <h4><?=$row['TieuDe']?></h4>
                <?=$row['NoiDung']?>
            </div>
      </div>
      <?php
        require("Footer.php"); 
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>