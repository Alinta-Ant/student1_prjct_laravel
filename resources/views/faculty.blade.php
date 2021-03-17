<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dept.CS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/faculty" >Faculty</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-lg-6">
            <table class="table">
                    <tr>
                        <td>Faculty Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Department name</td>
                        <td><input type="textbox" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Educational Qualification</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>College</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">SUBMIT</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>