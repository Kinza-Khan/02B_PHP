<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container p-4">
                <form action="" method="post">
                        <div class="form-group">
                          <label for="">Name</label>
                          <input type="text" name="userName" id="" class="form-control">
                        </div>
                        <button name="sub" type="submit" class="btn btn-info">Submit</button>
                </form>
        </div>     

        <?php
        if(isset($_POST['sub'])){
            $uName = $_POST['userName'];
            echo $uName;
        }

        // if(isset($_GET['sub'])){
        //     $uName = $_GET['userName'];
        //     echo $uName;
        // }
        ?>
</body>
</html>