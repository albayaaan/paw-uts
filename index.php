<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <title>index</title>
</head>

<body>
  <!-- header -->
  <div class="top container-fluid text-center pt-3 pb-3 primary">
    <h1>Tabel User</h1>
  </div>
  <!-- end header -->

  <!-- content -->
  <div class="container-md mt-5">

    <!-- add button -->
    <div class="row">
      <div class="col-4">
        <form method="get" action="form_add.php">
          <button type="submit" class="btn btn-primary"><i class="bi bi-plus"></i>Add Data</button>
        </form>
      </div>
    </div>
    <!-- end add button -->

    <!-- table content -->
    <div class="row mt-2">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "connect.php";

          $sql = "SELECT * FROM tbl_yan";
          $results = mysqli_query($conn, $sql);

          while ($row = mysqli_fetch_array($results)) {
          ?>

            <tr>
              <th scope="row"><?= $row["id_yan"]; ?></th>
              <td><?= $row["nama_yan"]; ?></td>
              <td><?= $row["email_yan"]; ?></td>
              <td><?= $row["alamat_yan"]; ?></td>
              <td><a class="bi bi-pencil-fill px-1" href="form_edit.php?id=<?= $row['id_yan']; ?>"></a><a href="delete.php?id=<?= $row['id_yan']; ?>" class="bi bi-trash-fill px-1"></a></td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- end table content -->

  </div>
  <!-- end content -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>