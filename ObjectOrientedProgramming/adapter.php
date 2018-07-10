<?php 
/**
 * Adapts a simple class you can not change to add more complex methods
 * 
 * simple book, advanced book, sci fi book
 */
interface book{
    public function getTitle();
}

class bookA implements book{
    public $title = "something";
    public $description = "";
    private $extract = "extract";
    public function capitalizeTitle(){
        return strtoupper($this->title);
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
}


class myBookA{
    private $book;
    public function __construct(bookA $book){
        $this->book = $book;
    }
    public function capitalizeDescription(){
        return strtoupper($this->book->getTitle());
    }
}

class sciBook extends bookA{

    public $spaceSector;

    public function getSector(){

    }
    public function setExtract($string){
        $this->extract = $string;
    }
    public function getExtract(){
        echo $this->extract;
    }
}

$abook = new sciBook();
$myBookA = new bookA();


// $abook->setExtract("a new extract");
$abook->getExtract();
 
