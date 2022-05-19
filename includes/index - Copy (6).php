<?php 
$connection =  mysqli_connect('localhost', 'root', '', 'project');
if(mysqli_connect_errno()){
	echo 'Failed to connect to the MYSQL: '.mysqli_connect_error();
	};
	$get= mysqli_query($connection,"SELECT * FROM users");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Love</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;

		}
		body{
			font-family: arial;
			font-size: 15px;
			line-height: 1.5em;
			background: grew;
		}
		#container{
			background: darkgrey;
			margin: 50px auto;
			overflow: auto;
			width: 60%;
			min-height: 630px;
		}
		header{
			color: white;

			font-size: 22px;
			padding: 15px 0 10px 10px;
			border-bottom:1px solid green ;
		}
		#hey{
			width: 90%;
			background: lightgray;
			height: 400px;
			margin: 20px auto;
			overflow: auto;
		}
		#hey .mine{
			list-style: none;
			padding: 8px;
			border-bottom: 1px dotted white;

		}
		.mine span{
			color: blue;

		}
		#input{
			width: 90%;
			min-height: 80px;
			margin: auto;
			padding: 0;
		}
		#input input[type='text']{
			height: 25px;
			width: 48%  ;
			padding: 3px;
			margin-bottom: 20px;
			border: darkgrey solid 1px ;
		}
		#input .btn{
			padding: 5px;
			margin-bottom: 20px;
			width: 100%;
			margin: 10px auto;
			background: gray;
		}
		.error{
			background: red;
			color: white;
			padding: 5px auto;
			margin-bottom: 5px;
		}
		@media only screen and (max-width: 768px){
			#input input[type='text']{
				width: 98% ;
			}
		}
	</style>
</head>
<body>
	<div id="container">
		<header>
			<h1>DHARMMILLIES</h1>
		</header>
		<div id="hey"> 
			<ul>
				<?php while($row = mysqli_fetch_array($get)): ?>
				<li class="mine"><span><?php echo $row['time']; ?> - </span><?php echo $row['usernmae']; ?>: <?php echo $row['message']; ?></li> 
				<?php endwhile; ?>  
			</ul>

		</div>
		<?php 
			if(isset($_POST['submit'])){
			$username = mysqli_real_escape_string($connection, $_POST['usernmae']);
			$message = mysqli_real_escape_string($connection, $_POST['message']);

			date_default_timezone_set('America/New_York');
			$time = date('h:i:s a', time());

			if (!isset($username) || $username == '' || !isset($message) || $message == '') {
				// code...
				echo 'Pls enter your username and message';
				
			}else{
				$gets = "INSERT INTO users(usernmae, message, time) values ('$username', '$message', '$time') ";

				if (!mysqli_query($connection, $gets)) {
					// code...
					die ('Error: '.mysqli_error($connection));
				}else{
					header("Location: index.php");
					exit(); };
			};
		};

		?>
		<div id="input">
			<form method="post" >
			<?php if (isset($_GET['error'])) : ?>
				<div class="error"><?php echo $_GET['error']; ?></div>
			<?php endif; ?> 
			
				<input type="text" name="usernmae" placeholder="Enter your name">
				<input type="text" name="message" placeholder="Enter your message"><br/>
				<input class="btn" type="submit" name="submit" value="Subnmit">
			</form>
		</div>
	</div>
</body>
</html>   