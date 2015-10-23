<?php

require_once 'vendor/autoload.php';

use Catalogs\Organization, Catalogs\Worker;
use Documents\Task;
//use Reports\..;

{
    $contractor=new Organization();
    $contractor->setName('GeetHub');
    $contractor->setAddress('Cherkassy ...');
    $contractor->setRegistrationCode('12345678');
    $contractor->setCode(1);

    $worker1=new Worker();
    $worker1->setCode(1);
    $worker1->setName('Evgen');
    $worker1->setPosition('manager');
    $worker1->setSubdivision('Administration');

    $worker2=new Worker();
    $worker2->setCode(2);
    $worker2->setName('Andrey');
    $worker2->setPosition('programmer');
    $worker2->setSubdivision('Develop');

    $worker3=new Worker();
    $worker3->setCode(3);
    $worker3->setName('Timur');
    $worker3->setPosition('tester');
    $worker3->setSubdivision('Develop');

    $workers = [$worker1, $worker2, $worker3];

    echo '<br><br>';
    echo 'Contractor:';
    echo $contractor->getName();
    echo '<br>';
    
    echo '<br>';
    echo 'Workers:';
    echo '<br>';
    foreach ($workers as $worker) {
        echo $worker->getName();
        echo '<br>';
    }

    $docement1=new Task(1,date("m.d.y"),$contractor,'Home work 2. Create OOP project.');
    //$docement1=new Task('1');//,'23/10/15','contractor','Home work 2. Create OOP project.');
   // $docement1->action();
    //$docement1=new Task();
    //$docement1->setDocementNumber(1);

    echo '<br><br>';
    echo 'Documents:<br>';
    echo '    N'.$docement1->getDocumentNumber().' dated '.$docement1->getDocumentDate();
    echo '<br>';
}