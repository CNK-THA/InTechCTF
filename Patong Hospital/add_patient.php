<!doctype html>

<html>
    <head>
    <title>Add Patient</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>



<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand">          </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container" style="margin-top:1cm;">
    <form id="login-form" class="form" action="home.php" method="post">
        <div class="row">
            <div class="col">
            <div class="form-group">
                <label for="name" class="text-info">Name:</label><br>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name" class="text-info">Condition:</label><br>
                <textarea class="form-control" name="condition" id="condition"></textarea>
                
            </div>
            <div class="form-group">
                <label for="date" class="text-info">Date admitted:</label><br>
                <input class="form-control" type="date" value="2021-04-19" id="date">
            </div>

            </div>
            <div class="col">
            <div class="form-group">
                <label for="address" class="text-info">Address:</label><br>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="Medication History" class="text-info">Medication History:</label><br>
                <textarea class="form-control" name="medHistory" id="medHistory"></textarea>
            </div>
            <div class="form-group">
                <label for="Remarks" class="text-info">Remarks:</label><br>
                <textarea class="form-control" name="remarks" id="remarks"></textarea>
            </div>

            
            </div>
        </div>

        <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            
        
    </form>
</div>




    
</body>

</html>