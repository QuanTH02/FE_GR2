<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Movie Website</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="templates/home.css">


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/home.js"></script>
  <style>
    /* Add your custom styles here */

    /* Fix for the container */
    body {
      padding-top: 56px;
      /* Adjust based on your navbar height */
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand ml-5" href="#">QuanFilm</a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <form class="search-box form-inline ml-auto">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px;">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <ul class="navbar-nav ml-auto mr-4">
        <li class="nav-item">
          <a class="nav-link" href="#">Mode</a>
        </li>

        <li class="nav-item dropdown ml-4">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-cog"></i> Setting
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Xem Thông Tin</a>
            <a class="dropdown-item" href="#">Đăng Xuất</a>
          </div>
        </li>

      </ul>
    </div>

  </nav>

  <!-- Container -->
  <div class="container mt-4">
    <!-- First div -->
    <div class="row">
      <div class="col-md-8">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <video controls width="100%">
                <source
                  src="https://imdb-video.media-imdb.com/vi1964427033/1434659607842-pgv4ql-1701124208277.mp4?Expires=1701877503&Signature=QGwsSnk2m3o152buAYFCybpbNOp81jH~S7TaWGCtVI9ijKInA4D~gFCgZNogYVIE0afT6R4YR6xWrUNt2oMz7z6a2aWCi9U7O8WSbMwjUe7y0tM0LRcayfZLreV9mVaE3eJica34aaRAButHT48tzL6E4rZuf2Jo5qqhwkyl6~7YQr-yOScbjS0KbCjvokGqxH83QT5rBoRISsyG4giIZjxRYgKc6rupHsPvuT~BCHYHOyl2i3F-JqHUtKkqWl0nWGWfzSu1~9KsA2SxQHRdET4RFJja8e6sw~zPacGZIs2GvhdzoffEOyjzYGZYniHgGbXYb4KK6jZ6D0y84Lovtw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA"
                  type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>

            <div class="carousel-item">
              <video controls width="100%">
                <source
                  src="https://imdb-video.media-imdb.com/vi1511835417/1434659607842-pgv4ql-1701537566529.mp4?Expires=1701929277&Signature=miL77aeBFchZmkLwp3Nx8duQpGEdBGwzkuQxcnMH4LfWoQtt54dMv~-tF9SoVetF7t3UBTP7KopqM7cxcUEXcxjUju3lWpdxyMwVJw2dDEEkUIBob5WVNU81l~Y~iFfwRSPXlINmHd3IaQIYx7GMdOo~2i8M8j-iURHdSfF-X4XHThPIF50uwP1qF2SyGC2PwSXBwALKK5prEcV3mLN6CtShduggvy2xncQUoW~SC54QVjjh7esaIzgw-B~viK6TUhn4qay4DOxp-4TSPZZDbTRoAj-frvvn9Xjgtia5~NTW39KO4fiTrGG1aMsH2YyPdrP8i~Qrn1EFOFG7y0-aXA__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA"
                  type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <ul class="list-group">
          <h3 style="margin-top: -10px;">Trailer</h3>

          <!-- Right Video -->
          <?php for($i = 1; $i <= 3; $i++): ?>
            <li class="list-group-item pt-0 pb-0 mb-1">
              <div class="row">
                <div class="col-md-2 img-small">
                  <img src="img/vebinh<?= $i ?>.jpg" class="card-img-top" alt="Movie Image">
                </div>

                <div class="col-md-10 card-body d-flex flex-column mt-0 pt-0">
                  <p>Time: 49s</p>
                  <h5 class="card-title mt-0">Ve Binh Giai Ngan Ha</h5>
                  <p>Description</p>
                </div>
              </div>
            </li>
          <?php endfor; ?>
        </ul>
      </div>
    </div>

    <!-- Second div -->
    <br>
    <h1>What to watch</h1>

    <div>
      <a href="#" style="color: black;">
        <h2 class="topic">| Top Picks <i class="fas fa-chevron-right"></i></h2>
      </a>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row mt-4">
            <?php for($i = 1; $i <= 4; $i++): ?>
              <!-- Repeat the following block for each movie -->
              <div class="col-md-3 mb-4 mr-0">
                <div class="card">
                  <div class="img-container">
                    <img src="img/vebinh<?= $i ?>.jpg" class="card-img-top" alt="Movie Image">
                  </div>

                  <div class="card-body d-flex flex-column align-items-center">
                    <p class="card-text ml-auto mb-2"><i class="fas fa-star" style="color: yellow;"></i>
                      4.9</p>
                    <h5 class="card-title mt-0">Ve Binh Giai Ngan Ha</h5>
                    <button class="btn btn-primary">Add to List</button>
                    <button class="btn btn-success mt-2">Watch Movie</button>
                  </div>
                </div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row mt-4">
            <?php for($i = 4; $i >= 1; $i--): ?>
              <!-- Repeat the following block for each movie -->
              <div class="col-md-3 mb-4 mr-0">
                <div class="card">
                  <div class="img-container">
                    <img src="img/vebinh<?= $i ?>.jpg" class="card-img-top" alt="Movie Image">
                  </div>

                  <div class="card-body d-flex flex-column align-items-center">
                    <p class="card-text ml-auto mb-2"><i class="fas fa-star" style="color: yellow;"></i>
                      4.9</p>
                    <h5 class="card-title mt-0">Ve Binh Giai Ngan Ha</h5>
                    <button class="btn btn-primary">Add to List</button>
                    <button class="btn btn-success mt-2">Watch Movie</button>
                  </div>
                </div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"
        style="width: 30px">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"
        style="width: 30px">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- Footer -->
  <footer class="flex-bottom" style="background-color: rgb(157, 163, 174);">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          Tran Hong Quan
          <br>
          0123455678
        </div>
        <div class="col-md-6 text-center">
          <a href="#" class="f-fb">
            <i class="fab fa-facebook"></i> Facebook
          </a>
          <br>
          <a href="#" class="f-ins">
            <i class="fab fa-instagram"></i> Instagram
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Settings Modal -->
  <div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="settingsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="settingsModalLabel">Settings</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <button class="btn btn-info btn-block mb-2">View Information</button>
          <button class="btn btn-danger btn-block">Log Out</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleMovie() {
      // Toggle the visibility of the fifth movie
      const fifthMovie = document.querySelector('.list-group-item:last-child');
      fifthMovie.style.display = fifthMovie.style.display === 'none' ? 'list-item' : 'none';
    }
  </script>

</body>

</html>