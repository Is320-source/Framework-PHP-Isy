<?php


class Element {

    private $text = '';
    private $scri;
    private $script;
    private $tag;
    private $openTag = "<>";
    private $endTag = "</>";
    private $smsError = array();
    private $idElement;
    private $classElement;
    private $nameElement;
     
    
    public function __construct($tag, $nameElement, $idElement, $classElement, $text){
        $tagSintax = $this->tag = $tag;
        
        $this->openTag = "<".$tag.">";
        $this->endTag = "</".$tag.">";
        $this->text = $text;
        $this->idElement = $idElement;
        $this->classElement = $classElement;
        $this->nameElement = $nameElement;
    }

    

    public function showElement(){
        try {
            //code
            $toLowerTag = strtolower($this->openTag);
            if($toLowerTag == "<".$this->tag.">"):
                $tagOpen = $this->openTag;
                $replaceTagOpen = str_replace(">", " name='$this->nameElement' id='".$this->idElement."' class='".$this->classElement."'>", $tagOpen);
            endif;
            return $replaceTagOpen. $this->text. $this->endTag;
        } catch (\Throwable $th) {
            //throw $th;
            return ("Ocorreu um erro");
        }
        
        
        /*$example = function ($scri) use ($script) {
            var_dump($arg . ' ' . $message);
        };
        $example("hello");*/
    }
}