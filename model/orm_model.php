<?php

class orm{

    static public function select($sql, $array = array(), $fetchMode = PDO::FETCH_NUM)
    {
        $sth = conexion::conectar()->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }

        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
    
    static public function findById($sql)
    {
    	$stm = conexion::conectar()->prepare($sql);
    	$stm->execute();  	
    	return $stm->fetch(PDO::FETCH_ASSOC);
    }

    static public function insert($table, $data)
    {  	  
        ksort($data);

        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        $sth = conexion::conectar()->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        $stm = $sth;
        return $stm;     
    }

    static public function update($table, $data, $where)
    {
        $fieldDetails = NULL;
        foreach($data as $key=> $value) {
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');


        $sth = conexion::conectar()->prepare("UPDATE $table SET $fieldDetails WHERE $where");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        $stm = $sth;
        return $stm;
             
    }

    static public function delete($table, $where, $limit = 1)
    {
        return conexion::conectar()->prepare("DELETE FROM $table WHERE $where LIMIT $limit");
    }


}

