<?php
session_start();

require_once('function.php');
if (isset($_SESSION['old_data'])) {
    $old = $_SESSION['old_data'];
    $errors = $_SESSION['errors'];
}

//dd($_SESSION) ; 
session_unset();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class=" mb-4">Application Name :AAST_BIS class Register </h1>
        <h3 class="dem">* Required Field</h3>
        <form action='user_data.php' method='POST'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="between 3 and 15 charchters without special character" name="Name" value="<?= $old['Name'] ?? ' ' ?>" />
            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your E-Mail" name="email" value="<?= $old['email'] ?? ' ' ?>" />
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Group</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Group" name="Group" value="<?= $old['Group'] ?? ' ' ?>" />
            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Class details</label>
                <textarea name="Class_details" class="form-control" value="<?= $old['Class_details'] ?? ' ' ?>"></textarea>
            </div>

            <div class="mb-3">
                <label class=" p-2"> Gender</label>
                <label>
                    <input type="radio" name="language" value="php">
                    male
                </label>
                <label>
                    <input type="radio" name="language" value="html">
                    female
                </label>
            </div>


            <!--some    -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Select Courses</label>
                <label for="cars">Choose a car:</label>
                <select class="form-control" id="cars" name="cars" size="4" multiple>
                    <option value="volvo">PHP</option>
                    <option value="saab">JAVA SCRIPT</option>
                    <option value="fiat">CSS</option>
                    <option value="audi">HTML</option>
                </select>
            </div>

            <label>
                Agree
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">

            </label> <br>

            <button type="submit" class="btn btn-primary">Submit</button>
            




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>