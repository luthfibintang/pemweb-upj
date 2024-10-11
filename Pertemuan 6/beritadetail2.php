<?php
// In a real application, you would fetch this data from a database based on the news ID
$newsItem = [
    "title" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
    "author" => "Jane Doe",
    "date" => "September 13, 2024",
    "image" => "img/img2.jpg",
    "content" => [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere ipsum non nulla sodales, eu fringilla dolor aliquam. Cras ornare tellus massa, eu pellentesque dui viverra ac. Curabitur eu semper orci. Curabitur tempor lorem in tempor eleifend. Nulla tristique ultricies libero sed feugiat. Nam magna nunc, tincidunt sit amet neque nec, efficitur sagittis velit. Proin nec lectus sit amet ipsum bibendum efficitur. Ut interdum mauris in magna iaculis tincidunt. Suspendisse facilisis a libero quis dapibus. Sed at quam ac mauris condimentum commodo. Donec tempus, dolor sit amet rutrum auctor, justo risus fermentum magna, non molestie velit ipsum sed justo. Aliquam tempus maximus libero eu faucibus. Vivamus id cursus magna, eget eleifend felis. In et orci nec turpis suscipit sagittis.",
        "Aenean ac turpis porta, fringilla libero non, facilisis mi. Vestibulum in tincidunt tortor. Mauris dignissim fringilla justo, vel fermentum eros volutpat vel. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas mi leo, pulvinar id consequat at, ornare et mauris. Duis sit amet libero ullamcorper neque finibus ultrices non et enim. Ut suscipit tempus sapien. Aenean tempus ipsum lectus, vitae cursus erat varius ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi iaculis eros ut dui ornare fringilla. Nullam vel magna nulla. In et lobortis leo, at tincidunt neque. Proin eget lectus lorem. Fusce dapibus consequat mauris, id pharetra lorem vehicula nec. Nulla ultrices justo eget est malesuada elementum. Aenean sem urna, bibendum ut urna et, maximus venenatis odio.",
        "Suspendisse ut eros sed nunc egestas placerat. Cras elit odio, dictum quis magna nec, lacinia mollis urna. Curabitur eget pellentesque risus, a finibus sapien. Nam sollicitudin pellentesque mollis. Cras rhoncus augue risus, nec maximus nisi dignissim nec. Donec facilisis cursus purus id ultrices. Nunc eget urna scelerisque, congue felis non, fringilla orci. Ut rhoncus, nibh ac molestie bibendum, libero turpis iaculis sem, pellentesque laoreet libero mi ac lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.",
        "Phasellus porta erat in ullamcorper hendrerit. Etiam magna nisl, pharetra lobortis congue ut, cursus at est. Aenean posuere, sapien nec consequat pretium, risus lorem vehicula tortor, eu eleifend dui mauris sed velit. Aliquam nec mi justo. Donec vulputate, sem ut accumsan elementum, arcu arcu lacinia massa, at eleifend lacus felis congue risus. Sed semper ornare arcu sit amet ornare. Praesent tellus felis, sodales eu lacus vitae, dapibus rutrum nunc. Fusce hendrerit aliquam eros in elementum. Sed convallis erat nisi, id tempor ipsum tristique quis. Maecenas tincidunt, velit quis congue facilisis, ex magna congue purus, et porttitor lectus nisi sed risus. Curabitur leo nunc, pretium id sapien in, sodales eleifend augue.",
        "Aenean ac turpis porta, fringilla libero non, facilisis mi. Vestibulum in tincidunt tortor. Mauris dignissim fringilla justo, vel fermentum eros volutpat vel. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas mi leo, pulvinar id consequat at, ornare et mauris. Duis sit amet libero ullamcorper neque finibus ultrices non et enim. Ut suscipit tempus sapien. Aenean tempus ipsum lectus, vitae cursus erat varius ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi iaculis eros ut dui ornare fringilla. Nullam vel magna nulla. In et lobortis leo, at tincidunt neque. Proin eget lectus lorem. Fusce dapibus consequat mauris, id pharetra lorem vehicula nec. Nulla ultrices justo eget est malesuada elementum. Aenean sem urna, bibendum ut urna et, maximus venenatis odio.",
        "Suspendisse ut eros sed nunc egestas placerat. Cras elit odio, dictum quis magna nec, lacinia mollis urna. Curabitur eget pellentesque risus, a finibus sapien. Nam sollicitudin pellentesque mollis. Cras rhoncus augue risus, nec maximus nisi dignissim nec. Donec facilisis cursus purus id ultrices. Nunc eget urna scelerisque, congue felis non, fringilla orci. Ut rhoncus, nibh ac molestie bibendum, libero turpis iaculis sem, pellentesque laoreet libero mi ac lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos."
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
    <title><?php echo ($newsItem['title']); ?></title>
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
    
    <section>
      <div class="d-flex justify-content-center mt-5">
        <img src="<?php echo ($newsItem['image']); ?>" alt="<?php echo ($newsItem['title']); ?>" class="img-fluid" style="width: 400px; height: 400px; object-fit: cover;">
      </div>
      <div class="container py-5 px-5 bg-white text-dark">
        <!-- Title, similar to article headings in Medium -->
        <h1 class="display-6 fw-bold mb-4"><?php echo ($newsItem['title']); ?></h1>
    
        <!-- Meta Information -->
        <div class="text-muted mb-4">
          <span><?php echo ($newsItem['author']); ?></span> · <span><?php echo ($newsItem['date']); ?></span>
        </div>
    
        <!-- Content paragraphs -->
        <?php foreach ($newsItem['content'] as $paragraph): ?>
          <p class="lead mb-4"><?php echo ($paragraph); ?></p>
        <?php endforeach; ?>
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
  </body>
</html>