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
        <button type="submit" name="findCode" class="btn btn-info">Submit</button>
    </form>
  </div>
        <?php
        if(isset($_POST['findCode'])){

            $userNumber = $_POST['enterNumber'];
            $ufoneCodes  = "0331,0332,0333,0334,0335,0336";
            $ufoneCodesArray = explode(',',$ufoneCodes);
            // print_r($ufoneCodesArray);
            // echo "<br>";
            $userNumberSplit = str_split($userNumber,4);
            // print_r($userNumberSplit);
            foreach($ufoneCodesArray as $code){
                // $com = strcmp($code,$userNumberSplit[0]);
                    if($code == $userNumberSplit[0] ){
                            echo "this is Ufone Number and your code is ".$userNumberSplit[0];
                    }
            }

        }
        ?>
  </body>
</html>