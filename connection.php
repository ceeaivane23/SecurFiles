<?php
	mysql_connect("localhost","root") or die ('CONNECTION ERROR!' .mysql_error());
	mysql_select_db("regsystem") or die ('DB does not EXIST');
?>