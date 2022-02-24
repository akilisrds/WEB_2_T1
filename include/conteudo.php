<?php

class conteudo {
    
    private $tag;
    private $item;
    private $conteudo = array();
    
    public function __construct($sTag, $sItem , $sConteudo) {
        $this->tag = $sTag;
        $this->item = $sItem;
        $this->conteudo = $sConteudo;
    }
    
    public function addItem($Item) {
        $this->conteudo = array_merge($this->conteudo,$Item);
    }
    
    public function __toString() {
        $retorno = "<html {$this->verificaSePossuiConteudo()}>";
        foreach ($this->itens as $item) {
            $retorno .= $item;
        }
        $retorno .= "</html>";
        return $retorno;
    }
    
    public function verificaSePossuiConteudo() {
        if (!!$this->conteudo) {
            return $this->conteudo;
        }
    }
}
