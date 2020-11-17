<?php
$con=pg_connect("host=localhost  dbname=postgres user=postgres") or die("cannot connect");
$temp = '/var/www/html/animal1/volunteer/images/temp.jpg';
//$a=baner;
$query = "select lo_export(image, '$temp') from v";
$result = pg_query($query);

if($result)
{
    while ($line = pg_fetch_array($result))
    {
        $ctobj = $line["image"];
        echo "<IMG SRC=show.php>";
    }

}
else { echo "File does not exists."; }
pg_close($conn);

?>


<!--
<table border="2">
   <tr>
	<th>vno</th>
      <th>Name</th>
      <th>E-Mail Id</th>
      <th>Gender </th>
  
    </tr>
    <? 
    while ($array = mysql_fetch_row($result));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
 print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
print "</td> </tr>";
}
?>-->
