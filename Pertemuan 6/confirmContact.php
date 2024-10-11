<?php 
  $footerLinks = [
    ["url" => "https://www.google.com/", "text" => "Google"],
    ["url" => "https://upj.ac.id/", "text" => "UPJ"],
    ["url" => "https://github.com/luthfibintang", "text" => "Github"],
    ["url" => "https://instagram/luthfibintang3", "text" => "Instagram"]
  ];

  include 'connection.php';

  function concatHobbies($hobbies) {
      $count = count($hobbies);

      if ($count === 1) {
          return $hobbies[0];
      } elseif ($count === 2) {
          return implode(' dan ', $hobbies);
      } else {
          $lastHobby = array_pop($hobbies); 
          return implode(', ', $hobbies) . ', dan ' . $lastHobby;
      }
  }

  $confirmationMessage = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {
      // This is the confirmation submission
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];
      $hobbies = $_POST['hobbies'];
      $birthday = $_POST['birthday'];

      $sql = "INSERT INTO kontak (fullname, email, phone, `message`, hobby, birthday) 
      VALUES ('$fullname', '$email', '$phone', '$message', '$hobbies', '$birthday')";


      // Execute the query
      if (mysqli_query($conn, $sql)) {
        $confirmationMessage = "New record created successfully";
      } else {
        $confirmationMessage = "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    } else {
      // This is the initial form submission
      $fullname = htmlspecialchars($_POST['fullname']);
      $email = htmlspecialchars($_POST['email']);
      $phone = htmlspecialchars($_POST['phone']);
      $message = htmlspecialchars($_POST['message']);
      $hobbies = $_POST['hobbies'];
      $strHobby = concatHobbies($hobbies);
      $birthday = $_POST['birthday'];
      $displayBirthday = date('d F Y', strtotime($birthday));
    }
  } else {
    header('Location: http://localhost/pemweb-upj/pertemuan%206/contact.php');
    exit;
  }

  $conn->close();
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
      <!-- Header content remains the same -->
    </header>
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card shadow-sm">
            <div class="card-header bg-dark text-white text-center">
              <h2>Contact Confirmation</h2>
            </div>
            <div class="card-body">
              <?php if (!empty($confirmationMessage)): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $confirmationMessage; ?>
                </div>
              <?php else: ?>
                <p><strong>Name:</strong> <?php echo $fullname; ?></p>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <?php if(!empty($phone)): ?>
                  <p><strong>Phone:</strong> <?php echo $phone; ?></p>
                <?php endif; ?>
                <p><strong>Message:</strong> <?php echo $message; ?></p>
                <?php if(!empty($hobbies)): ?>
                  <p><strong>Hobby:</strong>
                    <?php 
                      echo  $strHobby;
                    ?>
                  </p>
                <?php endif; ?>
                <?php if(!empty($hobbies)): ?>
                  <p><strong>Birthday:</strong>
                    <?php 
                      echo  $displayBirthday;
                    ?>
                  </p>
                <?php endif; ?>
              <?php endif; ?>
            </div>
            <div class="card-footer text-center">
              <?php if (empty($confirmationMessage)): ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <input type="hidden" name="fullname" value="<?php echo $fullname; ?>">
                  <input type="hidden" name="email" value="<?php echo $email; ?>">
                  <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                  <input type="hidden" name="message" value="<?php echo $message; ?>">
                  <input type="hidden" name="hobbies" value="<?php echo $strHobby ?>">
                  <input type="hidden" name="birthday" value="<?php echo $birthday ?>">
                  <input type="hidden" name="confirm" value="1">
                  <input type="submit" value="Confirm Information" class="btn btn-primary">
                </form>
              <?php endif; ?>
              <a href="contact.php" class="btn btn-secondary mt-3">Back to Contact Form</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <footer class="bg-light py-4">
      <!-- Footer content remains the same -->
    </footer>
  </body>
</html>