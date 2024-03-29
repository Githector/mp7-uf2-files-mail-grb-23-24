
<?php

class Orm {

    protected $model;

    public function __construct($model) {
        if(!isset($_SESSION[$model])) {
            $_SESSION[$model] = [];
        }
        $this->model = $model;
    
        
    }

    public function getAll() {
        return $_SESSION[$this->model];
    }

    public function getById($id) {
        foreach ($_SESSION[$this->model] as $key => $value) {
            if ($value['id'] == $id) {
                return $value;
            }
        }
    }

    public function verify($token) {
        foreach ($_SESSION[$this->model] as $key => $value) {
            if ($value['token'] == $token) {
                $_SESSION[$this->model][$key]['verified'] = true;
                return $_SESSION[$this->model][$key];
            }
        }
        return null;
    }

    public function insert($data) {
        $_SESSION[$this->model][] = $data;
        return $data;
    }

    public function updateById($data) {
        foreach ($_SESSION[$this->model] as $key => $value) {
            if ($value['id'] == $data['id']) {
                $_SESSION[$this->model][$key] = $data;
            }
        }
    }
}

?>