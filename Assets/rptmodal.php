<?php
require_once('../Connections/localhost.php');
//initialize the session


if (!function_exists("GetSQLValueString")) {
    function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
    {
        if (PHP_VERSION < 6) {
            $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
        }

        $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

        switch ($theType) {
            case "text":
            $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
            break;    
            case "long":
            case "int":
            $theValue = ($theValue != "") ? intval($theValue) : "NULL";
            break;
            case "double":
            $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
            break;
            case "date":
            $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
            break;
            case "defined":
            $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
            break;
        }
        return $theValue;
    }
}

$colname_CS = "-1";
if (isset($_SESSION['MM_Username'])) {
    $colname_CS = $_SESSION['MM_Username'];
}
mysql_select_db($database_localhost, $localhost1);
$query_CS = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_CS, "text"));
$CS = mysql_query($query_CS, $localhost1) or die(mysql_error());
$row_CS = mysql_fetch_assoc($CS);
$totalRows_CS = mysql_num_rows($CS);
$role=$row_CS['user_role'];
$dep=$row_CS['Department']; 

?>

<div id="report" class="modal fade">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title">Generate Reports</h4>

            </div>

            <div class="modal-body">
                <form id="contact-form" class="form-horizontal" action="Report/connReport.php" method="post" >
                    <fieldset>
<input type="hidden" name="Role" value="$role" />
<input type="hidden" name="Dept" value="$dep" />
                        <div class="control-group">
                          <label class="control-label" for="selection">Select Category</label>
                          <div class="controls">
                            <select name = "category" id = "category" required>
                                <option value = "">Select Category</option>
                                <option value = "Complains">Complains</option>
                                 <option value = "Disaster">Disaster</option>
                                <option value = "Recommendations">Recommendations</option>
                                <option value = "Suggestions">Suggestions</option>
                                <option value = "Inquiries">Inquiries</option>
                            </select>
                        </div></div>
                        <div class="control-group">
                          <label class="control-label" for="selection">Choose one of this:</label>
                          <div class="controls">
                            <select name = "selection" id = "select">
                                <option value = "">Make Selection</option>
                                <option value = "Replied">Replied</option>
                                <option value = "Pending">Pending</option>
                            </select>
                        </div></div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>

                            <button type="submit" class="btn btn-primary btn-medium">Generate</button>

                        </div>
                    </fieldset>
                </form>

            </div>

        </div>

    </div>

</div>