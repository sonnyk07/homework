<?php
$menu = [
    ['title' => 'Home'['link' => 'Http://homewrok/home.php']],
    ['title' => 'Services'['link' =>'Http://homewrok/services.php']],
    ['title' => 'Projects'['link' => 'Http://homewrok/projects.php']],
    ['title' => 'Contacts'['link' => 'Http://homewrok/contacts.php',
            'childTitle' => 'Phone' ['mobile'=>'079987389', 
                            'stationare'=>'022-56632-566'],
                'childTitle' => 'Fax'=>'022-56632-566',
               'childTitle' => 'Email'=>'mySite']
    ],
];
var_dump($menu);
var_dump($menu['3']['contactsMenu']['Phone']['mobile']);
