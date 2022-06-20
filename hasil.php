<?php
   session_start();    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StayCozy</title>
    <link rel="stylesheet" href="style/gaya.css" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />
  </head>

  <body>
      <!--Konten -->
       <section class="container-list">
         <div class="card">
         <div class="card-header" style="background-color: #4700D8">
            <h1 style="text-align: center; color: white;">Hasil</h1>
         </div>
         <div class="card-body">
         <ul class="list-group">
            <li class="list-group-item"><strong>Nama:</strong> <?= $_SESSION["nama"]?></li>
            <li class="list-group-item"><strong>No. Handphone:</strong> <?= $_SESSION["nohp"]?></li>
            <li class="list-group-item"><strong>Email:</strong> <?= $_SESSION["email"]?></li>
            <li class="list-group-item"><strong>Tanggal Lahir:</strong> <?= $_SESSION["ttl"]?></li>
            <li class="list-group-item"><strong>Jenis Kelamin:</strong> <?= $_SESSION["gender"]?></li>
            <li class="list-group-item"><strong>Nama Hotel:</strong> <?php foreach($_SESSION["NamaHotel"] as $NamaHotel) : ?> <?= $NamaHotel; endforeach;?></li>
            <li class="list-group-item"><strong>Alamat:</strong> <?= $_SESSION["alamat"]?></li>
         </ul>
         <a href="tugas3.php" type="button" class="btn btn-large btn-block btn-success" role="button"><h2>Back</h2></a>
         </div>
      </div>

    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title>hasil tugas 3</title>
   </head>
   <body>
     
   </body>
</html>