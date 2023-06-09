<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php if (isset($errors) && is_array($errors)){?>
        <ul>
            <?php  foreach($errors as $error){?>
                <li><?php echo $error ?></li>
                <?php }?>
        </ul>
    <?php }?> 
        <div class="container text-center">
  <div class="row">
    <div class="col-md-3 offset-4 bg-primary-subtle">
        <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputLogin" class="form-label">Login</label>
    <input type="text" name = "login" class="form-control" id="exampleInputLogin">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
</form>
    </div></div></div>
</body>
</html>