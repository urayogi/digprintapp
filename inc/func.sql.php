<?php
//SQL Class
function insertdata ($table='', $data) {

	$columns = implode(", ",array_keys($insData));
    $escaped_values = array_map('mysql_real_escape_string', array_values($insData));
    foreach ($escaped_values as $idx=>$data) $escaped_values[$idx] = "'".$data."'";
    $values  = implode(", ", $escaped_values);
    $query = "INSERT INTO $table ($columns) VALUES ($values)";
 	mysql_query($query) or die(mysql_error());

return $query;
}

function mysql_insert($table, $data, $exclude = array()) {
    $fields = $values = array();
    if( !is_array($exclude) ) $exclude = array($exclude);
    foreach( array_keys($data) as $key ) {
        if( !in_array($key, $exclude) ) {
            $fields[] = "`$key`";
            $values[] = "'" . mysql_real_escape_string($data[$key]) . "'";
        }
    }
    $fields = implode(",", $fields);
    $values = implode(",", $values);
    if ($fields=='password') {
    	$values = sha1($values);
    }
    if( mysql_query("INSERT INTO `$table` ($fields) VALUES ($values)") ) {
        return array( "mysql_error" => false,
                      "mysql_insert_id" => mysql_insert_id(),
                      "mysql_affected_rows" => mysql_affected_rows(),
                      "mysql_info" => mysql_info()
                    );
    } else {
        return array( "mysql_error" => mysql_error() );
    }
}

	function ambilrecord($table1='', $table2='' , $field1='', $field2='') {
		$query = 'SELECT * FROM '.$table1.', '.$table2.' WHERE '.$table1.'.'.$field1.'='.$table2.'.'.$field2.'';
		$row = mysql_fetch_row($query);
		$data = $row[$record];
		return $record;
	}
?>