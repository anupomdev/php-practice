<?php
require_once 'database.php';

$select = "SELECT * FROM anupom WHERE status = 1";
$q = mysqli_query($db,$select);


// single view count
$selcount = "SELECT count(*) as total FROM anupom WHERE status = 1";
$sq = mysqli_query($db , $selcount);
$assoc = mysqli_fetch_assoc($sq);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>C panal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">TOTAL ENTRY <?php echo $assoc['total']; ?></h2>
  <table class="table table-bordered text-center">
    <thead >
      <tr>
          <th class="text-center">SL</th>
          <th class="text-center">NAME</th>
          <th class="text-center">EMAIL</th>
          <th class="text-center">PHONE</th>
          <th class="text-center">ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($q as $key => $value): ?>
        <tr>
          <td> <?php echo ++$key ?> </td>
          <td><?= $value['name'];   ?></td>
          <td><?= $value['email'];  ?></td>
          <td><?= $value['phone'];  ?></td>
          <td>
            <a class="text-center btn btn-primary" href="user-edit.php?id=<?= $value['id']?>">Edit</a>
            <a class="text-center btn btn-danger" href="user-delete.php?id=<?= $value['id']?>">Delete</a>
            <a class="text-center btn btn-success" href="#">View</a>
          </td>
        </tr>
      <?php endforeach ?>
      



    </tbody>
  </table>
</div>

</body>
</html>
