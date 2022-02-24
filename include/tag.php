<?php

class tag {
    
    private $conteudo;
    private $tag;
    
    public function __construct($sTag, $conteudo) {
        $this->tag = $sTag;
        $this->conteudo = $conteudo;
    }

    public function __toString() {
        return "<{$this->tag} " . $this->conteudo . ">";
    }
    
    public function fechatag() {
        echo "</{$this->tag}>";
    }
}
