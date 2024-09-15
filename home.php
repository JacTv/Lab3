<?php
    $name = "JUN ARVIN E. CRUZ";
    $niche = "P R O G R A M M E R";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
        <label>MY <span>PORTFOLIO</span></label>
             <ul>
                <li><a href="home.php"><span>HOME</span></a></li>
                <li><a href="project.php">PROJECT</a></li>
                <li><a href="about.php">ABOUT</a></li>
            </ul>
        </nav>
    </header>

    <section class="home">
        <div class="homeText">
           <h1><?php echo $name; ?></h1>
           <h3><?php echo $niche; ?></h3>
           <p>A programmer writes and maintains code to create and improve software applications, using various programming languages to solve problems and implement solutions. They test, debug, and update their code, often collaborating with other developers and stakeholders to meet project requirements.</p>
        
        </div>
        <div class="homePic">
             <img src="Formal.jpg" alt="My Picture" class="profile-pic">
        </div>
    </section>

    <footer>
        <p>&copy; MY PORTFOLIO</p>
    </footer>

</body>
</html>