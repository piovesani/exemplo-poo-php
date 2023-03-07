<?php

class Post{
    public int $likes = 0;
    public array $coments = [];
    private string $author; //Para utilize encapsulamento

    public function __construct($qtLikes = 0){
        $this->likes = $qtLikes;
    }

    public function addLikes(){
        $this->likes++;
    }

    //Aplicando encapsulamento
    public function setAuthor($n){
        $this->author = ucfirst($n);
    }

    public function getAuthor(){
        return $this->author ?? 'Anônimo';
    }
}

$post1 = new Post();
$post1->addLikes();
$post1->setAuthor('renan');
echo "Post 1: ".$post1->likes ."autor ".$post1->getAuthor();

?>