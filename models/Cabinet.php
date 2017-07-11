<?php


class Cabinet
{
    public static function AddTask($title, $description ) {
        
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO tasks (title, description, user) '
                . 'VALUES (:title, :description)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':title', $name, PDO::PARAM_STR);
        $result->bindParam(':description', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        
        return $result->execute();
    }    

    
    
    
    
    
    
    
    
}