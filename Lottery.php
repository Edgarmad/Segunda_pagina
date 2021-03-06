<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mexican Lottery</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/icono.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

  <link rel="stylesheet" href="css/gamestyle.css" />
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.php">
				<img width="200" height="40" src="img/logomex.png" alt="">
			</a>
			<!-- nuevo div: rightseccion -->
      <div id="rightseccion">
          <div id="welcomediv">
            <h2 id="welcome">Bienvenido!</h2>
          </div>
          <div class="user-panel">
            <a href="index.php" onclick="logout()">Log out</a>
          </div>
        </div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
      <!-- site menu -->
		</div>
	</header>
  <!-- Header section end -->
	<div id="game">
      <div id="board">
        <table id="myBoard">
          <tbody>
            <tr class="boardRow">
              <td><img src="img/cardback.jpg" onclick="Check(0,0)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(0,1)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(0,2)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(0,3)" /></td>
            </tr>
            <tr class="boardRow">
              <td><img src="img/cardback.jpg" onclick="Check(1,0)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(1,1)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(1,2)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(1,3)" /></td>
            </tr>
            <tr class="boardRow">
              <td><img src="img/cardback.jpg" onclick="Check(2,0)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(2,1)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(2,2)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(2,3)" /></td>
            </tr>
            <tr class="boardRow">
              <td><img src="img/cardback.jpg" onclick="Check(3,0)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(3,1)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(3,2)" /></td>
              <td><img src="img/cardback.jpg" onclick="Check(3,3)" /></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="others">
        <div>
          <button
            id="reset"
            type="button"
            class="btn btn-primary oelements"
            onclick="Reset()"
          >
            Cambiar Cartilla
          </button>
        </div>
        <div>
          <img id="tarjetaActiva" class="oelements" src="img/cardback.jpg" />
          <span id="imgname">
            <p id="cardname" class="oelements"></p>
          </span>
        </div>

        <div>
          <button
            id="iniciar"
            type="button"
            class="btn btn-primary oelements"
            onclick="StartGame()"
          >
            Iniciar Juego
          </button>
        </div>

        <div>
          <button
            id="ganar"
            type="button"
            class="btn btn-primary oelements"
            onclick="CheckWin()"
          >
            Gane
          </button>
        </div>

        <span id="msgdiv">
          <p id="message" class="oelements"></p>
        </span>
      </div>
    </div>

    <!-- <button type="button" class="btn btn-primary" onclick="Reset()">
      Reset Juego
    </button> -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>

	<!--====== Personales ======-->

	<script src="lottery_js/game.js"></script>


	

    </body>
</html>