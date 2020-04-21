<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!--IE-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--frist mobile mwta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show proudts</title>
    <link rel='stylesheet' href="css/bootstrap.css" />
    <link rel='stylesheet' href="css/mystayel.css" />
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
       <![endif]-->

</head>

<body>
    <div class="container-fluid">

        <div class="row" id="nav">
            <div class="col-xs-12">
                <div class="header">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <img class="brand" src="images/1.jpg">

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                                <ul class="nav navbar-nav navbar-right">

                                    <ul class="nav navbar-nav">
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                </ul>
                                <form class="navbar-form navbar-right">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                    <a href="/cardpage" class="btn btn-default" role="button">Cart</a>
                                </form>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-xs-offset-2">
                Product Name:<br>
                Category:<br>
                Num Of Product:<br>
                Description
                <div class="description"></div>
            </div>
            <div class="col-xs-6">
                <img class="img-responsive" id="oscontentimg" src="img/laptopp.jpg">


            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-xs-offset-8">
                <input type="number" id="quantity" name="quantity" min="1" max="100">
                <a class="btn" href="#." target="_blank">Add+</a></div>
        </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
