<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>add</title>
</head>

<body>
  <!-- title -->
  <div class="row mt-5 mb-5 text-center">
    <h2>Tambah Data</h2>
  </div>
  <!-- end title -->
  
  <!-- content -->
  <div class="row justify-content-center">
    <div class="card" style="width: 50%;">
      <div class="card-body">

        <!-- add form -->
        <form action="add.php" method="post">
          <div class="mb-3">
            <label for="input2" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama_yan" id="input2">
          </div>
          <div class="mb-3">
            <label for="input3" class="form-label">Email</label>
            <input type="email" class="form-control" id="input3" name="email_yan">
          </div>
          <div class="mb-3">
            <label for="input3" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="input3" name="alamat_yan">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- end add form -->

      </div>
    </div>
  </div>
  <!-- end content -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>