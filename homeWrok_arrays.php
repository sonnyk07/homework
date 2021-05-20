<?php
$menu = [
    ['Home'=> "Http://homewrok/home.php"],
    ['Services' => 'Http://homewrok/services.php'],
    ['Projects' => 'Http://homewrok/projects.php'],
    ['Contacts' => 'Http://homewrok/contacts.php',
        'contactsMenu'=>
            ['Phone'=> ['mobile'=>'079987389', 'stationare'=>'022-56632-566'],
                'Fax'=>'022-56632-566',
                'Email'=>'mySite']
    ],
];
var_dump($menu);
var_dump($menu['3']['contactsMenu']['Phone']['mobile']);