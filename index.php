<?php 
  include 'functions.php';
  $user = mysqli_fetch_assoc($s);
  $about = mysqli_fetch_assoc($r);

  $project = data ("SELECT * FROM project");
?>
<?php 
  if (isset($_POST ["submit"])){
    $email = $_POST ["email"];
    $nama = $_POST ["nama_k"];
    $pesan = $_POST ["pesan"];

    $query = "INSERT INTO contact 
              VALUES 
              ('', '$email', '$nama', '$pesan')
              ";
              mysqli_query ($koneksi, $query);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AI DESI KURNIASARI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fff">
      <div class="container">
        <a class="navbar-brand" href="#">SMKN 4 TASIKMALAYA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class=" ok nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="ok nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="ok nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->
    <!--jumbotron-->
    <div class="jumbotron text-center">
      <br />
      <img src="desi.jpg.jpeg" alt="" width="400px" class="rounded-circle img-thumbnail" />
      <br />
      <br />
      <h1 class="display-4" style="font-family: Verdana">AI DESI KURNIASARI<span style="font-size: 37px">&#128156;</span></h1>
      <h1><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h1>
      <br />
      <p class="lead" style="font-size: 170%"><b><?= $user["jabatan"];?> | <?= $user["perusahaan"];?></b></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,256L48,240C96,224,192,192,288,192C384,192,480,224,576,213.3C672,203,768,149,864,154.7C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </div>
    <!--jumotron-->
    <!--about-->
    <section id="about">
      <div>
        <div class="row text-center">
          <h2>About Me <i class="bi bi-emoji-smile"></i></h2>
        </div>
        <div class="row justify-content-center fs-5">
          <div class="col-sm-4">
            <p><?= $about["coloumn1"];?></p>
          </div>
          <div class="col-sm-4">
            <p><?= $about["coloumn2"];?><span style="font-size: 18px">&#127775;</span>
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#3bedb5"
          fill-opacity="1"
          d="M0,256L48,240C96,224,192,192,288,192C384,192,480,224,576,213.3C672,203,768,149,864,154.7C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>

      <!--akhir about-->
      <!--project-->
      <section id="project">
        <div class="container">
          <div class="row text-center">
            <h2><span style="font-size: 30px">&#127775;</span>Project <span style="font-size: 30px">&#127775;</span></h2>
          </div>
          <div class="row justify-content-evenly fs-5">
          <?php foreach ($project as $pro) { ?>
            <div class="col-sm-4">
              <div class="card">
                <img src="img/<?= $pro["foto"];?>" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class= "card-text"><?= $pro["nama_p"];?></p>
                  <p class="card-text"><?= $pro["keterangan"];?></p>
                </div>                   
              </div>
            </div>
            <?php }?>
          </div>
        </div>
        <br />
        <br />
      </section>
      <!--akhir project-->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#3bedb5"
          fill-opacity="1"
          d="M0,128L48,149.3C96,171,192,213,288,208C384,203,480,149,576,149.3C672,149,768,203,864,234.7C960,267,1056,277,1152,245.3C1248,213,1344,139,1392,101.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
        ></path>
      </svg>
      <!--contact-->
      <section id="contact">
        <div id="container pt-5">
          <div class="row text-center">
            <h2>Contact</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-6">
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" />
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="name" class="form-control" name="nama_k" id="nama" />
                </div>
                <div class="mb-3">
                  <label for="pesan">Pesan</label>
                  <textarea class="form-control" placeholder="Leave a comment here" name="pesan" id="pesan" style="height: 100px"></textarea>
                </div>
                <br />
                <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
              </form>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#3bedb5"
            fill-opacity="1"
            d="M0,256L48,240C96,224,192,192,288,192C384,192,480,224,576,213.3C672,203,768,149,864,154.7C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
        <footer class="text-center pb-5">
          <p>
            Create With <i class="bi bi-star-fill"></i> by <i class="bi bi-facebook"> <a href="https://m.facebook.com/profile.php?id=100041048507113">Desikurniasari</a></i> <i class="bi bi-instagram"><a href="https://www.instagram.com/dk.sri_12/">dk.sri_12</i></a>
          </p>
        </footer>
      </section>
      <!--akhir contact-->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

