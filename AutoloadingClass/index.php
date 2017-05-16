<?php

include 'foo.php';
include 'bar.php';

$foo = new Foo;
$bar = new Bar;

$bar->sayHiBar();
echo "<br />";
$foo->sayHelloFoo();