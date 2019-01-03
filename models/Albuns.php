<?php 

class  Albuns extends model{
    
    public function getList(){
        $array = array();
        
        $sql = "SELECT * FROM albuns";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
    
    public function getAlbum($id){
        $array = array();
        
        $sql = "SELECT * FROM albuns WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
}