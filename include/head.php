<?php
/**
 * Description of estrutura_base
 *
 * @author User
 */
class head {
    
    private $tag;
    
    private $conteudo = array();
    
    public function __construct($sTag, $sConteudo) {
        $this->tag = $sTag;
        $this->conteudo = $sConteudo;
    }
    
    public function addItem($Item) {
        $this->conteudo = array_merge($this->conteudo,$Item);
    }
    
    public function __toString() {
        $retorno = "<head>";
        foreach ($this->itens as $item) {
            $retorno .= $item;
        }
        $retorno .= "</head>";
        return $retorno;
    }
}
