
<?php
class hello_model extends CI_Model 
{
 function saverecords($name,$id,$The_brand,$Price_of_the_brand)
 {
 $query="insert into telephone values('$name','$id','$The_brand','$Price_of_the_brand')";
 $this->db->query($query);
 }
}