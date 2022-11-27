<?php

namespace api;

use db\Dbpdo;

class Feedback extends Dbpdo
{

    public function save()
    {

        if (!empty($_POST)) {
            $sql = 'INSERT INTO feedback(name, emal, comments) values(:name, :email, :comments)';
            $this->query($sql, $_POST);
            echo json_encode(["status" => true, "message" => "DONE"], true);
        } else {
            echo json_encode(["status" => false, "message" => "Не переданы параметры"], true);
        }

    }

}


