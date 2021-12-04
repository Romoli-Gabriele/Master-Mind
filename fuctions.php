<?php 

function selectColor($i){
    echo "<select name='$i'>
        <option value='1'><img src='images/rosso.gif'></option>
        <option value='2'><img src='images/giallo.gif'></option>
        <option value='3'><img src='images/verde.gif'></option>
        <option value='4'><img src='images/blu.gif'></option>
    </select>";
}

function requestTable(){
echo '
    <tr>';
    for($i =0; $i<4; $i++){
        echo '<td>';
            selectColor($i);
        echo '</td>';
    }   
        echo'
        <td>
            <button type="submit"><img src="spunta.gif"></button>
        </td>
    </tr>
';
}