<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Student Portal</title>
</head>
<body>
<h1 class='text-center welcome'>Welcome To Student Portal</h1>
<div class='form'>
    <form method='post' action='./aftersubmit.php'>
        <label for="name"><h5>Name: </h5> </label>
        <input class='name' name='name' type="text" placeholder='Enter Your Name'>
        <br/>
        <label for="rollno"><h5>Roll Number: </h5> </label>
        <input class='rollno' name='rollno' type="text" placeholder='Enter Your Roll Number'>
        <br>
        <input type="submit" name='submit' class='btnsubmit' value='Submit'>
    </form>
</div>
<?php  
include 'conn.php';

?>
</body>
</html>