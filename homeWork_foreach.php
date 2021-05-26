<?php
$menu = [
    'title1' => 'Home','link1' => 'Http://homewrok/home.php',
    'title2' => 'Services','link2' =>'Http://homewrok/projects.php',
    'title3' => 'Projects','link3' => 'Http://homewrok/projects.php',
    'title4' => 'Contacts','link4' => 'Http://homewrok/contacts.php',
    'title5' =>  ['mobile' => '079987389',
    'stationare'=>'022-56632-566'],
];

<<<HTML

$htmlMenu = "<ul>
<li><a href="$menu['link1']">$menu['title1']</a></li>
<li><a href="$menu['link2']">$menu['title2']</a></li>
<li><a href="$menu['link3']">$menu['title3']</a></li>
<li><a href="$menu['link4']">$menu['title4']</a></li>
</ul>";

>>>HTML

foreach ($htmlMenu as $key => $value){
    echo "$key : $value";
        };
