<?php
$menu = [
    '<ol>' => '<a href="home.php"><li>Home</li></a>',
    '<a href="services.php">' => '<li>Services</li></a>',
    '<a href="projects.php">' => '<li>Projects</li></a>',
    '<a href="contcats.php">' => '<ol>Contacts</a>',
    '<a href="phone.php">' => '<li>Phone</li></a>',
    '<a href="fax.php">' => '<li>FAX</li></a></ol>',

];

foreach ($menu as $key => $value){
    var_dump($menu);
    }
