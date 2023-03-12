<?php
$poruka = "";
  if(isset($_GET['poruka'])){
    $poruka = $_GET['poruka'];
  }
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Salon automobila </title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

<?php include 'header.php'; ?>

  <section class="food_section layout_padding-top layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Administracija
        </h2>
        <p>
          <?= $poruka ?>
        </p>
      </div>

      <div class="filters-content">
        <div id="rezultat" class="row">
          <div class="col-md-4">
            <form method="POST" action="dodaj.php" enctype="multipart/form-data">
              <label for="model">Model</label>
              <input type="text" id="model" name="model" class="form-control">
              <label for="cena">Cena</label>
              <input type="number" id="cena" name="cena" class="form-control">
              <label for="boja">Boja</label>
              <input type="text" id="boja" name="boja" class="form-control">
              <label for="slika">Slika</label>
              <input type="file" id="slika" name="slika" class="form-control">
              <label for="marka">Marka</label>
              <select name="marka" id="marka" class="form-control">

              </select>
              <label for="drzava">Drzava proizvodnje</label>
              <select name="drzava" id="drzava" class="form-control">

              </select>
              <hr>
              <input type="submit" class="btn btn-primary" name="dodaj" value="Dodaj automobil"/>
            </form>
          </div>

          <div class="col-md-4">
            <form method="POST" action="izmeni.php" >
              <label for="automobiliIzmena">Automobil</label>
              <select name="automobiliIzmena" id="automobiliIzmena" class="form-control">

              </select>
              <label for="cena">Cena</label>
              <input type="number" id="cena" name="cena" class="form-control">
              
              <hr>
              <input type="submit" class="btn btn-success" name="izmeni" value="Izmeni cenu automobila"/>
            </form>
          </div>

          <div class="col-md-4">
            <form method="POST" action="obrisi.php" >
              <label for="automobiliBrisanje">Automobil</label>
              <select name="automobiliBrisanje" id="automobiliBrisanje" class="form-control">

              </select>
              <hr>
              <input type="submit" class="btn btn-danger" name="brisanje" value="Obrisi automobil"/>
            </form>
          </div>
        </div>
    </div>
  </section>

 <?php
  include 'footer.php';
 ?>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="js/bootstrap.js"></script>
  </script>
  <script src="js/custom.js"></script>
  </script>

<script>
  function popuniMarke(){
        $.ajax(
          {
            url: "popuniMarkeSelect.php",
            success: function(result){
            $("#marka").html(result);
        }
      });
    }

    popuniMarke();

    function popuniDrzave(){
        $.ajax(
          {
            url: "popuniDrzaveSelect.php",
            success: function(result){
            $("#drzava").html(result);
        }
      });
    }

    popuniDrzave();

    function popuniAutomobile(){
        $.ajax(
          {
            url: "popuniAutomobile.php",
            success: function(result){
            $("#automobiliIzmena").html(result);
            $("#automobiliBrisanje").html(result);
        }
      });
    }

    popuniAutomobile();
  </script>
 
</body>

</html>