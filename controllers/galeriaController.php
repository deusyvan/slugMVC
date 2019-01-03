<?php
class galeriaController extends controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $albuns = new Albuns();
        
        $data = array(
            'albuns' => $albuns->getList()
        );
        
        $this->loadTemplate('galeria', $data);
    }
    
    public function abrir($id) {
        $albuns = new Albuns();
        $data = array(
            'info' => $albuns->getAlbum($id)
        );
        
        $this->loadTemplate('album', $data);
    }
        
}