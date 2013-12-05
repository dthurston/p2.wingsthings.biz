<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Booze Hunter">
    <meta name="author" content="Derek Thurston">

    <title>Booze Hunter Project</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Booze Hunter</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Booze</a></li>
                <li class="active"><a href="boozehunter.php">Booze Hunter</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
  <body>
    <h1>Booze Hunter</h1>
    <!-- Standard button -->
    <form>
    <button type="button" class="btn btn-default" onClick="history.go(0)">Reset</button>
    </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script src="/js/booze.js"></script>
    <!--<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.js"></script> -->



    <form>
        <select class="form-control" id="boozetype" onchange="showBooze(this.value)">
            <option value="">Choose Your Booze</option>
            <option value="1">Straight Kentucky Bourbon</option>
            <option value="2">Whiskey</option>
            <option value="3">Wine</option>
            <option value="4">Beer</option>
        </select>
    </form>
    <form>
        <select class="form-control" id="boozesize" onchange="showSize(this.value)">
            <option value="">Choose your size</option>
            <option value="1">Less than 750mL</option>
            <option value="2">750mL to 1000mL</option>
            <option value="3">More than 1000mL</option>
        </select>
    </form>

    <div id="txtHint"><b></b></div>

</body>
</html>