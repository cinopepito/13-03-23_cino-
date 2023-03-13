<?php
$note = 13;
if($note==10){
echo 'vous avez D comme grade';    
}else if($note>10 && $note<=12){
    echo'vous avez C comme grade';
}else if($note>12 && $note<=14){
    echo'vous avez B comme grade';
}else if($note>14 && $note<=16){
    echo'vous avez A comme grade';
}else if($note>16 && $note<=18){
    echo'vous avez A+ comme grade';
}
else{
    echo'dommage vous n\'avez pas la moyenne';
}
?>
