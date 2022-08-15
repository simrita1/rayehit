<?php
    class Property{
        public $id,$name,$location,$bed,$bath,$area,$img,$type,$price,$status,$uid;
        function __construct($id,$name,$location,$bed,$bath,$area,$img,$type,$price,$status,$uid){
            $this->id=$id;
            $this->name=$name;
            $this->location=$location;
            $this->bed=$bed;
            $this->bath=$bath;
            $this->area=$area;
            $this->img=$img;
            $this->type=$type;
            $this->price=$price;
            $this->status=$status;
            $this->uid = $uid;
        }
    }
    
?>