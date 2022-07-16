<!DOCTYPE html>
<html lang="tr">

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
  <title>Login Panel - Script Editor</title>


</head>

<body style="padding:5px;" class="bg-success p-2 text-dark bg-opacity-25">

  <div class="container mt-5  text-center">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form action="" method="post">
          <div style="height:auto;border-radius:5px;width:auto;" class="mt-4 border mx-auto bg-light">
            <div class=" px-4 p-3">
            <label  style="font-size:30px ;" class="form-label text-warning">Script Editor Login Panel</label>
            </div>
            <div class=" px-4 p-3">
              <label style="font-size:20px;" for="user" class="form-label">User Name</label>
              <input style="text-align: center;" type="text" class="form-control" id="user" name="usrnm" placeholder="" required>
            </div>
            <div class=" px-4 p-3">
              <label style="font-size:20px;" for="exampleInputPassword1" class="form-label">Password</label>
              <input  style="text-align: center;" type="password" class="form-control" id="exampleInputPassword1" name="psw" required>
            </div>
            <div class=" mt-3 ">
              <button class="btn btn-success btn-lg mb-4 px-4">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
<?php
session_start();
if (@$_SESSION["user"] != "") {
  echo "<script>window.location.href='editor.php'</script>";
}
if (isset($_POST["usrnm"], $_POST["psw"])) {

  if ($_POST["usrnm"] == "admin" && $_POST["psw"] == "15112000Ozgur.") {
    $_SESSION["user"] = $_POST["usrnm"];
    header("location:editor.php");
  }
  if ($_POST["usrnm"] == "ece" && $_POST["psw"] == "15112000Ece.") {
    $_SESSION["user"] = $_POST["usrnm"];
    header("location:editor.php");
  }
  if ($_POST["usrnm"] == "seymanur" && $_POST["psw"] == "seyma2156") {
    $_SESSION["user"] = $_POST["usrnm"];
    header("location:editor.php");
  }
  if ($_POST["usrnm"] == "yusuf" && $_POST["psw"] == "yusuf2135") {
    $_SESSION["user"] = $_POST["usrnm"];
    header("location:editor.php");
  }
  if ($_POST["usrnm"] == "beta1.0" && $_POST["psw"] == "passwbeta1.0") {
    $_SESSION["user"] = $_POST["usrnm"];
    header("location:editor.php");
  } else {
    echo "<script>alert('Kullanıcı adı veya şifre yanlış.')</script>";
  }
}
?>