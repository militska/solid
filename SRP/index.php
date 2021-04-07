<?php


$task = new Task('Заказ пиццы', 'Без мяса, сыра, и теста', 'me', 'me');
$task->setState(Task::IN_WORK_STATE);
$task->setState(Task::CHECK_STATE);



$claim = new Claim('В пицце было тестов');
$claim->setState(Task::IN_WORK_STATE);

// Жалоба не может быть на проверке у заказчика, нужен свой набор статусов
$claim->setState(Task::CHECK_STATE);