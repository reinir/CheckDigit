<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width" charset="utf-8">
<title>CheckDigit</title>
</head>
<body>
<?php
require './lib/.php';

echo "<h1>contoh generate</h1>\n";
echo "<pre>";
for ($i = 1; $i <= 40; $i++) {
    $digits = str_pad($i, 9, '0', STR_PAD_LEFT);
    echo $digits . ' -> ' . CheckDigit::append($digits) . '<br>';
}
echo "</pre>";

echo "<h1>contoh validate</h1>\n";
echo "<pre>";
for ($digits = 1100; $digits <= 1200; $digits++) {
    echo $digits . ' -> ' . (CheckDigit::validate($digits) ? 'valid' : 'invalid') . '<br>';
}
echo "</pre>";
