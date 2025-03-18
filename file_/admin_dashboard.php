<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body style="background-color: beige; display: flex; flex-direction: column; min-height: 100vh;">
  <nav class="navbar navbar-expand-lg bg-dark border-bottom border-5 border-warning">
    <div class="container-fluid">
      <a class="navbar-brand text-white fw-bold" href="">
        <h1 class="mb-0"><i class="bi bi-chat-right-heart-fill text-dark"></i><b>&nbsp;ChatAI</b></h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
        <ul class="navbar-nav me-3 my-2 my-lg-0 navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link text-white" href="" style="font-size: 20px;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="" style="font-size: 20px;">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" style="font-size: 20px;">Keunggulan</a>
          </li>
        </ul>

        <!-- Login Button -->
        <a href="index.php?page=logout" class="btn btn-warning"><b> Logout </b><i class="bi bi-box-arrow-left"></i></a>
      </div>
    </div>
  </nav>

  <div class="container mt-4 flex-grow-1">
    <div class="p-5 text-dark d-flex align-items-center justify-content-center" 
         style="border-top: 4px solid gold; 
                border-right: 20px solid gold; 
                border-top-right-radius: 40px;
                border-radius: 0 0 50px 10px;">

      <!-- Text Content -->
      <div class="text-center">
        <h2 style="font-size:60px;"><b>Welcome, Administrator <?php echo $_SESSION['fullname'];?>!</b></h2>
        <p>This is the admin dashboard.</p>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white text-center mt-auto py-2" style="padding: 20px 0;">
    <div class="container">
      <p>&copy; <b> OUR SOCIAL MEDIA </b></p>
      <div>
        <a href="https://www.instagram.com" target="_blank" class="text-white mx-2">
          <i class="fab fa-instagram fa-2x"></i>
        </a>
        <a href="https://www.facebook.com" target="_blank" class="text-white mx-2">
          <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="text-white mx-2">
          <i class="fab fa-twitter fa-2x"></i>
        </a>
      </div>
    </div>
  </footer>
</body>
</html>