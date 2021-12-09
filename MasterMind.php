<?php
class MasterMind
{

    public $turno;
    public $soluzione;

    function __construct()
    {
        $this->turno = 0;
        $this->soluzione  = array(random_int(1, 4), random_int(1, 4),  random_int(1, 4),  random_int(1, 4));
        $this->record = [];
    }
    static function requestTable()
    {
        echo '<tr>';
        for ($i = 0; $i < 4; $i++) {
            echo '<td>';
            echo "<select name='$i'>
        <option value='1'  style='color: red;'>Rosso</option>
        <option value='2' style='color: yellow;'>Giallo</option>
        <option value='3' style='color: green';>Verde</option>
        <option value='4' style='color: blue'>Blu</option>
        </select>";
            echo '</td>';
        }
        echo '
        <td>
            <button type="submit"><img src="images/spunta.gif"></button>
        </td>
    </tr>
';
    }
    function winControl($sequenza)
    {
        array_push($this->record, $sequenza);
        if ($sequenza[0] == $this->soluzione[0] && $sequenza[1] == $this->soluzione[1] && $sequenza[2] == $this->soluzione[2] && $sequenza[3] == $this->soluzione[3]) {
            return true;
        } else {
            return false;
        }
    }
    function calcolaColori($sequenza)
    {
        $arr = ["nero" => 0, "bianco" => 0];
        $i = 0;
        foreach ($sequenza as $v) {
            if ($v == $this->soluzione[$i]) {
                $arr["nero"]++;
            }
            $i++;
        }
        foreach ($sequenza as $v) {
            foreach ($this->soluzione as $k) {
                if ($v == $k) {
                    $arr["bianco"]++;
                }
            }
        }
        $arr["bianco"] -= $arr["nero"];
        while($arr["bianco"] + $arr["nero"]>4){
            $arr["bianco"]--;
        }
        return $arr;
    }
    function resulTable()
    {   
        foreach($this->record as $val){
            $arr = $this->calcolaColori($val);
            echo "<tr><td>$this->turno</td><td>";
            foreach ($val as $v){
                if ($v == 1) {
                    $img = "images/rosso.gif";
                } elseif ($v == 2) {
                    $img = "images/giallo.gif";
                } elseif ($v == 3) {
                    $img = "images/verde.gif";
                } else {
                    $img = "images/blu.gif";
                }
        }
            echo"<img src=$img>";
        }
        echo"</td><td>";
        for($i=0;$i<$arr["nero"];$i++){
            echo"<img src='images/nero.gif'>";
        }
        for($i=0;$i<$arr["bianco"];$i++){
            echo"<img src='images/bianco.gif'>";
        }
        echo "</td></tr>";
    }
}
