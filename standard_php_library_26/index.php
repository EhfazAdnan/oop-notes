<?php
  $arr = array("1","2","3","4","5");
  $ai = new ArrayIterator($arr);

  echo $ai->current()."<br/>";
  echo $ai->next();

  $limit = new LimitIterator($ai,0,2);
  foreach($limit as $value){
      echo $value."<br/>";
  }

$ci = new CachingIterator($ai);
foreach($ci as $value){
    echo $value;
    if($ci->hasNext()){
        echo ", ";
    }
}

?>