<?php
 // Importing imported.php from sub_folder inside other_folder
 require '../Shared.php';

 if (isset($_POST["submit"]))
 {
 // Database connection code here

 $servername = "localhost"; // Assuming the database server is running locally
 $username = "root"; // Username
 $password = ""; // Empty password
 $dbname = "welink"; // Database name
 $conn = new mysqli($servername, $username, $password, $dbname);


 // Get the phone number from the form
$phone = $_POST["phone"];

// Check if the first digit is zero
if (substr($phone, 0, 1) === '0') {
    // If so, exclude it
    $phone = substr($phone, 1);
}

// Now, construct your SQL query
$sql = "INSERT INTO signup (Phone, Email, Password, FirstName, LastName) 
        VALUES ('" . $conn->real_escape_string($phone) . "', 
                '" . $conn->real_escape_string($_POST["email"]) . "', 
                '" . $conn->real_escape_string($_POST["password"]) . "', 
                '" . $conn->real_escape_string($_POST["firstname"]) . "', 
                '" . $conn->real_escape_string($_POST["lastname"]) . "')";

// Execute SQL query
$conn->query($sql);

 

 $sql = "INSERT INTO signup (Phone, Email, Password, FirstName, LastName) 
 VALUES ('" . $conn->real_escape_string(962 . $_POST["phone"]) . "', 
         '" . $conn->real_escape_string($_POST["email"]) . "', 
         '" . $conn->real_escape_string($_POST["password"]) . "', 
         '" . $conn->real_escape_string($_POST["firstname"]) . "', 
         '" . $conn->real_escape_string($_POST["lastname"]) . "')";

// Execute SQL query
$conn->query($sql);

$conn->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Sign Up.css">
    <!-- Include necessary CSS for the country code picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
</head>
<body> 
    
    <div class="overlay"></div>
    <div class="content">
        <div class="card">
            <div class="card2">
              <form class="form" method="post" action="">
              <p id="heading">Sign Up</p>
              <!-- Input field for the phone number -->
              <div class="field">
              <input type="tel" class="input-field" id="phone" name="phone" maxlength="9" placeholder="7XXXXXXXX">
              </div>
              
              <div class="field">
              <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="input-icon">
              <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
              </svg>
                <input type="text"  class="input-field" id="email" name="email" maxlength="30" placeholder="example@email.com">
              </div>
              <div class="field">
              <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="input-icon">
              <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
              </svg>
                <input type="password"  class="input-field" id="password" name="password" maxlength="30" placeholder="Password">
              </div>
              <div class="field">
              <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="input-icon">
              <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
              </svg>
              <input type="password"  class="input-field" id="confirm" name="confirm" maxlength="30" placeholder="Confirm password">
              </div>
              <div class="field">
    <input type="text"  class="input-field small-input" id="firstname" name="firstname" maxlength="10" placeholder="First Name">
    <input type="text" id="lastname" name="lastname" class="input-field small-input" maxlength="10" placeholder="Last Name">
</div>
              <div class="btnn">
              <a class="button1" href="../Log In/Log In.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <button   type="submit" class="button2" id="submit" name="submit" >Sign Up</button>
              </div>
              <a class="button3" href="../Get Code/Get Code.php" > Get Code </a>
              
          </form>
            </div>
              </div>
    </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script>
  // Initialize the phone number input with country code picker
  var input = document.querySelector("#phone");
  var iti = window.intlTelInput(input, {
    initialCountry: "jo", // Set the default country (e.g., "us" for United States)
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
  });
</script>

</body>
</html>