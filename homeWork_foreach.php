<?php
$menu = [
    '<ul>'=>'<a href="home.php"><li>Home</li></a>',
    '<a href="services.php">'=>'<li>Services</li></a>',
    '<a href="projects.php">'=>'<li>Projects</li></a>',
    '<a href="contcats.php">'=>'<ul><li>Contacts</li></a>',
    '<a href="phone.php">'=>'<li>Phone</li></a>',
    '<a href="fax.php">'=>'<li>FAX</li></a></ul></ul>'
    ];

foreach ($menu as $key => $value){
    echo "$key : $value";
    };
