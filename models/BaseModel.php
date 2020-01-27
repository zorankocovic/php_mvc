<?php

class BaseModel extends DbOperation{

public $db;
		 function get(){
 $this->db = new DbOperation();
      return  $this->db->dbSelect("SELECT * FROM `mvc_users`");
    
  }



		}
		?>