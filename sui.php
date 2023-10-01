<?php
$a = 'a';
echo "<table border=3>";
for($i=1; $i<=7;$i++){
    echo "<tr>";
    for($j=1;$j<=4;$j++){
       
        echo "<td>$a</td>";
        
        if($a<='z')
        $a++;
    
            if($a<='aa')
            break;

    }
    
       
}
echo"<td></td>";
    echo"<td></td>";    
    echo "</tr>";

echo "</table>"
?>