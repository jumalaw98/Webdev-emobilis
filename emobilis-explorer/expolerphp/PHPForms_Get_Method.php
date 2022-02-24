<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="PHPStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP | Forms Get Method</title>
</head>
<body>
<h1>PHP | Forms Get Method</h1>

<form action="PHPGetForm.php" method="get">
    <label for="First Name"> Sir Name </label> <br>
    <input type="text" name="name"> <br>
    <label for="Second Name"> First Name </label> <br>
    <input type="text" name="name2"> <br>
    <label for="School"> Institution </label> <br>
    <input type="text" name="Institution"> <br>
    <label for="School"> Select Your Course </label> <br>
    <input list="Destination" name="List"CoursesOffered="List"> <br>
    <datalist id ="Destination">
        <option value="Web Development">
        <option value="Object Oriented Programming (Java)">
        <option value="Object Oriented Programming (Visual Basic 6.0)"
        <option value="Python">
        <option value="C++">


        </option>

    </datalist>

<input type="submit" value="ENTER">
    <button type="reset">CLEAR</button>


<!--
    <input list="Destination" id="" name="">
    <datalist id ="Destination">
        <option value="Kenya">
        <option value="Tanzania">
        <option value="Uganda">

        </option>


    </datalist>-->
</form>



</body>
</html>
