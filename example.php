<?php

$b = microtime(true);
$pswd = 'test';
for ($i = 0; $i < 1000; $i++) {
    $pswd = md5($pswd);
}
$t = round((microtime(true) - $b), 6);

echo 'md5(1000 iters): '.$t.PHP_EOL;
//md5(1000 iters): 0.000318 sec


$b = microtime(true);
$salt = md5(uniqid('some_prefix', true));
$salt = substr(strtr(base64_encode($salt), '+', '.'), 0, 22);
$pswd= crypt('test', '$2a$08$' . $salt);
$t = round((microtime(true) - $b), 6);
echo 'blowfish: '.$t.PHP_EOL;
?>