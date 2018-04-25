
<?php
    $db = mysqli_connect('localhost','root','','avion');
?>

<html>
<body>
<style type=”text/css”>
table {
    margin: 180px;
}

th {
    font-family: Arial, Helvetica, sans-serif;
    font-size: .7em;
    background: #666;
    color: #FF0;
    padding: 2px 6px;
    border-collapse: separate;
    border: 1px solid #000;
}

td {
    font-family: Arial, Helvetica, sans-serif;
    font-size: .7em;
    border: 1px solid #DDD;
}
</style>


<table>
  <tr>
    <th>NAME</th>
    <th>PRICE</th> 
    <th>TIME OF DEPARTURE</th>
	<th>TIME OF ARRIVAL</th>
	<th>AVERAGE DELAY</th>
  </tr>
  <tr>
    <td>
			<?php
				$query = "SELECT * FROM origin ORDER BY price;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($result)) {
                echo $row['name'].'<br>';}
			?>
	</td>
   
    <td>
			<?php
				$query = "SELECT * FROM origin ORDER BY price;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($result)) {
                echo $row['price'].'<br>';}
			?>
	</td>
    <td>
			<?php
				$query = "SELECT * FROM origin ORDER BY price;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($result)) {
                echo $row['tod'].'<br>';}
			?>
	</td>
	<td>
			<?php
				$query = "SELECT * FROM origin ORDER BY price;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($result)) {
                echo $row['toa'].'<br>';}
			?>
	</td>
	<td>
			<?php
				$query = "SELECT * FROM origin ORDER BY price;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($result)) {
                echo $row['avg_delay'].'<br>';}
			?>
	</td>
  </tr>
  
</table>

</body>
</html>