<?php
$a=$argv[1];
$x=fn($y)=>array_merge($y,array_slice(array_reverse($y),1));
echo implode("\n",$x(array_map(fn($i)=>str_pad(implode($x(range(1,$i))),$a*2-1,' ',2),range(1,$a))));