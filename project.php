<?php
    $project1Features = [
        "•Detailed Entries: Comprehensive descriptions and images of high-end food and beverages.",
        "•Interactive Design: Engaging layout with smooth navigation.",
        "•Responsive Layout: Optimized for both desktop and mobile viewing."
    ];
    $project2Features = [
        "•Even and Odd Game: Players bet on whether the number will be even or odd.",
        "•Toss Coin Game: Simulates a coin toss with heads or tails outcomes.",
        "•Lucky 21 Game: A card game where players aim to reach a total of 21.",
        "•Skills Demonstrated:"
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
        <label><span>PROJECT</span></label>
             <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="project.php"><span>PROJECT</span></a></li>
                <li><a href="about.php">ABOUT</a></li>
            </ul>
        </nav>
    </header>

    <section class="home">
      <div class="homeText">
        <h3>MY-WEBY WEBSITE</h3>

        <p>Project Title: The World's Most Expensive Food and Drinks

         <br><br>Description:
         <br>I developed a visually appealing <span>HTML and CSS</span> website showcasing the most luxurious and costly food and drinks around the globe. This project highlights intricate design elements and detailed information about rare and extravagant culinary experiences.

         <br><br>Features:
         <?php foreach ($project1Features as $project1Feature): ?>
                <p><?php echo $project1Feature; ?></p>
          <?php endforeach; ?>
      </p>
    </div>
    </section>

    <section>
      <div class="projectVideo">
       <video src="video1.mp4" alt="My Weby" class="project" controls autoplay muted loop></video>

       <br><a href="https://jactv.github.io/my-weby/webY2.html"><button>CLICK TO VIEW</button></a>
      </div>
    </section>
    
    <!-- PROJECT 2 -->
    <section class="home">
    <div class="homeText">
        <h3>Project Title: Game Betting Java Application</h3>

        <p>Description:
        <br>I developed a <span>Java</span> application for various betting games, including Even and Odd, Toss Coin, and Lucky 21. This project demonstrates my ability to implement game logic and handle user interactions effectively.

        <br><br>Features:
        <?php foreach ($project2Features as $project2Feature): ?>
                <p><?php echo $project2Feature; ?></p>
          <?php endforeach; ?>

        <br><br>•Java Programming: Implemented game logic and algorithms.
        User Input Handling: Managed user interactions and game outcomes.
        Randomization: Utilized random number generation for game results.
        </p>
    </div>
    </section>

    <section>
      <div class="projectVideo">
       <video src="video2.mp4" alt="My Weby" class="project" controls autoplay muted loop></video>

       <br><a href="https://github.com/JacTv/Codey"><button>CLICK TO VIEW</button></a>
      </div>
    </section>

</body>
</html>