<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Form Handling</title>
</head>
<body>

<?php
// Becuase the form is POST, we want to capture the form using the POST global variable

?>

<form action="" method="post">

    <label for="firstname">firstname</label>
    <input type="text" name="firstname" , value="">

    <label for="lastname">lastname</label>
    <input type="text" name="lastname" , value="">

</form>

</body>
</html>

<?php
function pre_r($array)
{

    echo '<pre>';
    print_r($array);
    echo '</pre>';


}
?>
