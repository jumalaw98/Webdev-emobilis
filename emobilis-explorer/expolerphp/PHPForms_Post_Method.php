<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP | Forms </title>
</head>
<body>

<form action="PHPFormAnswer.php" method="post">  <!--form post method is secure and has a limit of characters-->
    <label for="Identity"> Sir Name </label> <br>
    <input type="text"name="name"id="Identity"> <br>
    <label for="Email"> Email Address </label> <br>
    <input type="text"name="name"id="Email"> <br>
    <label for="Type"> Gender </label> <br>
    <input type="text"name="name"id="Gender"> <br>
    <input type="submit" value="Click To Register"> <br>
</form>


</body>
</html>
