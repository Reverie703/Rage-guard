<?php
include 'functions.php';


$gamesResult = getAllGames();


$comingSoonResult = getComingSoonGames();

if (isset($_POST['purchase_game'])) {
    $userId = 1; 
    $gameId = $_POST['game_id'];
    purchaseGame($userId, $gameId);
    echo "Game purchased successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rage Guard - Online Video Game Store</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Rage Guard</h1>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#games">Games for Sale</a></li>
        <li><a href="#coming-soon">Coming Soon</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="home">
      <h2>Welcome to Rage Guard!</h2>
      <p>Rage Guard is your go-to destination for purchasing and downloading the latest video games without the hassle of shipping.</p>
      <p>Our website started in 2024 with a mission to provide gamers with easy access to their favorite titles at affordable prices.</p>
    </section>
    <section id="about">
      <h2>About Us</h2>
      <p>Rage Guard was founded in 2024 with the vision of revolutionizing the way gamers purchase and access video games. We understand the frustration of waiting for physical copies to arrive, which is why we offer a seamless online purchasing experience.</p>
      <p>Through our platform, users can browse an extensive catalog of games, make secure transactions, and instantly download their purchases to start playing right away.</p>
    </section>
    <section id="games">
      <h2>Games for Sale</h2>
      <div class="game">
        <img src="MC.png" alt="Game 1">
        <h3>Minecraft</h3>
        <p>Size: 1 GB</p>
        <p>Release Date: 18-11-2011</p>
        <p>Cost: $7.99</p>
      </div>
      <div class="game2">
	<img src="SN.png" alt="Game 2">
	<h3>Subnautica</h3>
	<p>Size : 20 GB</p>
	<p>Release Date: 16-12-2014</p>
	<p>Cost: $29.99</p>
     </div>
      <div class="game3">
	<img src="SM.png" alt="Game 3">
	<h3>Sims 4</h3>
	<p>Size : 60 GB</p>
	<p>Release Date: 2-9-2014</p>
	<p>Cost: $29.99</p>
     </div>
    
    </section>
    <section id="coming-soon">
      <h2>Coming Soon</h2>
      <div class="game">
        <img src="coming_soon_game.jpg" alt="Coming Soon Game">
        <h3>Coming Soon Game</h3>
        <p>Release Date: [Release Date]</p>
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2024 Rage Guard. All rights reserved.</p>
  </footer>
</body>
<script src="index.js"></script>
</html>