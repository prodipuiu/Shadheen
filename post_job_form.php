<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Post job</title>
</head>
<body >

  <div class="container">

  <div class="form-div text-center w-50 m-auto mt-lg-5 shadow-lg p-5 mb-5">
    <h1>Post A Job</h1>
  <form action="upload_job.php" method="POST">
    <input class="form-control my-2" type="text" name="title" placeholder="Job title" required>
    <input class="form-control my-2" type="text" name="job-type" placeholder="Job type" required>
    <input class="form-control my-2" type="number" name="salary" placeholder="Salary" required>
    <input class="form-control my-2" type="text" name="location" placeholder="Location" required>
    <input class="form-control my-2" type="text" name="keyword" placeholder="Keyword" required>
    <!-- <input class="form-control my-2" type="text" name="employeer" placeholder="Employeer" required> -->
    <textarea class="my-2 form-control"  name="description" id="description"  placeholder="Job Description" required ></textarea>
    <input class="form-control my-2" type="date" name="date" required>
    
    <!-- <p>Boosted Til?</p> -->
    <input class="btn btn-primary" name="submit" type="submit" value="Submit">
  </form>
</div>
</div>




    



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>