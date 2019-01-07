<!doctype html>
<html lang="en-us">
<head>
    <title>Tyler McKellar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Reset CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap Javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-default bgteal navbar-dark">
        <a class="navbar-brand" href="index.php">Tyler Patrick McKellar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" >About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.php" >Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" >Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tel:5132802231" id="phone"><i class="fas fa-phone fa-2x sr-contact-1"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mailto:tylermckellar@gmail.com"><i class="fas fa-envelope fa-2x sr-contact-4"></i></a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/MistaWizard" target="_blank"><i class="fab fa-github fa-2x sr-contact-2"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/tylermckellar/" target="_blank"><i class="fab fa-linkedin fa-2x sr-contact-3"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/documents/Resume.pdf" target="_blank"><i class="far fa-file fa-2x sr-contact-5"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div id="main-container" class="container border-left border-right">
        <div class="row">
            <div class="col">
                <h1 class="deets">About Me</h1>
            </div>        
        </div>        
        <div class="row mt-3">    
            <div class="col">
                <img src="assets/images/IMG_2306_fixed.jpg" class="img-fluid rounded float-left" id="biophoto" alt="Tyler McKellar" >
                <p>Born in 1984 in the bustling metropolis of Kettering, Ohio, I've always enjoyed electronics, video games, and technology. My original plan upon graduating high school was to attend college for computer related studies. I decided to take a career diversion and attended the International College of Broadcasting in Dayton, Ohio for audio engineering.</p>
                <p>After getting married, moving to Cleveland and raising a 10 year old and 3 year old in the past 11 years, I've decided to get back to what I love and explore a career in the technology industry. After graduating from the Case Wertern Reserve University Coding Boot Camp, I'll have the skills and experience needed to help you complete your web project.</p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container" id="footer-text">
            <span class="text-muted">&copy; <?php echo date("Y"); ?></span>
        </div>
    </footer>
</body>
</html>