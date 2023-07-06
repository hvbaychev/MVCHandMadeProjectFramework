<?php

class profileModel extends database {
    public function addCourse($course){
        if($this->Query("INSERT INTO course (name, price, quality, userId) VALUES (?,?,?,?)", $course)){
            return true;
        }
    }

    public function getData($userId) {
        //$userId = $this->getSession('userId');
        if ($this->Query("SELECT * FROM course WHERE userId = ?", [$userId])) {
            $data = $this->fetchAll();
            return $data;
        }
    }
}
?>
