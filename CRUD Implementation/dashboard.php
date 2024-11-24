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
    <!--Styling-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins';
        }

        .actBtn {
            text-align: center;
        }

        .actTh {
            text-align: center;
        }

        .dtTh {
            text-align: center;
        }

        .usrTh {
            text-align: center;
        }

        .Rvw {
            text-align: justify;
        }

        .Usr {
            text-align: center;
        }

        .Dte {
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
    
    <div class="parent col-md-10 bg-light" id="content-area">
        <div class="container-fluid">
            <div class="row">

                <!--Card n Table-->
                <div class="col-md-8 mt-3">
                    <div class="card text-black shadow">
                        <div class="card-header"><h2 class="mt-2">Product reviews</h2></div>
                            <div class="card-body">
                                <table class="table col-md-8">
                                    <thead>
                                        <tr>
                                          <th scope="col">Product</th>
                                          <th scope="col">Review</th>
                                          <th scope="col" class="usrTh">From</th>
                                          <th scope="col" class="dtTh">Date</th>
                                          <th scope="col" class="actTh">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php include 'database.php';

                                            $query = mysqli_query($connect, "SELECT * FROM datareview");
                                            while ($data = mysqli_fetch_array($query)) {
                                            
                                            ?>

                                            <td class="Prd"><?php echo $data['prod']?></td>
                                            <td class="Rvw"><?php echo $data['review']?></td>
                                            <td class="Usr"><?php echo $data['user']?></td>
                                            <td class="Dte"><?php echo date("M Y", strtotime($data['date']))?></td>

                                            <td class="actBtn">
                                                <a href="editPage.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-secondary"> 
                                                    <i class="bi bi-pencil-square"></i> 
                                                </a> <!--Edit feature-->
                                                <a href="delete.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger"> 
                                                    <i class="bi bi-trash3-fill"></i>
                                                </a><!--Delete feature-->
                                            </td>
                                        </tr>
                                    </tbody> <?php } ?>
                                </table>
                            </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <!--Card End-->

                <!--Form-->
                <div class="col-md-4 mt-3">
                    <div class="card shadow">
                        <div class="card-header"><h2 class="mt-2">Add your review</h2></div>
                            <div class="card-body">
                                <form action="submit.php" method="POST">
                                    <!--Text-->
                                    <div class="form-group">
                                        <label for="user">Username</label>
                                        <input id="user" name="user" type="text" class="form-control mt-2" aria-label="Sizing example input" placeholder="username" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="prod">Product name</label>
                                        <input id="prod" name="prod" type="text" class="form-control mt-2" aria-label="Sizing example input" placeholder="text here..." required>
                                    </div>
                                    <!--TextArea-->
                                    <div class="form-group mt-2">
                                        <label for="review">Your review</label>
                                        <textarea id="review" name="review" class="form-control mt-2" rows="2" placeholder="text here..."></textarea>
                                    </div>
                                    <!--Select Menu-->
                                    <!--Date Input-->
                                    <!--Submit Button-->
                                    <button id="submit" name="submit" type="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>
                            </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <!--Form End-->
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