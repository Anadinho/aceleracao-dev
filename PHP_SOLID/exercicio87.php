<?php

class BudgetReport{
    private $database;

    function save(Database $database){
        $database->insert();
    }

    function update(Database $database){
        $database->update();
    }

    function delete(Database $database){
        $database->delete();
    }
}

interface Database{
    function insert();
    function update();
    function delete();
}

class Mysql implements Database{
    function insert(){
        echo "insert Mysql";
    }
    function update(){
        echo "Update Mysql";
    }
    function delete(){
        echo "Delete Mysql";
    }
    
}


class Outros implements Database{
    function insert(){
        echo "insert Outros";
    }
    function update(){
        echo "Update Outros";
    }
    function delete(){
        echo "Delete Outros";
    }
    
}


$outro = New Outros;
$mysql = New Mysql;
$budget = New BudgetReport;

$budget->save($outro);
echo"<br>";
$budget->update($mysql);
?>