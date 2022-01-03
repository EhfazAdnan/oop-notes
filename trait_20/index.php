<?php

  trait Php{
      public function phpTrait(){
        return "from php trait<br>";
      }
  }

  trait MySQL{
      public function mysqlTrait(){
        return "from mysql trait<br>";
      }
  }

  trait MixTwoTrait{
      use Php,MySQL;
  }

  class One{
    use Php,MySQL;
  }

  class Two{
    use MixTwoTrait;
  }

  $one = new One;
  echo $one->phpTrait();
  echo $one->mysqlTrait();

  echo "</br>";

  $two = new Two;
  echo $two->mysqlTrait();
  echo $one->phpTrait();
 
?>