<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE);
        include_once './checkboxClass.php';
        $checkBoxClass=new checkboxClass();
        if(isset($_POST["submit"])){
            $countryValue=  implode(",",$_POST["Country"]);
            echo $checkBoxClass->updateCheckbox($countryValue, $_GET["id"]);
        }
        $list=$checkBoxClass->listCheckbox("Where Id='$_GET[id]'");
        $checkboxvalues=  explode(",", $list[0]["Cvalues"]);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Checkbox List</title>
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">
        <?php
        if(in_array("India", $checkboxvalues)){
            $checkedValue="checked='checked'";
        }
        if(in_array("USA", $checkboxvalues)){
            $checkedValue1="checked='checked'";
        }
        if(in_array("Australia", $checkboxvalues)){
            $checkedValue2="checked='checked'";
        }
        if(in_array("Europe", $checkboxvalues)){
            $checkedValue3="checked='checked'";
        }
        if(in_array("Italy", $checkboxvalues)){
            $checkedValue4="checked='checked'";
        }
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]."?id=$_GET[id]"; ?>" method="post">
            <input type="checkbox" id="Country" name="Country[]" <?php echo $checkedValue; ?> value="India">India<br/>
            <input type="checkbox" id="Country" name="Country[]" <?php echo $checkedValue1; ?> value="USA">USA<br/>
            <input type="checkbox" id="Country" name="Country[]" <?php echo $checkedValue2; ?> value="Australia">Australia<br/>
            <input type="checkbox" id="Country" name="Country[]" <?php echo $checkedValue3; ?> value="Europe">Europe<br/>
            <input type="checkbox" id="Country" name="Country[]" <?php echo $checkedValue4; ?> value="Italy">Italy<br/>
            
            <br/><br/>
            <input type="submit" id="submit" name="submit" value="Submit Values" class="btn btn-primary">
        </form>
    </div> <!-- /container -->
  </body>
</html>