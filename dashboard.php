<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="dashboard.css">
    <title>E-Class || Profile</title>
</head>
<?php
$students = array("19BCE0622", "19BCE0651", "19BCE0669", "18BCE2180");
echo "I like " . $students[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<body>
    <nav>
        <h1><a href="/">E-class</a></h1>
            <div class="buttons">
                <button><a href="login.html">Login</a></button>
            </div>
    </nav>
    <div class="container">
        <div class="sideNav activeNav">
            <button><i class="fas fa-chevron-right"></i></button>
            <ul>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="dashboard.html">Classrooms</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="logout.html">Logout</a></li>
            </ul>
        </div>
        <div class="dashboard activeNav">
            <h1>Faculties</h1>
            <div class="cardList">
                <?php
                    for($i=0;$i<count($students);$i++){
                        echo "<a class='card'><div class='logo'><img width='100' height='100' src='https://formbharo.com/wp-content/uploads/2021/04/vit.png'></div>".$students[$i]."</a>";                    
                    }
                ?>
                <a class="add" href="{% url 'addFaculty' %}">
                    Add Faculty
                </a>
            </div>
        </div>
    </div>    
</body>
</html>