<?php

// Having fun with UTF-8 Chars and Multi-dimensional arrays. 
 for($Ð=0;$Ð<5;++$Ð){
  for($Ø=0;$Ø<5;++$Ø){
      for($Þ=0;$Þ<5;++$Þ){
          $Æ[$Ð]=$ß[$Ø]=$ð[$Þ]=random_bytes(random_int(1,10));
      }
  }
 print_r($Æ[$Ð]);
}

