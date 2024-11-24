<?php include'database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMD</title>

    <!--CSS Local-->
    <link rel="stylesheet" href="">
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <!--Icon Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins';
        }

        .dtTh {
            text-align: center;
        }

        .usrTh {
            text-align: center;
        }

        .Dte {
            text-align: center;
        }

        .Usr {
            text-align: center;
        }
    </style>
</head>
<body>

    <!--Sidebar-->
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 100vh;">
            <a class="align-items-center text-white text-decoration-none" href="#">
                <i class="bi bi-amd me-2 fs-4 ps-1 text-danger"></i><span class="fs-4 fw-bold">AMD.</span>
            </a>
            <hr>
            <!--Menu sidebar-->
            <ul class="nav nav-pills flex-column mb-auto fw-light">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link text-white" id="dashboard"><i class="bi bi-house me-2"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="products.php" class="nav-link text-white" id="products"><i class="bi bi-cpu me-2"></i>Products</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link text-white" id="services"><i class="bi bi-grid-fill me-2"></i>Services</a>
                </li>
            </ul>
            <hr>
            <!--Menu dropdown-->
            <div class="dropdown">
                <button class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-gear-fill me-2 fs-6"></i><span>Admin</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Call-center</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Email us</a>
                </div>
            </div>
        </div>
    
    <!--Card n Table-->    
    <div class="parent col-md-10 bg-light" id="content-area">
        <div class="container-fluid">
            <div class="row">
                <!--Edit Form-->
                <div class="col-md-10 mt-3">
                    <div class="card shadow">
                        <div class="card-header"><h2 class="mt-2">Edit review</h2></div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">Product name</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col" class="usrTh">From</th>
                                          <th scope="col" class="dtTh">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php include 'database.php';

                                            $query = mysqli_query($connect, "SELECT * FROM datareview");
                                            while ($data = mysqli_fetch_array($query)) {
                                            
                                            ?>

                                            <td><?php echo $data['prod']?></td>
                                            <td>
                                                <form action="update.php" method="POST">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                        <input type="text" name="review" class="w-75" value="<?php echo $data['review']; ?>" required> 

                                                        <button type="submit" name="update" class="bg-light"><i class="bi bi-check2"></i></button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td class="Usr"><?php echo $data['user']?></td>
                                            <td class="Dte"><?php echo date("M Y", strtotime($data['date']))?></td>
                                        </tr>
                                    </tbody><?php } ?>
                                </table>
                            </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <!--Edit Form End-->
            </div>
        </div>
    </div>
    
    </div>

    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

    <!--JS Local-->
    <script>
    </script>
</body>
</html>