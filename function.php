<?php

function searchForHero( $sTable, $sData_arr ){
    $sData_arr_keys = array_keys($sData_arr);
    $sData_arr_keys_lenght = count( $sData_arr_keys);
   
    $sql = "SELECT * FROM $sTable WHERE ";

    $sqlExtension = '';
    
    for( $i = 0; $i < $sData_arr_keys_lenght;  $i++){
        $sqlExtension .= "`". $sData_arr_keys[$i] ."`" . ' LIKE ' ."'%". $sData_arr[ $sData_arr_keys[$i] ] ."%'". ' AND ';
    }

    $cutSqlExtension = substr($sqlExtension, 0, -5);
    
    $sql .= $cutSqlExtension;

    return $sql;
}

function insertIntoDB( $sTable, $sData_arr ){
        $sFields = "";
        $sValues = "";

        $sql = "INSERT INTO $sTable ";

        foreach($sData_arr as $skey => $svalue) 
        {
            $sFields .= "`". $skey . "`" . ","; 
            $sValues .= "'" . $svalue . "',"; 
        }
        $sFields = substr($sFields, 0, -1); 
        $sValues = substr($sValues, 0, -1); 

        $sql .= "($sFields) VALUES ($sValues)";

        return $sql;
}

function getTableValues( $theRows, $num_rows_from_table, $arr_keys, $arr_keys_lenght ){
    for( $x = 0;  $x < $num_rows_from_table; $x++ ){        
            echo "<tr>";
                for( $i = 0; $i < $arr_keys_lenght;  $i++){
                    echo "<td>" . $theRows[$x][$arr_keys[$i]] . "</td>";
                }
            echo "</tr>";  
    }
}

function getTableFields( $arr_keys, $arr_keys_lenght ){
    echo '<tr>';
    for( $i = 0; $i < $arr_keys_lenght;  $i++){
        echo '<th>' . $arr_keys[$i] . '</th>';
    }
    echo '<tr>';
}
?>