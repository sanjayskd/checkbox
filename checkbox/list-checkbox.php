<?php
        include_once './checkboxClass.php';
        $checkBoxClass=new checkboxClass();
        $list=$checkBoxClass->listCheckbox("");
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
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>Values</th><th>Action</th>
                </tr>
            </thead>
            <?php
            if(count($list)){
                foreach ($list as $value) {
                    echo "<tr><td>$value[Cvalues]</td><td><a class='btn btn-primary btn-sm' href='edit-checkbox.php?id=$value[Id]'>Edit</a></td></tr>";
                }
            }
            ?>
        </table>
    </div> <!-- /container -->
  </body>
</html>