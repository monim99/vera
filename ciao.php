<!doctype html>
<html>
<head>
</head>
<body
<?php
$form = require "/path/to/Aura.Input/scripts/instance.php";
$form->setField('first_name');
$form->setField('last_name');
$form->setField('email');
$form->setField('email_confirm');
$form->setField('website');
$form->setField('street_address');
$form->setField('city');
$form->setField('state');
$form->setField('zip');
$form->setField('phone_number');
$form->setField('phone_type');
$form->setField('birthday');
?>
</body>
</html>
