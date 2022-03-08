<?php
  require 'function.php';
  $user = mysqli_fetch_assoc($a);
  $about = mysqli_fetch_assoc($b);
  
  $projects = data("SELECT * FROM project");
  if(isset($_POST["submit"])){
     if (tambah($_POST)>0) {
         echo "
              <script>
              alert('Data berhasil dikirim');
              </script>
              ";
      
    }else{
          echo "
              <script>
              alert('Data gagal dikirim');
              </script>
              ";
      
          }
    }
  ?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <!-- CSS Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  </head>
  <body>
    <!--- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ccccff">
      <div class="container">
        <a class="navbar-brand" href="#">malul</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Project</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a></li>
              </ul>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!--jumbotron-->
    <section class="jumbotron text-center">
      <img src="foto/<?= $user["Foto"];?>"  alt="" width="200"  height="200" class="rounded-circle img-thumbnail"./>
      <h1 class="display-4"><?=$user["Nama"];?></h1>
      <p class="lead"><?=$user["Jabatan"];?>|<?=$user["Perusahaan"];?></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L13.3,106.7C26.7,85,53,43,80,64C106.7,85,133,171,160,176C186.7,181,213,107,240,106.7C266.7,107,293,181,320,218.7C346.7,256,373,256,400,250.7C426.7,245,453,235,480,208C506.7,181,533,139,560,117.3C586.7,96,613,96,640,106.7C666.7,117,693,139,720,149.3C746.7,160,773,160,800,181.3C826.7,203,853,245,880,266.7C906.7,288,933,288,960,256C986.7,224,1013,160,1040,128C1066.7,96,1093,96,1120,117.3C1146.7,139,1173,181,1200,202.7C1226.7,224,1253,224,1280,224C1306.7,224,1333,224,1360,229.3C1386.7,235,1413,245,1427,250.7L1440,256L1440,320L1426.7,320C1413.3,320,1387,320,1360,320C1333.3,320,1307,320,1280,320C1253.3,320,1227,320,1200,320C1173.3,320,1147,320,1120,320C1093.3,320,1067,320,1040,320C1013.3,320,987,320,960,320C933.3,320,907,320,880,320C853.3,320,827,320,800,320C773.3,320,747,320,720,320C693.3,320,667,320,640,320C613.3,320,587,320,560,320C533.3,320,507,320,480,320C453.3,320,427,320,400,320C373.3,320,347,320,320,320C293.3,320,267,320,240,320C213.3,320,187,320,160,320C133.3,320,107,320,80,320C53.3,320,27,320,13,320L0,320Z"></path></svg>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L9.2,186.7C18.5,181,37,171,55,181.3C73.8,192,92,224,111,229.3C129.2,235,148,213,166,213.3C184.6,213,203,235,222,250.7C240,267,258,277,277,288C295.4,299,314,309,332,309.3C350.8,309,369,299,388,293.3C406.2,288,425,288,443,277.3C461.5,267,480,245,498,213.3C516.9,181,535,139,554,106.7C572.3,75,591,53,609,58.7C627.7,64,646,96,665,96C683.1,96,702,64,720,74.7C738.5,85,757,139,775,170.7C793.8,203,812,213,831,218.7C849.2,224,868,224,886,224C904.6,224,923,224,942,218.7C960,213,978,203,997,213.3C1015.4,224,1034,256,1052,261.3C1070.8,267,1089,245,1108,229.3C1126.2,213,1145,203,1163,186.7C1181.5,171,1200,149,1218,165.3C1236.9,181,1255,235,1274,213.3C1292.3,192,1311,96,1329,64C1347.7,32,1366,64,1385,106.7C1403.1,149,1422,203,1431,229.3L1440,256L1440,320L1430.8,320C1421.5,320,1403,320,1385,320C1366.2,320,1348,320,1329,320C1310.8,320,1292,320,1274,320C1255.4,320,1237,320,1218,320C1200,320,1182,320,1163,320C1144.6,320,1126,320,1108,320C1089.2,320,1071,320,1052,320C1033.8,320,1015,320,997,320C978.5,320,960,320,942,320C923.1,320,905,320,886,320C867.7,320,849,320,831,320C812.3,320,794,320,775,320C756.9,320,738,320,720,320C701.5,320,683,320,665,320C646.2,320,628,320,609,320C590.8,320,572,320,554,320C535.4,320,517,320,498,320C480,320,462,320,443,320C424.6,320,406,320,388,320C369.2,320,351,320,332,320C313.8,320,295,320,277,320C258.5,320,240,320,222,320C203.1,320,185,320,166,320C147.7,320,129,320,111,320C92.3,320,74,320,55,320C36.9,320,18,320,9,320L0,320Z"></path></svg>
    </section>
    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="About">
      <div class="row text-center">
        <h2>About</h2>
      </div>
      <div class="row justify-content-center">
          <div class="col-4">
            <p><?=$about["Kolom1"]?></p>
          </div>
          <div class="col-4">
            <p><?=$about["Kolom2"]?></p>
          </div>
      </div>
    </section>
    <!-- Akhir About -->
<!-- Project -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My projects</h2>
          </div>
        </div>
<div class="row justify-content-center">
    
                <?php foreach ($projects as $pro){ ?>
    
    
         <div class="col-md-4 mb-3">
          <div class="card">
          <img src="foto/<?=$pro["Foto"];?>" class="card-img-top" alt="project" height="400px" width="500px">
          <div class="card-body">
            <h2 class="display-6"><?=$pro["Nama_p"];?></h2>
            <p class="card-text"><?=$pro["Ket"];?></p>
         </div>
         </div>
         </div>
         <?php }?>
      </div>
    </section>
    <!-- Akhir Project -->
<!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action=""method="POST">
              <div class="mb-3">
                <label for="Email" class="form-label">Email addres</label>
                <input type="email" class="form-control" name="Email" id="Email" aria-describedby="EmailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="Nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="Nama" id="Nama"required/>
                </div>
                <div class="mb-3">
                  <label for="Pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" placeholder="Leave a comment here" name="Pesan"id="pesan" style="height: 100px" required></textarea>
                </div>
                
             <button type="submit" name="submit"class="btn btn-primary">Kirim</button>
           </form>
          </div>
        </div>
      </div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ccccff" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,90.7C384,117,480,203,576,224C672,245,768,203,864,160C960,117,1056,75,1152,53.3C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Contact -->
<!-- Footer -->
    <footer class="text
    white text-center pb-4">
      <p>Creater with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https:/www.instagram.com/vinaaatae_"class="text-white fw-bold">malul</a></p>

    </footer>
    <!-- Akhir Footer -->
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>