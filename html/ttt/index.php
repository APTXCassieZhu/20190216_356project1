<html>
	<head>
		<link rel = "stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="jq.js"></script>
	</head>
	<body>
		
        <?php if (isset($_POST['name'])):?>
        <h1> <?php $name = $_POST['name']; date_default_timezone_set('American/New_York'); 
        $date = date('Y-m-d'); echo "Hello $name, $date";?>
		</h1>
		<h1 id="winner"></h1>
        <table id="tictactoe">
		<tr>
			<td class="cell" id="0" ></td>
			<td class="cell" id="1" ></td>
			<td class="cell" id="2" ></td>
		</tr>
		<tr>
			<td class="cell" id="3" ></td>
			<td class="cell" id="4" ></td>
			<td class="cell" id="5" ></td>
		</tr>
		<tr>
			<td class="cell" id="6" ></td>
			<td class="cell" id="7" ></td>
			<td class="cell" id="8" ></td>
		</tr>
		</table>
        <?php else: ?>
        <form action = "/ttt/" method = "post">
        <label for="name">Name:</label>
        <input type = "text" name = "name" id = "name">
        <button type= "submit"> submit </button>
        </form>
        <?php endif; ?>
	</body>
</html>
