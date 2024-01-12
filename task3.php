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
    
  <div class="container">
    <form action="" method="post">
        <div class="form-group">
          <label for="">Enter Number</label>
          <input type="text" name="enterNumber" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button type="submit" name="printTable" class="btn btn-info">Submit</button>
    </form>
  
       <?php
                if(isset($_POST['printTable'])){
                    $number = $_POST['enterNumber'];
                    ?>
                            <table class="table">
                                <tbody>
                                    <?php 
                                    for($i= 1 ; $i<=$number; $i++){
                                    ?>
                                    <tr>
                                        <td><?php echo $number?></td>
                                        <td><?php echo 'x'?></td>
                                        <td><?php echo $i?></td>
                                        <td><?php echo '='?></td>
                                        <td><?php echo $i*$number?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                   
                                </tbody>
                            </table>
                    <?php
                       } 
                  ?>

</div>
  </body>
</html>