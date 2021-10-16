
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student | iSchool Admin</title>
   <!-- stylesheets -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css" integrity="sha512-6KY5s6UI5J7SVYuZB4S/CZMyPylqyyNZco376NM2Z8Sb8OxEdp02e1jkKk/wZxIEmjQ6DRCEBhni+gpr9c4tvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!-- google fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

            <!-- custom css -->
            <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">

</head>
<body>
<div class="wrapper">
        <div class="body-overlay">

            <?php
                include "sidebar.php";
            ?>

<div id="content">

            <?php
                include "header.php";
            ?>
        <!-- form -->
        <div class="form">
            <div class="form-head">
                <h1>Add Student</h1>
            </div>
            <div class="form-main">
                <form action="#" method="post">
                <div class="input">
                <input type="text" name="username" id="" placeholder="Username">
                </div>
                <div class="input">
                <input type="password" name="password" id="" placeholder="password">
                </div>
                <div class="input">
                <input type="text" name="full-name" id="" placeholder="Full Name">
                </div>
                <div class="input">
                <input type="number" name="rollno" id="" placeholder="Roll Number">
                </div>
                <div class="input">
                <input type="email" name="email" id="" placeholder="Email ID">
                </div>
                <div class="input">
                <input type="number" name="telephone" id="" placeholder="Mobile Number">
                </div>
                <div class="select">
                    <select name="course" id="">
                        <option value="course">Select Course</option>
                        <option value="bca">BCA</option>
                        <option value="bsc">BSC</option>
                        <option value="bsc-it">BSC IT</option>
                    </select>
                </div>
                <div class="select">
                    <select name="year" id="">
                    <option value="year">Select Year</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3-it">3</option>
                    </select>
                </div>
                <div class="submit-btn">
                    <input type="submit" value="Add Student" name="add-stud">
                </div>
                </form>
            </div>
        </div>
</div>
        </div>
</div>

</body>
</html>