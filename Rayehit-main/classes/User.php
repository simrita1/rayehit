<?php
    class User{
       public $id, $name, $mobile, $email;
        function __construct($id,$name,$mobile,$email){
            $this->id = $id;
            $this->name = $name;
            $this->mobile = $mobile;
            $this->email = $email;
        }

        public function owns($mysqli,$pid){
            $sql = "Select * from properties where uid=$this->id and id=$pid";
            if ($data=$mysqli->query($sql)) {
                if ($data->num_rows > 0) {
                    return true;
                }
            }

            return false;
        }
    }
    
?>