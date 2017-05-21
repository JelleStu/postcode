<?php
require_once ("database.inc.php");
 ?>
<html>

	<head>

		<script>
		function showHint(str) {
		    if (str.length == 0) {
		        document.getElementById("txtHint").innerHTML = "je moet wel iets typen";
		        return;
		    } else {
		        var xmlhttp = new XMLHttpRequest();
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("txtHint").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET", "response.php?q=" + str, true);
		        xmlhttp.send();
		    }
		}
		</script>
	</head>
	<body>

		<p><b>Type hier een naam, of slechts enkele letters van een naam:</b></p>
			<form>
				Voornaam: <input type="text" onkeyup="showHint(this.value)">
			</form>
		<p>Bedoel je: <span id="txtHint"></span></p>
	</body>
</html>

<?php
$con = database::connect();

			$sql = "SELECT * FROM postcode";
			$sth = $con->prepare($sql);
			$sth->execute();

			foreach($sth as $row) {
				echo $row['PostCode'];
			}
    ?>
