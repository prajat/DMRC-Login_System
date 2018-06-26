<?php  
           session_start();
	require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            revenue
        </title>
        <link href="css/style.css" rel="stylesheet">
        </link>
    </head>
    <body style="background-color: #3498db">
        <div id="main-wrapper">
            <center>
                <h2>
                    <b>
                        Revenue
                    </b>
                </h2>
            </center>
            <a href="homepage.php">
                <button class="logout_button" type="button">
                    back to home
                </button>
            </a>
            <?php 
		$sqlget = "SELECT * FROM rev";
			$sqldata = mysqli_query($con, $sqlget) or die('error gettig data');


		 ?>
            <center>
                <table border="5" cellpadding="3" cellspacing="1" width="50%">
                </table>
            </center>
            <?php echo "<tr>
            <th>
                SNo
            </th>
            <th>
                Line
            </th>
            <th>
                Station
            </th>
            <th>
                Tom 1
            </th>
            <th>
                Tom 2
            </th>
            <th>
                CC
            </th>
            <th>
                Tum 1
            </th>
            <th>
                Tum 2
            </th>
            <th>
                Date
            </th>
        </div>
    </body>
</html>
";

			while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC))
			{
				echo "
<tr>
    <td>
        ";
				echo $row['sno'];
				echo "
    </td>
    <td>
        ";
				echo $row['line'];
				echo "
    </td>
    <td>
        ";
				echo $row['station'];
				echo "
    </td>
    <td>
        ";
				echo $row['tom1'];
				echo "
    </td>
    <td>
        ";
				echo $row['tom2'];
				echo "
    </td>
    <td>
        ";
				echo $row['cc'];
				echo "
    </td>
    <td>
        ";
				echo $row['tum1'];
				echo "
    </td>
    <td>
        ";
				echo $row['tum2'];
				echo "
    </td>
    <td>
        ";
				echo $row['date'];
				echo "
    </td>
</tr>
";
			}
			
			echo "
";

		?>
