<?php


class Task
{

        const SHOW_BY_DEFAULT = 3;
        public static function getTaskList($page=1, $count = self::SHOW_BY_DEFAULT) 
        {
               $page=intval($page);
               $offset=($page - 1) * self::SHOW_BY_DEFAULT;
		$db = Db::getConnection();
		//$newsList = array();
                $sql="SELECT id, user, email, task, description, action, photo, data  FROM tasks ORDER BY id ASC LIMIT $count OFFSET $offset";
		$result = $db->query($sql);
 
		$i = 0;
		while($row = $result->fetch()) {
			$taskList[$i]['id'] = $row['id'];
			$taskList[$i]['user'] = $row['user'];
			$taskList[$i]['email'] = $row['email'];
			$taskList[$i]['task'] = $row['task'];
                        $taskList[$i]['description'] = $row['description'];
			$taskList[$i]['action'] = $row['action'];
                        $taskList[$i]['photo'] = $row['photo'];
                        $taskList[$i]['data'] = $row['data'];
			$i++;
		}

		return $taskList;
	
         }
         public static function getTotalTask()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM tasks');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

}