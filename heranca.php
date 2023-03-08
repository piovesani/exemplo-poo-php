<?php

class Post{
    private int $id;
    public int $likes = 0;
    
   
    //Aplicando encapsulamento
    protected function setId($n){
        $this->id = $n;
    }

    public function getId(){
        return $this->id;
    }

    protected function setLikes($n){
        $this->likes = $n;
    }

    public function getLikes(){
        return $this->likes;
    }
}

class Photo extends Post{

    private string $url;

    public function __construct($id){
        $this->setId($id);
        $this->setLikes(82);
    }

    public function setUrl($u){
        $this->url = $u;
    }

    public function getUrl(){
        return $this->url;
    }
}

$photo = new Photo(12);
$photo->setUrl("www.esteteste.com.br");

echo "Foto: #".$photo->getId() ." - " .$photo->getLikes(). " likes -".$photo->getUrl();

?>