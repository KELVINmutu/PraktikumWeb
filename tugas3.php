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
<?php
    session_start();
    //deklarasi variabel
    $NamaHotel_error = "";
    $nama = $nohp = $email = $ttl = $gender = $Namahotel = $alamat = false;
    $_error = "is required";
    $check_NamaHotel1 = $check_NamaHotel2 = $check_NamaHotel3 = "";


    // validasi
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = true;
        $nohp = true;
        $email = true;
        $ttl = true;
        $gender = true;
        $alamat = true;
        if(empty($_POST["NamaHotel"])){
            $NamaHotel_error = "Nama Hotel  " . $_error;
        }
        else {
            foreach($_POST["NamaHotel"] as $namahotel){
                if(!empty($namahotel) && $namahotel == "Kurotakesso Hott"){
                    $check_NamaHotel1 = $_check;
                }
                if(!empty($namahotel) && $namahotel == "Ancient Hotel"){
                    $check_NamaHotel2 = $_check;
                }
                if(!empty($namahotel) && $namahotel == "Surya Hotel"){
                    $check_NamaHotel3 = $_check;
                }
            }
            $Namahotel = true;
        }
    }

    // post
    if($nama && $nohp && $email && $ttl && $gender && $Namahotel && $alamat){
        $_SESSION["nama"] = $_POST["nama"];
        $_SESSION["nohp"] = $_POST["nohp"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["ttl"] = $_POST["ttl"];
        $_SESSION["gender"] = $_POST["gender"];
        $_SESSION["NamaHotel"] = $_POST["NamaHotel"];
        $_SESSION["alamat"] = $_POST["alamat"];
        header("Location: hasil.php");
        exit();
    }

    ?>
    <!-- Header -->
    <nav
      class="navbar navbar-expand-md navbar-dark fixed-top"
      style="background-color: #4700D8;height: 100px;"
    >
      <!-- Logo 
      <a class="navbar-brand" href="index.html"
        ><img src="" alt="" style="width: 50px; height: 50px"
      /></a> -->

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div
        class="collapse navbar-collapse mx-auto justify-content-md-center"
        id="collapsibleNavbar"
      >
        <ul class="navbar-nav col-md-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kalkulator.html">Kalkulator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="favourite.html">Favourite</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Kategori
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="sneakers.html">Sneakers</a>
              <a class="dropdown-item" href="converse.html">Converse</a>
            </div>
          </li> -->
          <li class="nav-item dropdown active">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Modul 4
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="split.php">Tugas 1</a>
              <a class="dropdown-item" href="index.php">Tugas 2</a>
              <a class="dropdown-item" href="tugas3.php">Tugas 3</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
<!-- <nav>
        <label class="logo">StayCozy</label>
        <ul>
            <li><a class="" href="index.html">Home</a></li>
            <li>
                <a href="#">Menu
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul>
                    <li><a href="kalkulator.html">Kalkulator</a></li>
                    <li><a href="Modul 4 T3/tugas3.php">Form</a></li>
                    <li><a href="favourite.html">Favourite</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
            </li>
        </ul>
    </nav> -->
<section class="container-list">
           <!-- <h1 style="text-align: center; margin-bottom:50px">Tugas 3</h1>
                

      <div class="card" >
         <div class="card-header" style="background-color: #293023">
            <h1 style="text-align: center; color: white;">Pengiriman</h1>
         </div> -->
          <!--Header Mulai-->
    
    <!--Header Selesai-->
         <div class="card-body">
            <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
               <!-- input untuk nama -->
               <div class="form-group">
                  <strong>Nama: </strong>
                  <input class="form-control" type="text" placeholder="Masukan Nama" name="nama" required="" value=<?= isset($_POST["nama"]) ? $_POST["nama"] : "";?> >
               </div>
               <!-- input untuk nohp -->
               <div class="form-group">
                  <strong>Nomor Handphone: </strong>
                  <input class="form-control" type="number" placeholder="Masukan Nomor Handphone" name="nohp" required="" id="replyNumber" data-bind="value:replyNumber" value=<?= isset($_POST["nohp"]) ? $_POST["nohp"] : "";?>>
               </div>
               <!-- input untuk email -->
               <div class="form-group">
                  <strong>Email:</strong>
                  <input type="email" class="form-control" placeholder="Enter email" name="email" required="" value=<?= isset($_POST["email"]) ? $_POST["email"] : ""; ?>>
               </div>
               <!-- input untuk tanggal lahir -->
               <div class="form-group">
                  <strong>Tanggal Lahir: </strong>
                  <br>
                  <input type="date" id="ttl" name="ttl" required="" value=<?= isset($_POST["ttl"]) ? $_POST["ttl"] : "";?>>
               </div>
               <!-- input untuk jenis kelamin -->
               <div class="form-group">
                  <strong>Jenis</strong>
                  <br>
                  <input type="radio" id="Laki-laki" name="gender" value="Laki-laki" required="" <?php isset($gender) && $gender=="Laki-laki" ?>>
                  <label>Laki-laki</label>
                  <input type="radio" id="Perempuan" name="gender" value="Perempuan" required="" <?php isset($gender) && $gender=="Perempuan" ?>>
                  <label>Perempuan</label>
               </div>
               <!-- input untuk NamaHotel -->
               <div class="form-group">
                  <strong>Nama Hotel : </strong>
                  <br>
                  <input type="checkbox" class="form-check-input ml-1" name="NamaHotel[]" value="<br>Kurotakesso Hott" <?= $check_NamaHotel1?>>
                  <label class="form-check-label mr-4 ml-4">Kurotakesso Hott</label>
                  <input type="checkbox" class="form-check-input" name="NamaHotel[]" value="<br>Ancient Hotel" <?= $check_NamaHotel2?>>
                  <label class="form-check-label mr-4">Ancient Hotel</label>
                  <input type="checkbox" class="form-check-input" name="NamaHotel[]" value="<br>Surya Hotel" <?= $check_NamaHotel3?>>
                  <label class="form-check-label mr-4">Surya Hotel</label>
                  <!-- error message -->
                  <small class="form-text text-danger"><?= $NamaHotel_error; ?></small>
               </div>
               <div class="form-group">
                  <strong>Alamat : </strong>
                  <textarea class="form-control" rows="3" name="alamat" required=""><?= isset($_POST["alamat"]) ? $_POST["alamat"] : ""; ?></textarea>
               </div>
               <button type="submit" class="btn btn-large btn-block btn-success"><h2>Submit</h2></button>
            </form>
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