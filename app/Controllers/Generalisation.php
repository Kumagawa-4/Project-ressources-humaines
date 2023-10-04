<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Generalisation extends Controller{

    function generateInsertQuery($table, $data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), "?"));
        $query = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        return $query;
    }
    function generateDeleteQuery($table, $condition) {
        $query = "DELETE FROM $table WHERE $condition";
        return $query;
    }
    function generateSelectQuery($table, $columns, $condition = "") {
        $query = "SELECT $columns FROM $table";
        if (!empty($condition)) {
            $query .= " WHERE $condition";
        }
        return $query;
    }  
    function generateUpdateQuery($table, $data, $condition) {
        $updates = [];
        foreach ($data as $column => $value) {
            $updates[] = "$column = '$value'";
        }
        $setClause = implode(", ", $updates);
    
        $query = "UPDATE $table SET $setClause WHERE $condition";
        return $query;
    }
}