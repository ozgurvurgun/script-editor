<?php session_start();
if ($_SESSION["user"] == "") {
    echo "<script>window.location.href='editorexit.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="tr-en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb7367d676.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="editorimage/scripteditor.png" type="image/x-icon" />
    <title>Working Area - Script Editor</title>
</head>

<body>
    <style>
        .isize {
            font-size: 18px;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="editor.php"><i class="fa-solid fa-code"></i> &nbsp;<span class="text-warning">Script Editor</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" target="_blank" href="viewcodes.php">View Codes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="#">Guide / Explanation</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Good Jobs <span class="text-warning"><?= $_SESSION["user"] ?></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item disabled" href="#">My databases</a></li>
                            <li><a class="dropdown-item disabled" href="#">My Table</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" target="_blank" href="https://github.com/ozgurvurgun">Visit Developer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="editorexit.php">Sign Out</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link isize" href="https://twitter.com/ozgurvrgn" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link isize" href="https://www.instagram.com/10101.11.7e5/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link isize" href="https://github.com/ozgurvurgun" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br><br>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form method="POST">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="18" name="dokuman" placeholder="Be very carefull. You can't go wrong in this area. 😉"></textarea>
                    <div class="col-md-6 mt-3 mb-3">
                        <button type="submit" class="btn btn-success btn-lg">execute</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 mx-auto">
                <div style="height:446px;border-radius:5px;" class="ratio ratio-16x9 border ">
                    <iframe style="height: 446px;border-radius:5px;" src="https://www.ozgurvrgn.xyz/<?php echo $_SESSION["user"] . ".php"; ?>" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid mt-5 p-2 bg-light">
        <p class="text-center mt-2">
            <span>all rights reserved &copy; | 2022</span>
        </p>
    </div>
    <?php
    $file = fopen($_SESSION['user'] . ".php", 'w'); //dosya oluşturma işlemi
    $write = @$_POST['dokuman']; //dosya içine yazma işlemi
    fwrite($file, $write);
    fclose($file);
    $textfile = fopen($_SESSION['user'] . ".txt", 'w'); //dosya oluşturma işlemi
    $textwrite = @$_POST['dokuman']; //dosya içine yazma işlemi
    fwrite($textfile, $textwrite);
    fclose($textfile);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>