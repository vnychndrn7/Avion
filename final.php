
<?php
    $db = mysqli_connect('localhost','root','','avion');
?>
<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;


article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
</head>
<body>

<div class="container">

<nav>
  <ul>
    <?php
                $query = "SELECT * FROM origin ORDER BY price;";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($result)) {
                     echo $row['name'];
					 echo $row['price'];
					 echo $row['tod'];
					 echo $row['toa'];
					 echo $row['avg_delay'].'<br>';
                }
          ?>
  </ul>
</nav>

</div>

</body>
</html>
