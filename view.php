
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Portal - View</title>
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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Register</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="view.php">View</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
    <main>
  <div class="table">
    <?php
        include('db.php'); 

        $sql = "SELECT id, name, email, password FROM users";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>";

            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['password'] . "</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "Erro ao obter dados: " . mysqli_error($con);
        }

        mysqli_close($con);
    ?>
  </div>
    </main>
    <footer>
        <p>&copy; 2024 Register Portal</p>
    </footer>
</body>
</html>
