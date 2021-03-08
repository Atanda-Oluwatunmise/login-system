<!DOCTYPE HTML>  
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Login</title>
	<link rel="stylesheet" href="style.css" type = "text/css">
</head>
<body> 
<?php session_start();
// define variables and set to empty values
$First_NameErr = $SurnameErr = $emailErr = $websiteErr ="";
$First_Name = $Surname = $email = $website ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['First_Name'] = $_POST['First_Name'];
    if($_SESSION['First_Name']){
        header('location:profile.php');
      }
    if (empty($_POST["First_Name"])) {
        $First_NameErr = "";
      } else {
        $First_Name = test_input($_POST["First_Name"]);
        // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$First_Name)) {
        $First_NameErr = "Only letters and white space allowed";
      }
      }
      $_SESSION['Surname'] = $_POST['Surname'];
      if (empty($_POST["Surname"])) {
        $SurnameErr = "";
      } else {
        $Surname = test_input($_POST["Surname"]);
        // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Surname)) {
        $SurnameErr = "Only letters and white space allowed";
      }
      }

      $_SESSION['email'] = $_POST['email'];
      if (empty($_POST["email"])) {
        $emailErr = "";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
      }
      $_SESSION['website'] = $_POST['website'];
      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "";
      }
      
    }
    }
  

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  ?>
<div class="login">
			<h1>Login</h1>
<form method="post" action="form.php">
<label for="First_name">
					<i class="fas fa-user"></i>
				</label>
<input type="text" name="First_Name" placeholder ="Enter First name" value = "<?php echo $First_Name;?>">
<span class="error">* <?php echo $First_NameErr;?></span>
<br><br>
<label for="Surname">
					<i class="fas fa-user"></i>
				</label>
<input type="text" name="Surname" placeholder ="Enter Surname" value = "<?php echo $Surname;?>">
<span class="error">* <?php echo $SurnameErr;?></span>
<br><br>
<label for="email">
				</label>
<input type="text" name="email"placeholder ="Enter email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>

<label for="website">
				</label>
<input type="text" name="website" placeholder ="Enter website" value="<?php echo $website;?>">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>



<input type="submit" name="submit" value="Login in">
</form>
		</div>
</body>
</html>
