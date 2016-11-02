<html>
    <head>
        <title>Welcome</title>
           <link rel="stylesheet" href="site.css">
    </head>
<body>
    <div class="access-box">
    <h1 class="centered">Thanks for visiting, <?php echo $_POST["name"]; ?>!</h1>
<!-- Your email address is: <?php echo $_POST["email"]; ?> -->
 <ul>
     <li class="active"><a href="index.html">Home</a></li>
                    <li id="s" class="active"><a href="about.html">About</a></li>
                    <li class="active"><a href="current.html">Current</a></li>
                    <li class="active"><a href="https://github.com/johnlazzarini">GitHub</a></li>
                    <li class="active"><a href="https://www.linkedin.com/in/john-lazzarini">LinkedIn</a></li>
                    <li class="active"><a href="visitorlog.php">VisitorLog</a></li>
                </ul>
    </div>
</body>
</html>