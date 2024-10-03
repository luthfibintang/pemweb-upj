<?php 
  $footerLinks = [
    ["url" => "https://www.google.com/", "text" => "Google"],
    ["url" => "https://upj.ac.id/", "text" => "UPJ"],
    ["url" => "https://github.com/luthfibintang", "text" => "Github"],
    ["url" => "https://instagram/luthfibintang3", "text" => "Instagram"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Contact</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="rounded-circle" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" width="30" height="30">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card shadow-sm">
            <div class="card-header bg-dark text-white text-center">
              <h2>Contact Confirmation</h2>
            </div>
            <div class="card-body">
              <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // Mengambil data dari POST 
                  $fullname = htmlspecialchars($_POST['fullname']);
                  $email = htmlspecialchars($_POST['email']);
                  $phone = htmlspecialchars($_POST['phone']);
                  $message = htmlspecialchars($_POST['message']);

                  // Menampilkan konfirmasi dengan desain Bootstrap
                  echo "<p><strong>Name:</strong> " . $fullname . "</p>";
                  echo "<p><strong>Email:</strong> " . $email . "</p>";
                  if (!empty($phone)) {
                    echo "<p><strong>Phone:</strong> " . $phone . "</p>";
                  }
                  echo "<p><strong>Message:</strong> " . $message . "</p>";
                } else {
                  echo "<p>No data submitted.</p>";
                }
              ?>
            </div>
            <div class="card-footer text-center">
              <a href="contact.php" class="btn btn-primary">Back to Contact Form</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <footer class="bg-light py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="text-muted">© <?php echo date('Y'); ?> <a href="#" class="text-decoration-none">Copyright</a>. All Rights Reserved.</p>
          </div>
          <div class="col-md-6 text-md-end">
            <ul class="list-inline">
              <?php foreach ($footerLinks as $link): ?>
                <li class="list-inline-item"><a href="<?php echo ($link['url']); ?>" class="text-decoration-none"><?php echo ($link['text']); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>