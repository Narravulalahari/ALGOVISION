<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://db.onlinewebfonts.com/c/7d06f75f5be76c96979e0936770794c2?family=Calendas-Plus" rel="stylesheet">
  <style>
    :root {
      --navbar-height: 90px;
      --navbar-bg-color: hsl(334.3, 88.9%, 24.7%);
      --navbar-text-color: hsl(0, 0%, 85%);
      --navbar-text-color-focus: white;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      line-height: 1.6;
    }

    .navbar {
      position:static;
      top: 0;
      left: 0;
      right: 0;
      height: var(--navbar-height);
      background-color: var(--navbar-bg-color);
      display: flex;
      align-items: center;
      justify-content: space-around;
      padding: 0 1rem;
      z-index: 1000;
    }

    .navbar-brand {
      display:flex;
      color: white;
      text-decoration: none;
    }
    .titlee{
      color: white;
      font-family: 'Calendas-Plus';
      font-weight: 800;
      font-size: 33px;
      text-decoration: none;
    }

    .navbar-menu {
      display: flex;
      list-style: none;
      padding: 0;
    }

    .navbar-menu li {
        padding: 0.5rem 1rem;
        margin-left: 1rem;
        border-radius:15px;
    }
 
    .navbar-menu li a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      font-size:18px;
    }
    .navbar-menu li:hover {
     background-color: white; /* Change background color on hover */
    }

    .navbar-menu li:hover a {
    color: var(--navbar-bg-color); /* Change text color on hover */
    }
    .navbar-toggle {
      display: none;
      cursor: pointer;
      background: transparent;
      border: none;
    }

    .icon-bar {
      display: block;
      width: 25px;
      height: 4px;
      margin: 5px 0;
      background-color: var(--navbar-text-color);
    }

    @media screen and (max-width: 700px) {
      .navbar {
      z-index: 1001; /* Ensure navbar is above other content */
      }
      .navbar-toggle {
        display: block;
      }

      .navbar-menu {
      display: none;
      position: absolute;
      top: var(--navbar-height);
      left: 0;
      right: 0;
      background-color: rgba(119,7,55,0.9); /* Adjust the opacity (0.8 in this case) */
      padding: 1rem;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
      z-index: 1000; 
      }

      .navbar-menu.active {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .navbar-menu li {
        margin-bottom: 1rem;
        margin-left: 0;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <a href="main.php" class="navbar-brand"><img src="logoo.png" height="60px" width="60px">&nbsp;&nbsp;&nbsp;<div class="titlee">A L G O V I S I O N</div></a>
    <button class="navbar-toggle" id="navbar-toggle" aria-label="Toggle menu" aria-expanded="false">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <ul class="navbar-menu" id="navbar-menu">
      <li><a href="main.php">Home</a></li>
      <li><a href="visualise.php">Visualise</a></li>
      <li><a href="Practice.php">Practice</a></li>
      <li><a href="about2.php">About</a></li>
      <li style="border:1px solid white;"><a href="#">Logout</a></li>
    </ul>
  </nav>

  <script>
    const navbarToggle = document.getElementById("navbar-toggle");
    const navbarMenu = document.getElementById("navbar-menu");
    let isNavbarExpanded = false;

    navbarToggle.addEventListener("click", () => {
      isNavbarExpanded = !isNavbarExpanded;
      navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
      navbarMenu.classList.toggle("active", isNavbarExpanded);
    });
  </script>
</body>
</html>
