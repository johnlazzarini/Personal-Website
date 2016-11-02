
<head>
    <title>PHP Visitor Log Demo</title>
    <link rel="stylesheet" href="site.css">
</head>
<html>
<body>
    <div class="access-box">
        <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="active"><a href="about.html">About</a></li>
                    <li class="active"><a href="current.html">Current</a></li>
                    <li class="active"><a href="https://github.com/johnlazzarini">GitHub</a></li>
                    <li class="active"><a href="https://www.linkedin.com/in/john-lazzarini">LinkedIn</a></li>
                </ul>
    <h1>I'm now learning PHP</h1>
    <h4>Leave your first name to see my progress.</h4>

<form action="welcome.php" method="post">
First Name:  <input type="text" name="name">
<!-- E-mail: <input type="text" name="email"><br> -->
<input type="submit">
</form>
    </div>
</body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */