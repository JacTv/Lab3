<?php
   $personalInfos = [
     "Location: Baliuag, Bulacan",
     "Age: 20",
   ];
   $hobbies  = [
    "•Playing Piano",
    "•Online Games",
    "•Travelling"
   ];
   $skills = [
    "•Front-End Development (HTML, CSS, JavaScript)",
    "•Crafting intuitive and aesthetically pleasing user interfaces",
    "•Time Management Skill"
   ];
   $about = "• A passionate front-end developer with a love for playing the piano and online games. Skilled in creating engaging and responsive web experiences.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
        <label> <span>ABOUT</span></label>
             <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="project.php">PROJECT</a></li>
                <li><a href="about.php"><span>ABOUT</span></a></li>
            </ul>
        </nav>
    </header>

    <section class="home">
        <div class="homeText">
        <br><h1>Jun Arvin Cruz</h1>
        <?php foreach ($personalInfos as $personalInfo): ?>
        <h3><?php echo $personalInfo; ?></h3>
        <?php endforeach; ?>

        <p><span>About Me:</span>
        <br><br>
        <?php echo $about; ?>
        </p>

        <p><span>Hobbies:</span></p>
        
          <?php foreach ($hobbies as $hobby): ?>
                <p><?php echo $hobby; ?></p>
          <?php endforeach; ?>
        

        <p><span>Skills and Knowledged:</span>
           <?php foreach ($skills as $skill): ?>
                <p><?php echo $skill; ?></p>
           <?php endforeach; ?>
           <br><br>
        </p>
        </div>
    </section>
</body>
</html>