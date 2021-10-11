<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$data = array(
    array('firstname' => 'Iida', 'lastname' => 'Peltonen', 'email' => 'iida.peltonen@gmail.com'),
    array('firstname' => 'Tero', 'lastname' => 'Rantanen', 'email' => 'tero.rantanen@gmail.com'),
    array('firstname' => 'Enni', 'lastname' => 'Takanen', 'email' => 'enni.takanen@gmail.com'),
    array('firstname' => 'Jorma', 'lastname' => 'Kinnunen', 'email' => 'jorma@gmail.com'),
    array('firstname' => 'Seppo', 'lastname' => 'Räty', 'email' => 'seppo@gmail.com')
);
$json = json_encode($data, JSON_PRETTY_PRINT);
print $json;