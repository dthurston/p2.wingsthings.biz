<?php

require '../dbconnection.php';

$q = intval($_GET['q']);
$con = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con, DATABASE_NAME);
/* Select the booze info based on the type. */
$result = mysqli_query($con, "SELECT name, size, age, proof, price, type FROM booze WHERE type = '".$q."'");


echo '<br><table cellpadding="0" cellspacing="0" border="1" class="display" id="example">
<thead>
<tr>
<th>Name</th>
<th>Size (mL)</th>
<th>Age in Years</th>
<th>Proof</th>
<th>Price</th>
</tr>
</thead>
<tbody>';

while($row = mysqli_fetch_array($result)) {
  // This puts the type from the DB into the class value
  echo "<tr class=". $row['5'];
    // Now decide the size of the bottle and assign small, med, or large to the tr id

    // Decide how old your booze is.  lt4, 4to8, or gt8

   if ($row['1'] < "750") {
  		echo ' id="small"';
  	}
  	if ($row['1'] == "750") {
  		echo ' id="medium"';
  	}
  	if ($row['1'] > "750") {
  		echo ' id="large"';
  	};

    if ($row['2'] < "4") {
        echo ' id="lt4"';
    }
    if ($row['2'] >= "4" || $row['2'] <= "8") {
        echo ' id="4to8"';
    }
    if ($row['2'] > "8") {
        echo ' id="gt8"';
    }
    echo ">";

  echo "<td>" . $row['0'] . "</td>";
  echo "<td>" . $row['1'] . "</td>";
  echo "<td>" . $row['2'] . "</td>";
  echo "<td>" . $row['3'] . "</td>";
  echo "<td>$" . $row['4'] . "</td>";
  echo "</tr>";
  }
  
echo "</tbody></table>";

    /* free result set */
    mysqli_free_result($result);
	mysqli_close($con);
?>