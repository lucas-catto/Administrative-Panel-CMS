<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrative Panel</title>
        <!-- BootStrap Import -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!-- Header css -->
        <link rel="stylesheet" href="./css/header.css">
        <!-- Own css -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <!-- Criando Painel CMS 1/8 -->
        <nav class="navbar navbar-default"> <!-- default --> <!-- navbar-fixed-top -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        
                    <span class="sr-only">Toogle Navigation</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Administrative Panel</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Register Team</a></li>
                        <li><a href="#">Edit About</a></li>
                        <li><a href="#">Manage team</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Log Out <span class="glyphicon glyphicon-off"></span></a></li>
                    </ul>
                </div>
            </div> <!-- container -->
        </nav>

        <!-- Criando Painel CMS 2/8 -->

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Control Panel</h2>
                    </div>
                    <div class="col-md-3">
                        <p>Your last login was in 00/00/00 <span class="glyphicon glyphicon-time"></span></p>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </header>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>
