<?php

//include_once ROOT. '/models/News.php';

class TaskController {

	public function actionIndex($page)
	{
		$taskList = array();
		$taskList = Task::getTaskList($page);
	        require_once(ROOT . '/views/task/task.php');
		return true;
	}

	public function actionView($id)
	{   echo $id;
		if ($id) {
			$newsItem = News::getNewsItemByID($id);

	//require_once(ROOT . '/views/news/view.php');

/*			echo 'actionView'; */
		}

		return true;

	}

}

