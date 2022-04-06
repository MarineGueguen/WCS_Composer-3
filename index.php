<?php 

require_once 'vendor/autoload.php';
use \CowSay\Cow;

$vachette = new Cow('Hellooooow!');
$vachette   ->setTongue('U')
            ->setEyes('@@')
            ->setPoop('€€€');
echo $vachette;