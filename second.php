<?php
 $md_design = ['Sydorenko', 'Viktor', 'employee'];
?>
<ol>
    <? foreach($md_design as $num): ?>
    <li><?=$num;?></li>
<? endforeach;?>
</ol>
<ol>
    <? for($i=0; $i < count($md_design); $i++)
    {?>
   <li><?=$md_design[$i];?></li>
<?}?>
</ol>
<ol>
    <? while($i < count($md_design)){?>
        <li><?=$md_design[$i];?></li>
<? $i++;
}?>
</ol>