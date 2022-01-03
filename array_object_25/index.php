<?php
   $arr = array("1","2","3","4","5");
   $coding = new ArrayObject($arr);
   $coding->append("6");

   $iterator = $coding->getIterator();
   while($iterator->valid()){
       echo $iterator->current()."<br/>";
       $iterator->next();
   }

?>