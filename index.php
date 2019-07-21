<!DOCTYPE html>
<html lang="de">
<head>
  <title>NETSTREAM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="headerstyle.css">
  <link rel="stylesheet" type="text/css" href="sidenavstyle.css">
  <link rel="stylesheet" type="text/css" href="respstyle.css">
  <link rel="stylesheet" type="text/css" href="mainstyle.css">
  <script src="headerscript.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body onresize="checksize()">

  <div class="header">
    <div class="respmenu" onclick="openmenu()"></div>
    <img href="#default" class="logo" src="images/logov2.png" onclick="location.href='.';" onmouseover="this.src='images/logov2hover.png'" onmouseleave="this.src='images/logov2.png'"></img>
    <div class="header-right">
        <button type="submit" class="loginbtn" name="login_user">Anmelden</button>
    </div>
    <div class="searchresp" onclick="opensearch()"></div>
    <div class="suche" id="suche"><i class="material-icons">search</i><form id='search-form'><input type='text' placeholder='Suche' spellcheck="false" class="search-box" maxlength="50" ></form></div>
  </div>

  <div class="sidenav" id="menu">
    <div class="anmeldeinfo">Anmelden oder Registrieren um den vollen Funktionsumfang von NETSTREAM zu nutzen</div>
    <a href="#about">Derzeit Beliebt</a>
    <a href="#services">Neuerscheinungen</a>
    <div id='menu-divider'></div>
    <a href="#clients">Serien</a>
    <a href="#contact">Filme</a>
    <div id='menu-divider'></div>
    <a href="#clients">Favoriten</a>
    <a href="#contact">Meine Liste</a>
    <div id='menu-divider'></div>
    <div style="margin-top: -5px" class="smalltext">
      <a href="#contact" style="font-size: 15px; position: absolute; margin-left: 10px;">Registrieren</a>
      <a href="#contact" style="font-size: 15px; margin-left: 120px">Hilfe</a>
    </div>
    <button type="submit" class="loginbtnresp">Anmelden</button>
    <button type="submit" class="regbtnresp">Registrieren</button>
    <button type="submit" class="helpbtnresp">Hilfe</button>
  </div>

  <div class="main">

    
  </div>

</body>
</html>