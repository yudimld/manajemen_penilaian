
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="login/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="login/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="login/assets/css/style.css" rel="stylesheet">

    <title>Web Edukasi</title>
  </head>
  <body>
    <section class="form-02-main">
      <?php 
        if(isset($_GET['pesan'])){
          if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
          }
        }
      ?>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="checkbox form-group">
                  <div class="form-check">
                    <!-- <input class="form-check-input" type="checkbox" value="" id=""> -->
                    <!-- <label class="form-check-label" for=""> -->
                      
                    </label>
                  </div>
                  <a href="#"></a>
                </div>
                <div class="logo">
                  <img src="login/assets/images/user.png">
                </div>
                
                <form action="cek_login.php" method="post">
                  <div class="form-group">
                    <input type="text" name="username" class="form-control _ge_de_ol" type="text" placeholder="Enter username" required="" aria-required="true">
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                  </div>
                  
                    
                    <button type="submit" class="_btn_04">
                      LOGIN
                    </button>
                  <
                </form>

                <div class="form-group nm_lk"><p></p></div>
                  <div class="form-group pt-0">
                    <div class="_social_04">
                      <!-- <ol>
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-twitter"></i></li>
                        <li><i class="fa fa-google-plus"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                      </ol> -->
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>