<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="portfolio.css">
    <title>Ridouane Tansouft</title>
    <link rel="shortcut icon" type="portrais/png" href="img/portrais.png" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="home"></div>
    <nav class="navbar fixed-top navbar-expand-lg mynav">
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#home"><?php echo $lang["home"]; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about"><?php echo $lang["about"]; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mywork"><?php echo $lang["My work"]; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact"><?php echo $lang["contact"]; ?></a>
                </li>
            </ul>
        </div>
        <ul class="img">
            <li>
                <img src="img/france.png" id="fr_lang" alt="france">
            </li>
            <li>
                <img src="img/united-kingdom.png" id="en_lang" alt="anglais">
            </li>
        </ul>
        <form method="get" style="display: none;" id="langForm">
                <input type="hidden" name="lang" id="langValue">
            </form>
    </nav>
    <div class="fullcontaner">
        <div id="bot">
            <div id="center">
                <h1 class="animated slideInLeft"><?php echo $lang["h1"]; ?><span id="color"><?php echo $lang["span"]; ?></span></h1>
                <h1 class="animated slideInLeft"><?php echo $lang["h11"]; ?></h1>
            </div>
            <div id="image">
                <img class="animated slideInRight" src="img/pdp.png" alt="pdp" width="451px" height="auto">
            </div>
        </div>
        <!-- <button type="button" href="#cent0" class="btn btn-outline-warning view_work animated fadeIn" >View my work</button> -->
    </div>
    <div class="about" id="about">
        <div id="cent">
            <h1><?php echo $lang["about"]; ?></h1>
            <hr>
        </div>
        <div class="hola">
            <div class="responsive">
                <img src="img/responsive_Plan.png" alt="responsive">
                <h1><?php echo $lang["responsive"]; ?></h1>
                <p><?php echo $lang["responsivep"]; ?></p>
            </div>
            <div class="Intuitive">
                <img src="img/bola_Plan.png" alt="Intuitive">
                <h1><?php echo $lang["Intuitive"]; ?></h1>
                <p><?php echo $lang["Intuitivep"]; ?></p>
            </div>
            <div class="Dynamic">
                <img src="img/sarokh_Plan.png " alt="Dynamic">
                <h1><?php echo $lang["Dynamic"]; ?></h1>
                <p><?php echo $lang["Dynamicp"]; ?></p>
            </div>
        </div>
        <div class="donow">
            <div class="compitence">
                <img src="img/portrais.png" alt="portrais">
                <h1><?php echo $lang["who"]; ?></h1>
                <p><span><?php echo $lang["whop"]; ?></span></p> 
                <br><br>
                <p><?php echo $lang["whop1"]; ?></p>
            </div>
            <div class="contaner" id="hassan">
                <div class="progress HTML"></div>
                <div class="progress_valeu" data-label="HTML"></div>
                <div class="progress CSS"></div>
                <div class="progress_valeu" data-label="CSS"></div>
                <div class="progress JS"></div>
                <div class="progress_valeu" data-label="JavaScript"></div>
                <div class="progress mySQL"></div>
                <div class="progress_valeu" data-label="mySQL"></div>
                <div class="progress PHP"></div>
                <div class="progress_valeu" data-label="PHP"></div>
                <div class="progress Illustrateur"></div>
                <div class="progress_valeu" data-label="Illustrateur"></div>
                <div class="progress Photoshop"></div>
                <div class="progress_valeu" data-label="Photoshop"></div>
            </div>
        </div>
    </div>
    <div class="mywork" id="mywork">
        <div id="cent0">
            <h1><?php echo $lang["My work"]; ?></h1>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="img/ecom_Plan de travail 1.png" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="project">
                                <h1>Project</h1>
                                <h2>Ecommerce</h2>
                            </div>
                            <div class="middle">
                                <div class="text"><a href= "https://github.com/Ridouane18/Ecommerce.git" target="_blank"><button class="btn btn-warning">LEARN MORE</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="img/projects_Plan de travail 1.png" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="project">
                                <h1>Project</h1>
                                <h2>NAME</h2>
                            </div>
                            <div class="middle">
                                <div class="text"><a href= "https://gitlab.com/redtansouft?nav_source=navbar" target="_blank"><button class="btn btn-warning">LEARN MORE</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="img/schoolproject.png" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="project">
                                <h1>Project</h1>
                                <h2>school website</h2>
                            </div>
                            <div class="middle">
                                <div class="text"><a href= "https://github.com/alaeessaki/prog_School_WebSite" target="_blank"><button class="btn btn-warning">LEARN MORE</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="img/cv.png" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="project">
                                <h1>Project</h1>
                                <h2>cv</h2>
                            </div>
                            <div class="middle">
                                <div class="text"><a href= "https://github.com/Ridouane18/cv-" target="_blank"><button class="btn btn-warning">LEARN MORE</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="img/insur.png" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="project">
                                <h1>Project</h1>
                                <h2>InsurFAQ 1.0</h2>
                            </div>
                            <div class="middle">
                                <div class="text"><a href= "https://github.com/Ridouane18/InsurFAQ-1.0" target="_blank"><button class="btn btn-warning">LEARN MORE</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="img/design_Plan de travail 1.png" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="project">
                                <h1>Project</h1>
                                <h2>design</h2>
                            </div>
                            <div class="middle">
                                <div class="text"><a href= "https://github.com/Ridouane18/design" target="_blank"><button class="btn btn-warning">LEARN MORE</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacte" id="contact">
            <div id="cent1">
                <h1><?php echo $lang["contact"]; ?></h1>
                <hr>
                <p><?php echo $lang["contactp"]; ?></p>
            </div>
            <form action="" method="post">
                <div class="input">
                    <input type="text" name="Name" placeholder="Name" required><br>
                    <input type="email" name="email" placeholder="Enter email" required><br>
                    <textarea name="mesg" id="msg" rows="7" style="resize: none" placeholder="your message" required></textarea>
                    <div class="button"><button type="submit" class="btn submit" id="button" name="submit">submit</button></div>
                </div>
            </form>
            <div class="social">
                <a href="https://www.linkedin.com/in/ridouane-tansouft-952868150/" target="_blank"><img src="img/linkedin.png" alt="Avatar" class="image"></a>
                <a href="https://twitter.com/RedouaneTansou" target="_blank"><img src="img/twetter.png" alt="Avatar" class="image"></a>
                <div class="back_home">
                    <a href="#home"><img src="img/backhome.png" alt="Avatar" class="image"></a>
                </div>
                <a href="https://www.facebook.com/redouane.tansouft" target="_blank"><img src="img/facebook.png" alt="Avatar" class="image"></a>
                <a href="https://www.instagram.com/redouane.tansouft/" target="_blank"><img src="img/insta.png" alt="Avatar" class="image"></a>
            </div>
        </div>
        <script src="style.js"></script>
</body>
<?php
$headers = "From: redtansouft@gmail.com" . "\r\n" .
    "MIME-Version: 1.0" . "\r\n" .
    "Content-Type: text/html; charset=utf-8";
// var_dump($result);
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $mail = $_POST['email'];
    $message = $_POST['mesg'];
    mail("redtansouft@gmail.com", "From: $mail", "$name said: $message", $headers);
}
?>

</html>