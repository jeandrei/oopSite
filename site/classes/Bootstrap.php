<?php

//a classe bootstrap é iniciada lá no main index $bootstrap = new Bootstrap($_GET); o que vem no GET passa para __construct($request)

class Bootstrap{
    private $controller;
    private $action;
    private $request;

    //essa divisão de controller e action é feita no arquivo .htaccess
    public function __construct($request){
        $this->request = $request;
        if($this->request['controller'] == ""){
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }
        if($this->request['action'] == ""){
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }        
    }

    public function createController(){
        // Check Class
        if(class_exists($this->controller)){
            $parents = class_parents($this->controller);            
            // Check Extend
            if(in_array("Controller", $parents)){
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->action, $this->request);
                } else {
                    //Method Does Not Exist
                    echo '<h1> Method does not exist</h1>';
                    return;
                }
            } else {
                // Base Controller Does not Exist
                echo '<h1>Base controller not found</h1>';
                return;
            }
        } else {
            // Controller Class Does not Exist
            echo '<h1> Controller class does not exist</h1>';
            return;
        }
    }
}


?>