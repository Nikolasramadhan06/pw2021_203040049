<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Tubes/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    </head><style type="text/css">
        @font-face {
            font-family: "Action";
            src: url(Tubes/assets/font/Action\ Man\ Shaded.ttf);
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
        <marquee direction="right"> <h1 id="Home">Selamat Datang...</h1> </marquee>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#Home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MENU
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="kuliah">KULIAH</a>
          <a class="dropdown-item" href="Praktikum">PRAKTIKUM</a>
          <a class="dropdown-item" href="Tubes">TUGAS BESAR</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#contact">CONTACT</a>
        </div>
      </li>
    </ul>
  </div>
    </nav>

    <section class="banner">
        <div class="container">
            <img src="Tubes/assets/img/Niko.jpg">

            <br>
            <br>
            <h1> Hallo!<br> <span class="efek-ngetik"></span></h1>
            <br>
            <p>TEKNIK INFORMATIKA</p>
        </div>
    </section>


    <div class="kuliah">
        <div class="heading">
        
        </div>
        <br>
        <div class="row">
            <div class="card">
                <div class="card-header">
                <h4>KULIAH</h4>
                </div>
                <div class="card-body">
                <h5><p class="card-text">Silahkan Klik Lihat dibawah untuk menuju halaman Kuliah </p><h5>
                    <a href="kuliah" class="btn">Lihat</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                <h4>PRAKTIKUM</h4>
                </div>
                <div class="card-body">
                <h5><p class="card-text">Silahkan Klik Lihat dibawah untuk menuju halaman Praktikum </p><h5>
                    <a href="Praktikum" class="btn">Lihat</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                <h4>TUBES</h4>
                </div>
                <div class="card-body">
                <h5><p class="card-text">Silahkan Klik Lihat dibawah untuk menuju halaman Tubes</p><h5>
                    <a href="Tubes" class="btn">Lihat</a>
                </div>
            </div>
        </div>
            <br>
            <br>
            <br>
    </div>
<section id="contact">
    <section class="contact">
        <div class="content">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quae illo dolores dolor at fugit totam unde excepturi veritatis? Est consequuntur debitis adipisci aliquam odit optio doloribus, sunt dignissimos mollitia?</p>
        </div>
        <div class="info">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Indramayu, Jawa Barat</p>
                        </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+62 85280294872</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>nikonikolas0612@gmail.com</p>
                        </div>
                </div>
            </div>
            <div class="contactform">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required"><br>
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required"><br>
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required"><br>
                        <span>Type your message</span>
                    </div>
                    <div class="inputBox">
                       <b> <input type="submit" name=""></input></b>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </section>
   
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright Nikolas Ramadhan
    </div>

    <script src="Tubes/js/203040049.js"></script>

</body>

</html>