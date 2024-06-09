<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts import -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- end of fonts import -->
    <title>Register Portal - Add</title>
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
      <section>
        <div class="container">
            <form action="add.php" method="POST">
              <h1>Register</h1>
              <div class="mb-3">
                <label for="inputName1" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName1" name="name">
              </div>
              <div class="mb-3">
                <label for="inputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="inputEmail1" name="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="inputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword1" name="pass">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      </section>
    </main>
    <footer>
        <p>&copy; 2024 Register Portal</p>
    </footer>
</body>
</html>
