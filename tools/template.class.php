<?php
class template{
    public $smarty;
    public function __construct() {
        require DOCUMENT_ROOT."/tools/smarty/libs/Smarty.class.php";
        $this->smarty = new Smarty();
        $this->smarty->template_dir = DOCUMENT_ROOT."/template";
        $this->smarty->compile_dir = DOCUMENT_ROOT."/template_c";
    }
    public function template_assign($newname,$value){
        $this->smarty->assign($newname,$value);
    }
    public function template_display($name){
        $this->smarty->display($name.".tpl");
    }
}
