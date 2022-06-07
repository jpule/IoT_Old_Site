<?php
$page = "Home";
?>
<!doctype html>
<html lang="en">

<head>
    
<!----- Required meta tags ----->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!----- Bootstrap CSS ----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    
    <link rel="shortcut icon" type="image/png" href="/images/favicon/favicon.png"/>

    <title>Home | IoTComms</title>
    
    
    <?php require_once('styles.php'); ?>
   
   
</head>

<body>
<!----- Navigation ----->
<?php require_once('header.php'); ?>
<br/>

<!----- Image Slider ----->
<div class="container">
    <section>
        <div id="slides" class="carousel slide carousel-fade" data-ride="carousel">
            
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
            </ul>
                
            <div class="carousel-inner">
                    
                <div class="row h-25">
                    
                    <div class="carousel-item active" data-interval="10000">
                        <img  class="d-block w-100" src="images/carousel/iot8.jpg" height="500px" alt="First Slide">
                            <div class="carousel-caption d-none d-md-block">
            	                <h1>Stay connected when it matters.</h1>
                            </div>
                    </div>
                    
                    
                    <div class="carousel-item" data-interval="10000">
                        <img  class="d-block w-100" src="images/carousel/iot5.jpg" height="500px" alt="Second Slide">
                    </div>
            	    
                </div>
            
            </div>
            	
        </div>
    </section>
    <br/>
            
</div>
        
        
        
<!----- Footer ------>
<?php require_once('footer.php'); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>