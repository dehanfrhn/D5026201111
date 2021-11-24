<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/praktikum2.css">
</head>
<body>
  <!-- Header -->
  <section class="d-flex justify-content-center align-items-center header">
    <h1 class="mx-3"> Javascript Form Validation</h1>
  </section>


  <!-- Form -->
  <form class="container body-form d-flex flex-column justify-content-between align-items-stretch">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingFullname" placeholder="fullname" required>
      <label for="floatingFullname">Full Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingUsername" placeholder="username" required>
      <label for="floatingUsername">Username</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingEmail" placeholder="email" required>
      <label for="floatingEmail">Email</label>
    </div>
    <div>
      <select class="form-select select" aria-label="Default select example" required>
        <option selected disabled>State</option>
        <option value="indonesia">Indonesia</option>
        <option value="croatia">Croatia</option>
        <option value="russia">Russia</option>
      </select>
    </div>
    <div class="form-floating">
      <input type="address" class="form-control" id="floatingAddress" placeholder="address" required>
      <label for="floatingAddress">Address</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingZipcode" placeholder="zipcode" required>
      <label for="floatingZipcode">Zip Code</label>
    </div>
    <div>
      <button type="submit" class="btn btn-outline-warning">Check Form</button>
    </div>
  </form>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
  <script src="js/praktikum2.js"></script>
</body>
</html>