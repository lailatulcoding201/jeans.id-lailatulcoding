
<!DOCTYPE Html>
<html>
<head>
    <title>
        Jeans.Id
    </title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Jeans.Id</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="input-group search-form">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="button">Go!</button>
                        </span>
                    </div><!-- /input-group -->
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
