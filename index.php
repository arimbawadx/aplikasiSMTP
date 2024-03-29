<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Aplikasi SMTP</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          
        </div>
        <div class="col-sm">
          <div class="card" style="width: 20rem; margin-top: 120px;">
            <div class="card-body">
              <h5 align="center" class="card-title" style="margin-top: 30px;">APLIKASI SMTP <br><p style="font-size: 10px">by I Made Yoga Arimbawa - 18101009</p></h5>

              <!-- <div class="container">
                <p align="center" style="font-size: 13px;">Login untuk menambah followers anda !</p>
              </div> -->

              <div class="container" style="margin-top: 50px; margin-bottom: 30px;">

                <form method="POST" action="send.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <input autocomplete="off" style="background-color: #fafafa; font-size: 11px;" required type="email" name="email_penerima" class="form-control" placeholder="kepada">
                  </div>

                  <div class="form-group">
                    <input autocomplete="off" style="background-color: #fafafa; font-size: 11px;" required type="text" name="subjek" class="form-control" placeholder="Subjek">
                  </div>

                  <div class="form-group">
                    <textarea class="form-control" name="pesan" placeholder="Pesan" required rows="8" style="margin-top: 5px; background-color: #fafafa; font-size: 11px;"></textarea>
                  </div>
                  
                    <button style="width: 250px;" type="submit" class="btn btn-primary">Kirim Email</button>
                
                </form>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm">
          
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

