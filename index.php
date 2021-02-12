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
pre_r($_POST);
pre_r($_GET);

// Now that we have the post data, we need to make sure the submit var exists
// using if (isset(global))

if (isset($_GET['submit'])) {
//if (isset($_POST['submit'])) { // If the submit POST is set (Form Submitted).
    // Using a string literal for template
    // dot operator works for chaining functionality, need to learn the limitations of this.
    echo "First name: " . $_GET['firstname'] . '<br />';
    echo "Last name: " . $_GET['lastname'] . '<br />';

}
?>
<hr>

<!--<form action="" method="post">-->
<form action="" method="get">
    <label for="firstname">firstname</label>
    <input type="text" name="firstname" , value="">

    <label for="lastname">lastname</label>
    <input type="text" name="lastname" , value="">

    <hr>

    <button type="submit" name="submit" value="submit">Submit</button>
</form>

</body>
</html>

<?php
function pre_r($array)
{ // We can notice that the data is yoinked in as an array, with the top input elements arriving at the top of the stack.
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>




































