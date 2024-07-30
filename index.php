<?php

require './LinkedList.php';

$linkedList = new LinkedList();
$to = 21;

for ($i = 0; $i < $to; $i++)
    $linkedList->add($i);
for ($i = 0; $i < $to; $i++)
    $linkedList->add($i);

echo $linkedList . "\n";

for ($i = 0; $i < $to; $i++)
    if (!($i % 2))
        $linkedList->remove($i);

echo $linkedList . "\n";
$linkedList->remove(9999);
echo $linkedList . "\n";