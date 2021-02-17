<?php

spl_autoload_register(function ($class) {
    require_once "../classes/$class.php";
});

use Computer\Desktop as Desktop;
use Computer\Laptop as Laptop;
use Computer\Tablet as Tablet;
use Component\Cpu as Cpu;
use Component\Ram as Ram;
use Component\MotherBoard as MotherBoard;
use Component\GraphicCard as GraphicCard;
use Device\Mouse as Mouse;
use Device\Keyboard as Keyboard;
use Device\Speaker as Speaker;
use Validator\ComputerValidator;

// Components
$cg = new GraphicCard();
$cg->setName('gtx1060');
$cg->setBrand('MSI');

$cpu = new Cpu();
$cpu->setName('Ryzen7');
$cpu->setBrand('AMD');

$ram = new Ram();
$ram->setName('Guardian');
$ram->setBrand('Corsair');

$cm = new MotherBoard();
$cm->setName('Gamer');
$cm->setBrand('AsRock');

$components = [$cg, $cpu, $ram, $cm,];


//Devices
$mouse = new Mouse();
$mouse->setName('Death Adder');
$mouse->setBrand('Razer');

$keyboard = new Keyboard();
$keyboard->setName('K-120');
$keyboard->setBrand('Logitech');

$speaker = new Speaker();
$speaker->setName('Gloubi');
$speaker->setBrand('Logitech');

$devices = [$mouse, $keyboard, $speaker,];


// Computer
$computer = new Desktop();
$computer->setComponents([$cg, $cpu, $ram]);
$computer->setDevices([$mouse, $keyboard, $speaker]);
$computer->setName('Ilianov');

$laptop = new Laptop();
$laptop->setComponents([$cg, $cpu, $ram, $cm]);
$laptop->setDevices([$mouse, $keyboard, $speaker]);
$laptop->setName('Ekaterina');

$tablet = new Tablet();
$tablet->setComponents([$cg, $cpu, $ram, $cm]);
$tablet->setDevices([$mouse, $keyboard, $speaker]);
$tablet->setName('Kurnikova');

$computers = [$computer, $laptop, $tablet,];

