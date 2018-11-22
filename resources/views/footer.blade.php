<!DOCTYPE html>
<html>

<head>
    <title>Footer with Button and Logo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
</head>

<body>
    <footer id="myFooter">
        
        <div class="container-fluid">
            
            <div class="col-sm-2">
                <img id="logo" class="img-fluid" src="<?php echo asset ('img/logo-ex-7.png'); ?>" />
            </div>
            
            <div class="col-sm-2">
                <h5>About us</h5>
                <ul>
                    <li><a href="#">Informações</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </div>

            <div class="col-sm-2">
                <h5>About us</h5>
                <ul>
                    <li><a href="#">Informações</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Support</h5>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Help desk</a></li>
                    <li><a href="#">Forums</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <div class="social-networks">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
                <button type="button" class="btn btn-default">Contato</button>
            </div>
         
        </div>
        
        <div class="footer-copyright">
            <p> © 2016 Copyright Text </p>
        </div>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>