<?php
   class Programming{
       public $html;
       public $css;

       private $php;
       protected $java;

       function __construct(){
           $this->html = "I know HTML.";
           $this->css = "I know css.";
           $this->php = "I know Php.";
           $this->java = "I know java.";
       }
   }

?>