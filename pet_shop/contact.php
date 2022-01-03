<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {

      background: linear-gradient(rgb(182 248 255 / 32%), rgb(161 234 237)), url(./img/back.jpg);
      background-size: 100%;


    }


    .body {
      padding-top: 3rem;
      text-align: center;
      font-family: cursive;
      color: chocolate;
      text-shadow: 0 0 black;

    }

    form label {
      padding-top: 3px;
      font-size: larger;
      font-weight: bolder;
    }



    .msgbox {
      min-height: 9rem !important;
    }
  </style>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Contact</title>
  

</head>

<body>
  <?php
  include("header_index.php");
  
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "pet_shop";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact` VALUES ('$firstName','$lastName','$email','$message')";
    if ($conn->query($sql) === TRUE) {
      echo "<h2 style='color:Indigo;padding-top:10px; text-align:center;'>Message sent successfully</h2>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }



  ?>

  <div class="container-sm">
    <div class="body">
      <h2>HAVE SOME QUESTION?</h2><br>
      <pre><h6><i class="fa fa-globe" style="font-size:22px;color:black;text-shadow:1px 2px 2px gray; padding-bottom:10px;">Bashundhara R/A, Dhaka, Bangladesh.</i></h6></pre>

    </div>
  </div>


  <div class="container-sm">
    <div class="row">

      <div class="col-md-6">
        <iframe style=" box-shadow: 5px 10px 10px gray; border-radius:15px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30226.333470853107!2d90.43684583224596!3d23.819582471766076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fce7d991f%3A0xacfaf1ac8e944c05!2sBasundhara%20Residential%20Area%2C%20Dhaka!5e1!3m2!1sen!2sbd!4v1637480625752!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="col-md-6">
        <form action="contact.php" method="post">
          <div>
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstName">
          </div>
          <div class="form-margin">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastName">
          </div>
          <div class="form-margin">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-margin">
            <label class="form-label">Message</label>
            <textarea class="form-control msgbox"  name="message" placeholder="Write your message here."></textarea>
          </div>
 
          <button style="background: linear-gradient(27deg, #07f3e8, #829597); box-shadow: 2px 2px 3px grey;  margin-top: 12px; height: 36px;margin-left:15rem; margin-bottom:2rem; border-radius:20px;" type="submit">Submit</button>


        </form>

      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>