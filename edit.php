<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone']; 

  $sql = "UPDATE `dataindex` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`phone`='$phone' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
 <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav>

  <div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width:300px;">
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">First Name:</label>
          <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
        </div>

        <div class="col">
          <label class="form-label">Last Name:</label>
          <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
      </div>

      <div class="form-group mb-3">
        <label>Phone:</label> 
        &nbsp;
        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>"> 
      </div>

      <div>
        <button type="submit" class="btn btn-success" name="submit">Update</button>
        <a href="index.php" class="btn btn-danger">Cancel</a>
      </div>
    </form>
  </div>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>