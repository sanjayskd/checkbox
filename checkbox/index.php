<?php
    if(isset($_POST["submit"])){
        $countryarr=$_POST["Country"];
        $newvalues=  implode(",", $countryarr);
        include_once './checkboxClass.php';
        $checkBoxClass=new checkboxClass();
        echo $checkBoxClass->addtoDatabase($newvalues);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Save Checkbox to Database</title>
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="checkbox" id="Country" name="Country[]" value="India">India<br/>
            <input type="checkbox" id="Country" name="Country[]" value="USA">USA<br/>
            <input type="checkbox" id="Country" name="Country[]" value="Australia">Australia<br/>
            <input type="checkbox" id="Country" name="Country[]" value="Europe">Europe<br/>
            <input type="checkbox" id="Country" name="Country[]" value="Italy">Italy<br/>
            
            <br/><br/>
            <input type="submit" id="submit" name="submit" value="Submit Values" class="btn btn-primary">
        </form>
    </div> <!-- /container -->
  </body>
</html>