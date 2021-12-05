<?php 
class MasterMind{

    public $turno;
    public $soluzione;

function __construct()
{
    $this->turno = 0;
    $this->soluzione  = array( random_int(1,4), random_int(1,4),  random_int(1,4),  random_int(1,4));

}

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
            $this->selectColor($i);
        echo '</td>';
    }   
        echo'
        <td>
            <button type="submit"><img src="spunta.gif"></button>
        </td>
    </tr>
';
}
function winControl($sequenza){
    if($sequenza[0] == $this->soluzione[0] && $sequenza[1] == $this->soluzione[1] && $sequenza[2] == $this->soluzione[2] && $sequenza[3] == $this->soluzione[3]){
        return true;
    }else{ 
        return false;
    }
}
function calcolaColori($sequenza){
    
}
}