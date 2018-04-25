
<?php  
	Header ("Content-type: text/css; charset=utf-8");
    $db = mysqli_connect('localhost','root','','avion');
?>
<html>
<head>
<style type=”text/css”>
.div1
 {
    width: 500px;
    padding: 100px;
    border: 5px solid gray;
    margin: 0;
 }
</style>
</head>
<body>
<div class="div1">
<?php
				$query = "SELECT * FROM origin ORDER BY toa;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($result)) {
                echo $row['toa'].'<br>';}
?>
</div>
</body>
</html>

