<?php
error_reporting(0);
class framework {

    public function view($viewName, $data = []){
        if (file_exists("../application/views/" . $viewName . ".php")){

            require_once "../application/views/$viewName.php";
        }
        else{
            echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry $viewName.php not found</div>";
        }
    }

    public function model($modelName){
        if(file_exists("../application/models/" . $modelName . ".php")){
            require_once "../application/models/$modelName.php";
            return new $modelName;
        }
        else{
            echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry $modelName.php not found</div>";
        }
    }

    public function input($inputName){
        if ($_SERVER['REQUEST_METHOD'] === "POST" || $_SERVER['REQUEST_METHOD'] === 'post'){
            return trim(strip_tags($_POST[$inputName]));
        }
        elseif ($_SERVER['REQUEST_METHOD'] === "GET" || $_SERVER['REQUEST_METHOD'] === 'get'){
            return trim(strip_tags($_GET[$inputName]));
        }
    }

    public function helper($helperName){
        if (file_exists("../system/helpers/" . $helperName . ".php")){
            require_once "../system/helpers/" . $helperName . ".php";
        }
        else{
            echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry $helperName.php not found</div>";
        }
    }
    //set session
    public function setSession($sessionName, $sessionValue){
        if(!empty($sessionName) && !empty($sessionValue)){
            $_SESSION[$sessionName] = $sessionValue;
        }
    }
    // get session 
    public function getSession($sessionName){
        if(!empty($sessionName)){
            return $_SESSION[$sessionName];
        }
    }
    // unset session
    public function unsetSession($sessionName){
        if(!empty($sessionName)){
            unset($_SESSION[$sessionName]);
        }
    }
    // destroy session
    public function destroy(){
        session_destroy();
    }
    // set flash msg
    public function setFlash($sessionName, $msg){
        if(!empty($sessionName) && !empty($msg)){
            $_SESSION[$sessionName] = $msg;
        }
    }
    // show flash msg
    public function flash($sessionName, $className){

        if(!empty($sessionName) && !empty($className) && isset($_SESSION[$sessionName])){
            echo "<div class='". $className ."'>". $_SESSION[$sessionName] ."</div>";
            unset($_SESSION[$sessionName]);
        }
    }

    public function redirect($path){
        header("location:" . BASEURL . "/" . $path);
    }
}   

 
?>
