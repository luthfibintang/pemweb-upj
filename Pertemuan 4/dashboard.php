<?php
  $pageTitle = "Dashboard";
  $trendingNews = [
      [
          "title" => "Prabowo Bagi-bagi Sprey Gratis",
          "image" => "img/img1.png",
          "preview-content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque pariatur repudiandae magni tempora repellendus atque illum, labore alias cumque officiis odit molestias animi culpa aliquam ducimus praesentium voluptate. Qui, architecto! 
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, quae fugiat? Excepturi magnam magni, saepe placeat incidunt cumque iure pariatur, nulla repellendus maxime tempora minus iusto laborum odio culpa beatae. 
                                ",
          "link" => "beritadetail1.php"
      ],
      [
          "title" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
          "image" => "img/img2.jpg",
          "preview-content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque pariatur repudiandae magni tempora repellendus atque illum, labore alias cumque officiis odit molestias animi culpa aliquam ducimus praesentium voluptate. Qui, architecto!
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, quae fugiat? Excepturi magnam magni, saepe placeat incidunt cumque iure pariatur, nulla repellendus maxime tempora minus iusto laborum odio culpa beatae.",
          "link" => "beritadetail2.php"
      ]
  ];
  $footerLinks = [
      ["url" => "https://www.google.com/", "text" => "Google"],
      ["url" => "https://upj.ac.id/", "text" => "UPJ"],
      ["url" => "https://github.com/luthfibintang", "text" => "Github"],
      ["url" => "https://instagram/luthfibintang8", "text" => "Instagram"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Dashboard</title>
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

    <div class="container-fluid p-0">
      <img src="img/img3.jpg" alt="title image" class="img-fluid" style="height: 200px; width: 100%; object-fit: cover;">
    </div>

    <div class="container mt-5">
      <h1 class="mb-5">Trending News</h1>
        <?php foreach ($trendingNews as $news): ?>
          <article class="d-flex mb-5">
            <img src="<?php echo ($news['image']); ?>" alt="<?php echo ($news['title']); ?>" class="img-thumbnail me-3" style="width: 200px; height: 200px; object-fit: cover;">
            <div>
              <h2 class="h5"><?php echo ($news['title']); ?></h2>
              <p class="text-muted">
                <?php echo ($news['preview-content']); ?>
              </p>
              <a href="<?php echo ($news['link']); ?>" class="btn btn-dark">Read More &gt;&gt;</a>
            </div>
          </article>
        <?php endforeach; ?>
      <hr class="my-4">
    </div>

    <footer class="bg-light py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="text-muted">© 2023 <a href="#" class="text-decoration-none">Copyright</a>. All Rights Reserved.</p>
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
