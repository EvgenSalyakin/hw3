<?php

require_once 'vendor/autoload.php';

use Catalogs\Organization, Catalogs\Worker;
use Documents\Task, Documents\Processing, Documents\Completion;
use Reports\ExecutorsOfTask;

{
    $contractor = new Organization();
    $contractor->setName('GeekHub');
    $contractor->setAddress('Cherkassy ...');
    $contractor->setRegistrationCode('12345678');
    $contractor->setCode(1);

    $worker1 = new Worker();
    $worker1->setCode(1);
    $worker1->setName('Evgen');
    $worker1->setPosition('manager');
    $worker1->setSubdivision('Administration');

    $worker2 = new Worker();
    $worker2->setCode(2);
    $worker2->setName('Andrey');
    $worker2->setPosition('programmer');
    $worker2->setSubdivision('Develop');

    $worker3 = new Worker();
    $worker3->setCode(3);
    $worker3->setName('Timur');
    $worker3->setPosition('tester');
    $worker3->setSubdivision('Develop');

    $workers = [$worker1, $worker2, $worker3];
    echo '**********************************  Init data  ************************************************'.'<br>';
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

    $task1 = new Task(1, date("m.d.y"), $contractor, 'Home work 2. Create OOP project.');
    $task1->action();
    $document1 = new Processing(1, date("m.d.y"), $task1, $worker1, 500, 'Project managment');
    $document1->action();
    $document2 = new Processing(2, date("m.d.y"), $task1, $worker2, 2000, 'Develop part 1');
    $document2->action();
    $document3 = new Processing(3, date("m.d.y"), $task1, $worker1, 3000, 'Develop part 2');
    $document3->action();
    $document4 = new Processing(4, date("m.d.y"), $task1, $worker3, 500, 'Testing');
    $document4->action();
    $document5 = new Completion(1, date("m.d.y"), $task1, 'success', 'Success finish');
    $document5->action();

    $documents = [$task1, $document1, $document2, $document3, $document4, $document5];

    echo '<br>';
    echo 'Documents:<br>';
    foreach ($documents as $document) {
        echo '    ' . $document;//->getDocumentType().' N'.$document->getDocumentNumber().' dated '.$document->getDocumentDate();
        echo '<br>';
    }
    echo '*********************************************************************************************'.'<br>';
    echo '<br><br>';

    echo '********************************** Report ***************************************************'.'<br>';

    $report = new ExecutorsOfTask();
    $report->setTask($task1);
    $report->printReport();
    echo '*********************************************************************************************';
    //echo '<br>Processing for Task1(' . $task1 . '): <br>';
    //$document = $task1->getProcessing();
    //while ($document <> null) {
    //    echo $document . '<br>';
    //    $document = $document->getProcessing();
    //}
}