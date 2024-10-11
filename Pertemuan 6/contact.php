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
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    <!-- Contact 1 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
            <h1 class="mb-3 text-center">Contact me</h1>
            <p class="text-secondary mb-4 text-center">Just contact me whatever you want</p>
            <hr class="w-50 mx-auto mb-4 mb-xl-9 border-dark-subtle">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-lg-center">
          <div class="col-12 col-lg-9">
            <div class="bg-white border rounded shadow-sm overflow-hidden">
              <form action="confirmContact.php" method="post">
                <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                  <div class="col-12">
                    <label for="fullname" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                      </span>
                      <input type="email" class="form-control" id="email" name="email" value="" required>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                      </span>
                      <input type="tel" class="form-control" id="phone" name="phone" value="">
                    </div>
                  </div>
                  <div class="col12">
                    <label for="hobby" class="form-label">Hobby</label>
                    <div class="form-check col-12 col-md-4">
                      <input class="form-check-input" type="checkbox" value="Lari" id="lari" name="hobbies[]">
                      <label class="form-check-label" for="lari">
                        lari
                      </label>
                    </div>
                    <div class="form-check col-md-4">
                      <input class="form-check-input" type="checkbox" value="Loncat" id="locat" name="hobbies[]">
                      <label class="form-check-label" for="locat">
                        Loncat
                      </label>
                    </div>
                    <div class="form-check col-md-4">
                      <input class="form-check-input" type="checkbox" value="Renang" id="renang" name="hobbies[]">
                      <label class="form-check-label" for="renang">
                        Renang
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Select your birthday">
                  </div>
                  <div class="col-12">
                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-dark btn-lg" type="submit">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
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

    <script>
      $(function() {
        $("#birthday").datepicker({
          dateFormat: "yy-mm-dd", // Format the date as yyyy-mm-dd
          changeMonth: true,
          changeYear: true,
          yearRange: "1900:2024", // You can adjust the year range as needed
        });
      });
    </script>
  </body>
</html>