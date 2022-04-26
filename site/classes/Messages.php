<?php

class Messages{
    public static function setMsg($text, $type){
        if($type == 'error'){
            $_SESSION['errorMsg'] = $text;            
        } else {
            $_SESSION['sucessMsg'] = $text;
        }
    }

    public static function display(){
        if(isset($_SESSION['errorMsg'])){
            echo '<div class="alert alert-danger">'.$_SESSION['errorMsg'].'</div>';
            unset($_SESSION['errorMsg']);
        }
        if(isset($_SESSION['sucessMsg'])){
            echo '<div class="alert alert-success">'.$_SESSION['sucessMsg'].'</div>';
            unset($_SESSION['sucessMsg']);
        }
    }
}

?>