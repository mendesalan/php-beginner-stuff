<?php

$name = 'Jon';

// echo 'hello $name'; single quotes, return the string: hello $name
// echo "hello $name"; double quotes can interpolate, and the expected result is: hello Jon

echo "hello,   {$name}";