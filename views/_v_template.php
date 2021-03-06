<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Common CSS/JSS -->
    <!-- Load Twitter Bootstrap -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" type="text/css">
    <!-- Load Jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
</head>

<body>
    <div class="container">
    <div id="nav">

    <!-- Menu -- everyone gets the Home link -->
        <a href='/'>Home | </a>

    <!-- Menu for users who are logged in -->
        <?php if($user): ?>
        <a href='/users/logout'>Logout | </a>
        <a href='/users/profile'>Profile | </a>
        <a href='/posts/add'>Add Post | </a>
        <a href='/posts/index'>View Posts | </a>
        <a href='/posts/users'>View Users | </a>

        <!-- Menu options for users who are not logged in -->
    <?php else: ?>
        <a href='/users/signup'>Sign up | </a>
        <a href='/users/login'>Log in </a>

    <?php endif; ?>

    </div>

    <div id="section">
        <br>
        <!-- Display the page content -->
        <?php if(isset($content)) echo $content; ?>
        <!-- Display the body -->
        <?php if(isset($client_files_body)) echo $client_files_body; ?>
    </div>

    </div> <!-- End container -->

</body>
</html>
