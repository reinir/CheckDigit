<?php
require './lib/.php';

for ($i = 10; $i < 40; $i++) {
    echo CheckDigit::append('00' . $i);
    echo "<br>";
}
