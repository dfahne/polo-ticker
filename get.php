<?php
$polo_url = "https://poloniex.com/public?command=returnTicker";
$polo_string = file_get_contents( $polo_url );
$polo_file = 'polo.json';
file_put_contents($polo_file, $polo_string);
