<?php

namespace api;

use db\Dbpdo;

class Getfeedback extends Dbpdo
{

    public function getSuccess()
    {
        $response = ["status" => false];
        $count = $this->query('SELECT count(*) as c FROM feedback')[0]["c"];
        if ($count != 0) {
            $response["count"] = $count;
            $response["last_date"] = $this->query('SELECT DATE_FORMAT(MAX(created), "%d.%m.%y") as last_date FROM feedback')[0]["last_date"];
            $response["status"] = true;
        }
        echo json_encode($response, true);
    }

}
