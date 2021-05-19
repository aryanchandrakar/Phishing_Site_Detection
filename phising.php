<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/index.css">
	<title>Phishing Checker</title>
</head>
<body>

	<div class="wrapper fadeInDown">
		<div class="qwe"><h style="color:black;float:left;"><b>THE WORLD SHALL KNOW!😱</b></h></div><br><br><br>
			<br>
			<span class="abc">
				<h3>LET'S FIND THE TRUTH🧐</h3>
				<span id="formContent" >
				  
					<form method="post" >
						<input type="text" name="content" placeholder="ENTER THE URL" style="border-radius:5px;padding:10px"><br>
						<input type="submit" name="add" value="READY TO DIG DEEPER🤨" >
					</form>
					
						<?php						
							// adding url to db
							error_reporting(E_ALL & ~E_NOTICE);
							if (isset($_POST['add'])){
								$content=$_POST['content'];
								
								//building connection to SQL
								$conn = mysqli_connect("localhost","root","","privacyportal",3307);
								//mysqli_connect(host, username, password, dbname, port, socket) changed the port earlier thus specify here
								//if($conn){echo "true";}
								$URL_addition="INSERT INTO `phishing`(`website_url`) VALUES ('$content');";
								mysqli_query($conn,$URL_addition);
								$conn->close(); 																	//SECURITY REASON
							/*}
							?>
						<?php*/
						
							//executing phishing checker
								$command_exec = escapeshellcmd('index.py');
								$str_output = shell_exec($command_exec);
							//echo $str_output;

						/*?>
						<?php*/
						
							//giving the output
								//error_reporting(E_ALL & ~E_NOTICE);
							//if (isset($_POST['add'])){
								//$content=$_POST['content'];
								
								//building connection to SQL
								$conn = mysqli_connect("localhost","root","","privacyportal",3307);
								//mysqli_connect(host, username, password, dbname, port, socket) changed the port earlier thus specify here
								//if($conn){echo "true";}
								$outputfetch ="SELECT type FROM phishing WHERE website_url='$content'";
								$output= mysqli_query($conn,$outputfetch);
								if($output->num_rows>0){
									while($row = $output->fetch_assoc()){
									$result= $row["type"];}
									echo "<p style='background-color:rgba(255,255,255,0.4);padding:5px 15px 5px 15px;color:white;'>" .$content. "--> " .$result. "</p>";
								}
								$conn->close();
							}
								
						?>
				</span>
			</span><br><br><br>
		<h4>IS IT PHISHING!</h4>
		<p style="background-color:rgba(0,0,0,0.6);padding:5px 15px 5px 15px;color:white;">PHISHING can be referred to as an computerized identity theft, which takes the benefit of human nature and the Internet to trap millions of people and take a great amount of money. It has been pragmatic that in last few years phishing attacks have grown speedily posturing a real threat to global security. The main attempt of these is to use the vulnerabilities present in the system, which may be either technical or due to user lack of knowledge.</p>
		
	</div>
</body>
</html>