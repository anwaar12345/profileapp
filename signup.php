<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>
<body>

    
<div class="container">
    <hr>
    
    
    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
    <header class="card-header">
        <a href="signin.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
        <h4 class="card-title mt-2">Sign up</h4>
    </header>
    <article class="card-body">
    <form method="POST" action="">
        <div class="form-row">
            <div class="col form-group">
                <label>First name </label>   
                  <input type="text" class="form-control" name="fname">
            </div> <!-- form-group end.// -->
            <div class="col form-group">
                <label>Last name</label>
                  <input type="text" class="form-control" name="lstname">
            </div> <!-- form-group end.// -->
        </div> <!-- form-row end.// -->
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="" name="email">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div> <!-- form-group end.// -->
        <div class="form-group">
                <label class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="male" checked>
              <span class="form-check-label"> Male </span>
            </label>
            <label class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="female">
              <span class="form-check-label"> Female</span>
            </label>
        </div> <!-- form-group end.// -->
        <div class="form-row">
            <div class="form-group col-md-6">
              <label>City</label>
              <input type="text" class="form-control" name="city">
            </div> <!-- form-group end.// -->
            <div class="form-group col-md-6">
              <label>Country</label>
              <select id="inputState" class="form-control" name="country">
                  <option value="Pakistan">Pakistan</option>
                  <option value="Russia">Russia</option>
                  <option value="USA">United States</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Turkey">Turkey</option>
              </select>
            </div> <!-- form-group end.// -->
        </div> <!-- form-row.// -->
        <div class="form-group">
            <label>Create password</label>
            <input class="form-control" type="password" name="password">
        </div> <!-- form-group end.// -->  
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Register  </button>
        </div> <!-- form-group// -->      
        
   
    </form>
    </article> <!-- card-body end .// -->

    
</div> <!-- card.// -->
    </div> <!-- col.//-->
    
    </div> <!-- row.//-->
    
    
    </div> 
    <!--container end.//-->
    
    
</body>
</html>






