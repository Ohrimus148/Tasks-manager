<?php

//include_once ROOT. '/models/News.php';

class TaskController {

	public function actionIndex($page=1)
	{
		$taskList = array();
		$taskList = Task::getTaskList($page);
                $total=Task::getTotalTask();
                // Создаем объект Pagination - постраничная навигация
                $pagination = new Pagination($total, $page, Task::SHOW_BY_DEFAULT, 'page-');
                require_once(ROOT . '/views/task/task.php');
		return true;
	}

	

}

