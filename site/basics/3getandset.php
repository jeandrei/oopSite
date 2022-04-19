<?php //Aula 11
class Post{
    private $name;

    //esse método roda sempre quando alteramos uma propriedade
    public function __set($name, $value){
        echo 'Setting '. $name. ' to <strong>' .$value.'</strong> <br />';
        $this->name = $value;
    }

    //esse método roda sempre quando pegamos o valor de uma propriedade neste caso echo
    public function __get($name){
        echo 'Getting '. $name. ' <strong>' .$this->name.'</strong> <br />';
    }

    public function __isset($name){
        echo 'Is '.$name.' set?<br />';
        return isset($this->name);
    }
}

$post = new Post;
//setting
$post->name = 'testing';
//getting
echo $post->name;
//isset
var_dump(isset($post->name));

?>