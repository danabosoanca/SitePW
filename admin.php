<?php  include('prices.php');
include_once('connectiom.php');
$result=mysqli_query($conn,"SELECT * from contact") or die("Failed to query database ".mysql_error());
$result1=mysqli_query($conn,"SELECT * from rezervari") or die("Failed to query database ".mysql_error());
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $rec=mysqli_query($db,"SELECT * FROM preturi where id='$id'");
    $record=mysqli_fetch_array($rec);
    $activitate=$record['activitate'];
    $pret=$record['pret'];
    $durata=$record['durata'];
    $id=$record['id'];

}
?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy people</title>
    <link rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="lightbox.min.css">
    <script src="lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet" />

</head>


<body>

    <!--START MENU-->

    <div class="container">
        <div class="hamburger-menu">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
            <span>Close</span>
        </div>
        <header class="header">
            <div class="img-wrapper">
                <img src="images/home4.jpg">
            </div>
            <div class="banner">
                <h1>Bun venit in Orsova</h1>
                <p>Nu ai nevoie de magie să dispari; ai nevoie doar de o destinație</p>
                <p class="happy-text">Happy People e aici sa te ajute</p>
                <div class="img-happy">
                    <img src="images/happy2.png">
                </div>
            </div>
        </header>
        <section class="sidebar">
            <ul class="menu">
               
                
                <li class="menu-item"><a href="rezervari.php" class="menu-link" data-content="Rezervari">Rezervari</a>
                </li>
                <li class="menu-item"><a href="mesaje.php" class="menu-link" data-content="Mesaje">Mesaje</a>
                </li>
                <li class="menu-item"><a href="crud.php" class="menu-link" data-content="Preturi">Preturi</a>
                </li>
                <li class="menu-item"><a href="logout.php" class="menu-link" data-content="Logout">Logout</a>
                </li>
            </ul>
        </section>

        <!--END MENU-->

        
        <!--START FOOTER-->

        <footer class="footer">
            <div class="footer-content">
                <p class="copyright">
                    Copyright &copy; 2020, Bosoancă Maria-Daniela
                </p>
                <div class="social-list">
                    <a href="https://www.facebook.com/dana.bosoanca/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <a href="#" class="scroll-btn">
        <i class="fas fa-arrow-up"></i>
    </a>

        <!--END FOOTER-->

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="tilt.js"></script>

    
</body>

</html>

