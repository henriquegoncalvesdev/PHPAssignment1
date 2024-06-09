
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Portal</title>
        <link
            rel="icon"
            href=
"images/favicon.ico"
            type="image/x-icon"
        />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="view.php">View</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
    <main>
      <body>
<?php
    include('validate.php');
    include('db.php');
    //get data from form via POST
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];

    //verify if fields are empty
    if(empty($name) || empty($email) || empty($password)){
        echo "All fields are required.";
        exit();
    }
    //validate data
    $errorName = validateName($name);
    $errorEmail = validateEmail($email);
    $errorPassword = validatePass($password);

  // verify if passed all validations
    if ($errorName === true && $errorEmail === true && $errorPassword === true) {
    echo "All data are valid. <br>";
    //insert data into database
    $sql= "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')";

    if(mysqli_query($con, $sql)){
        echo "User registered successfully.";
    }
    else{
        echo "Error connecting to bank".mysqli_connect_error($con);
    }
    mysqli_close($con);
    } else {
    // error messages
    echo $errorName !== true ? $errorName . "<br>" : '';
    echo $errorEmail !== true ? $errorEmail . "<br>" : '';
    echo $errorPassword !== true ? $errorPassword . "<br>" : '';
  
  }
?>       
      </body>
    </main>
    <footer>
        <p>&copy; 2024 Register Portal</p>
    </footer>
</body>
</html>