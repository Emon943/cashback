<?php
//------------global variable------------

$data['db']['host'] = 'localhost';
$data['db']['user'] = 'root';
$data['db']['password'] = '';
$data['db']['name'] = 'cash';

//----------class started-----------

class DBUtility
{
    var $conn;

    function DBUtility()
    {
        global $data;
        $this->conn = mysql_connect($data['db']['host'], $data['db']['user'], $data['db']['password']);
        if (!$this->conn) {
            die('Could not connect: ' . mysql_error());
        } else {
            mysql_select_db($data['db']['name']) or die('Could not select database');
            mysql_query("SET NAMES utf8");
        }
    }

    function select($sql)
    {
        global $data;
        //mysql_select_db($data['db']['name']) or die('Could not select database');
        $result = mysql_query($sql);

        if (!$result) {

            die('Invalid query: ' . mysql_error());

        }

        $arReturn = array();
        while ($row = mysql_fetch_assoc($result)) {
            $arReturn[] = $row;
        }
        mysql_free_result($result);
        return $arReturn;
    }

    function insert($sql)
    {
        $result = mysql_query($sql);
        if (!$result) {
            die('Invalid query: ' . mysql_error());
        }
        return mysql_affected_rows();
    }

    function update($sql)
    {
        $result = mysql_query($sql);
        if (!$result) {
            die('Invalid query: ' . mysql_error());
        }
        return mysql_affected_rows();
    }

    function get_auto_id($tablename, $fieldname)
    {
        $res = $this->select("select max(" . $fieldname . ") as maxid from " . $tablename);
        global $autoid;
        $maxid = ($res[0]["maxid"]);
        $autoid = $maxid + 1;
        return $autoid;
    }


    function companyinfo()
    {
        $result = $this->select("select * from companyinfo");

        return $result;
    }

}


?>