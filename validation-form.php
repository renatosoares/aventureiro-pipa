chapter: Validation and Error Handling
==================
Example: Building a form that validates its fields before submission
<html>
<head>
   <script language="JavaScript1.2" SRC="source.js"></script>
   <title>Sample Form</title>
</head>

<script language="JavaScript1.2">
    function check_valid(form) {
    var error = "";
    error += verify_username(form.username.value);
    error += verify_password(form.password.value);
    error += verify_phone(form.phone.value);
    error += verify_email(form.email.value);
    if (error != "") {
       alert(error);
       return false;
    }
return true;
}
</script>

<body bgcolor="#FFFFFF">
    <form action="process.php" method="post"
onSubmit="return check_valid(this)" id="test1" name="test1">
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td width="30%" ALIGN="right">Username</td>
            <td width="70%">: <input type="text" name="username" /></td>
        </tr>

        <tr>
            <td align="right">Password</TD>
            <td>: <input type="password" NAME="password" /></td>
        </tr>
        <tr>
            <td ALIGN="right">Phone</td>
            <td>: <INPUT TYPE="phone" NAME="phone" /></td>
        </tr>
        <tr>
            <td align="right">Email</td>
            <td>: <input type="email" NAME="email" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="SUBMIT" value="Submit" /></td>
        </tr>
    </table>
    </form>
</body>
</html>



====================================
Example: The file source.js contains functions to check the various fields
// Verify username - 6-10 chars, uc, lc, and underscore only.
function verify_username (strng) {
var error = "";
if (strng == "") {
    error = "You didn't enter a username.\n";
}
    var illegalChars = /\W/; // allow letters, numbers, and underscores
    if ((strng.length < 6) || (strng.length > 10)) {
        error = "The username is the wrong length. It must be 6-10 characters.\n";
    }
    else if (illegalChars.test(strng)) {
        error = "The username contains illegal characters.\n";
    }
    return error;
}

// Verify password - between 6-8 chars, uppercase, lowercase, and numeral
function verify_password (strng) {
    var error = "";
    if (strng == "") {
        error = "You didn't enter a password.\n";
    }
    var illegalChars = /[\W_]/; // allow only letters and numbers

    if ((strng.length <= 6) || (strng.length >= 8)) {
        error = "The password is the wrong length. It must be 6-8 characters.\n";
    }
    else if (illegalChars.test(strng)) {
        error = "The password contains illegal characters.\n";
    }
    else if (!((strng.search(/(a-z)+/)) && (strng.search(/(A-Z)+/)) &&
(strng.search(/(0-9)+/)))) {
        error = "The password must contain at least one uppercase letter, one
lowercase letter, and one numeral.\n";
    }
    return error;
}

// Verify email
function verify_email (strng) {
    var error="";
    if (strng == "") {
        error = "You didn't enter an email address.\n";
    }

    var emailFilter=/^.+@.+\..{2,3}$/;
    if (!(emailFilter.test(strng))) {
        error = "Please enter a valid email address.\n";
    }
    else {
        //test email for illegal characters
        var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/;
        if (strng.match(illegalChars)) {
            error = "The email address contains illegal characters.\n";
        }
    }
    return error;
}

// Verify phone number - strip out delimiters and verify for 10 digits
function verify_phone (strng) {
var error = "";
    if (strng == "") {
       error = "You didn't enter a phone number.\n";
    }
    //strip out acceptable non-numeric characters
    var stripped = strng.replace(/[\(\)\.\-\ ]/g, '');
    if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters.";

    }
    if (!(stripped.length == 10)) {
        error = "The phone number is the wrong length. Make sure you
included an area code.\n";
    }
    return error;
}



====================================

\b[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}\b



====================================

 [a-zA-Z]{2}



====================================

 [^a-zA-Z]



====================================

preg_match (string pattern, string subject [, array groups])



====================================
Example: Using preg_match to return an array of matches that start with ple
<?php
$subject = "example";
$pattern = '/^ple/';
preg_match($pattern, $subject, $matches);
print_r($matches);
?>



====================================

Array (  )



====================================
Example: Displaying an error from PHP and redisplaying the form with submitted values
<html>
<head>
<title>Sample Form</title>

<script type="text/javascript" src="source.js"></script>
<script type="text/javascript">
function check_valid(form) {
    var error = "";
    error += verify_username(form.username.value);
    error += verify_password(form.password.value);
    error += verify_phone(form.phone.value);
    error += verify_email(form.email.value);
    if (error != "") {
        alert(error);
        return false;
    }
    return true;
}
</script>
</head>
<body>
<?php
// Check for form post submit
if ($_POST["submit"]){
    require_once('db_login.php');
    require_once('DB.php');
    $connection = DB::connect("mysql://$db_username:$db_password@$db_host/
$db_database");
    if (DB::isError($connection)){
        die ("Could not connect to the database: <br />". DB::errorMessage
($connection));
    }
    // Remember to use htmlentities to prevent cross-site scripting vulnerabilities
    $username = $_POST["username"];
    $username=mysql_real_escape_string(get_magic_quotes_gpc(  ) ? stripslashes
($username) : $username);
    $password = $_POST["password"];
    $password=htmlentities(get_magic_quotes_gpc(  ) ? stripslashes($password) :
$password);
    $email = $_POST["email"];
    $email=htmlentities(get_magic_quotes_gpc(  ) ? stripslashes($password) :
$password);
    $phone = $_POST["phone"];
    $phone=htmlentities(get_magic_quotes_gpc(  ) ? stripslashes($phone) : $phone);
    $error = "";

    if (is_null($username == "")){
        $error .= "Username must not be null.<br />";
    }
    if ($password == ""){
        $error .= "Password must not be null.<br />";
    }
    if ($email == ""){
        $error .= "Email must not be null.<br />";
    }
    if ($phone == ""){
        $error .= "Phone must not be null.<br />";
    }

    // Query the posts with categories and user information
    $query = "SELECT * FROM users WHERE username='$username'";
    // Execute the database query
    $result = $connection->query($query);
    if (DB::isError($result)){
        die("Could not query the database: <br />".$query." ".DB::errorMessage
($result));
    }
    $user_count = $result->numRows(  );
    if ($user_count > 0) {
        $error .= "Error: Username $username is taken already. Please select another.
<br />";
    }
    if ($error){
        echo $error;
    } else {
        echo "Username is available.";
        exit;
    }
}
?>
<!--This script will process the results as well as display the form-->
<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="POST"
onsubmit="return check_valid(this);" id="test1" name="test1">
    <table>
        <tr>
            <td width="30%" align="right">Username:</td>
            <td><input type="text" name="username"
value="<?php echo ($username); ?>" />
</td>
        </tr>
        <tr>
            <td align="right">Password:</td>
            <td><input type="password" name="password"
value="<?php echo($password); ?>" />
</td>
        </tr>
        <tr>
            <td align="right">Phone:</td>
            <td><input type="phone" name="phone" value="<?php echo($phone);
?>" /></td>
        </tr>
        <tr>
            <td align="right">Email:</td>
            <td><input type="email" name="email" value="<?php echo($email);
?>" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Submit" /></td>
         </tr>
    </table>
</form>
</body>
</html>



====================================

display_errors = On; //causes errors to print to the screen



====================================

error_reporting(bitwise_combination_of_levels);



====================================

error_reporting(E_ERROR | E_WARNING | E_PARSE);



====================================

error_log = /tmp/debug.log



==================

<?php
  require_once('connectvars.php');

  if (isset($_POST['submit'])) {
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Grab the report data from the POST
    $first_name = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
    $last_name = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    $when_it_happened = mysqli_real_escape_string($dbc, trim($_POST['whenithappened']));
    $how_long = mysqli_real_escape_string($dbc, trim($_POST['howlong']));
    $how_many = mysqli_real_escape_string($dbc, trim($_POST['howmany']));
    $alien_description = mysqli_real_escape_string($dbc, trim($_POST['aliendescription']));
    $what_they_did = mysqli_real_escape_string($dbc, trim($_POST['whattheydid']));
    $fang_spotted = mysqli_real_escape_string($dbc, trim($_POST['fangspotted']));
    $other = mysqli_real_escape_string($dbc, trim($_POST['other']));

    if (!empty($first_name) && !empty($last_name) && !empty($when_it_happened) && !empty($how_long) && !empty($what_they_did)) {
      // Write the data to the database
      $query = "INSERT INTO aliens_abduction (first_name, last_name, email, when_it_happened, how_long, how_many, alien_description, what_they_did, fang_spotted, other) " .
        "VALUES ('$first_name', '$last_name', '$email', '$when_it_happened', '$how_long', '$how_many', '$alien_description', '$what_they_did', '$fang_spotted', '$other')";
      mysqli_query($dbc, $query);

      // Confirm success with the user
      echo '<p>Thanks for adding your abduction.</p>';
      echo '<p><a href="index.php">&lt;&lt; Back to the home page</a></p>';

      mysqli_close($dbc);
      exit();
    }
    else {
      echo '<p class="error">Please enter your full name, date of abduction, how long you were abducted, and a brief description of the aliens.</p>';
    }
  }
?>

  <p>Share your story of alien abduction:</p>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="firstname">First name:</label>
    <input type="text" id="firstname" name="firstname" value="<?php if (!empty($first_name)) echo $first_name; ?>" /> <br />
    <label for="lastname">Last name:</label>
    <input type="text" id="lastname" name="lastname" value="<?php if (!empty($first_name)) echo $last_name; ?>" /><br />
    <label for="email">What is your email address?</label>
    <input type="text" id="email" name="email" value="<?php if (!empty($email)) echo $email; ?>" /><br />
    <label for="whenithappened">When did it happen?</label>
    <input type="text" id="whenithappened" name="whenithappened" value="<?php if (!empty($when_it_happened)) echo $when_it_happened; else echo 'YYYY-MM-DD'; ?>" /><br />
    <label for="howlong">How long were you gone?</label>
    <input type="text" id="howlong" name="howlong" value="<?php if (!empty($how_long)) echo $how_long; ?>" /><br />
    <label for="howmany">How many did you see?</label>
    <input type="text" id="howmany" name="howmany" value="<?php if (!empty($how_many)) echo $how_many; ?>" /><br />
    <label for="aliendescription">Describe them:</label>
    <input type="text" id="aliendescription" name="aliendescription" size="32" value="<?php if (!empty($alien_description)) echo $alien_description; ?>" /><br />
    <label for="whattheydid">What did they do to you?</label>
    <input type="text" id="whattheydid" name="whattheydid" size="32" value="<?php if (!empty($what_they_did)) echo $what_they_did; ?>" /><br />
    <label for="fangspotted">Have you seen my dog Fang?</label>
    Yes <input id="fangspotted" name="fangspotted" type="radio" value="yes" <?php echo ($fang_spotted == 'yes' ? 'checked="checked"' : ''); ?> />
    No <input id="fangspotted" name="fangspotted" type="radio" value="no"  <?php echo ($fang_spotted == 'no' ? 'checked="checked"' : ''); ?> /><br />
    <img src="fang.jpg" width="100" height="175" alt="My abducted dog Fang." /><br />
    <label for="other">Anything else you want to add?</label>
    <textarea id="other" name="other"><?php if (!empty($other)) echo $other; ?></textarea><br />
    <input type="submit" value="Report Abduction" name="submit" />
  </form>
==================================


<?php
  $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
  $when_it_happened = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $how_many = $_POST['howmany'];
  $alien_description = $_POST['aliendescription'];
  $what_they_did = $_POST['whattheydid'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  $other = $_POST['other'];

  $to = 'owen@aliensabductedme.com';
  $subject = 'Aliens Abducted Me - Abduction Report';
  $msg = "$name was abducted $when_it_happened and was gone for $how_long.\n" .
    "Number of aliens: $how_many\n" .
    "Alien description: $alien_description\n" .
    "What they did: $what_they_did\n" .
    "Fang spotted: $fang_spotted\n" .
    "Other comments: $other";
  mail($to, $subject, $msg, 'From:' . $email);

  echo 'Thanks for submitting the form.<br />';
  echo 'You were abducted ' . $when_it_happened;
  echo ' and were gone for ' . $how_long . '<br />';
  echo 'Number of aliens: ' . $how_many . '<br />';
  echo 'Describe them: ' . $alien_description . '<br />';
  echo 'The aliens did this: ' . $what_they_did . '<br />';
  echo 'Was Fang there? ' . $fang_spotted . '<br />';
  echo 'Other comments: ' . $other . '<br />';
  echo 'Your email address is ' . $email;
?>

=======================================================================


<?php
$username = $_POST["username"];
$senha = 	$_POST["senha"];
$nome = 	$_POST["nome"];
$email = 	$_POST["email"];
$cidade = 	$_POST["cidade"];
$estado = 	$_POST["estado"];

$erro=0;

if (strlen($username)<5)
{	echo "O username deve possui no m�nimo 5 caracteres.<br>";   $erro=1; }

if (strlen($senha)<5)
{	echo "A senha deve possui no m�nimo 5 caracteres.<br>"; $erro=1;   }

if ($username == $senha)
{	echo "O username e a senha devem ser diferentes.<br>"; $erro=1;  }

if (empty($nome) OR strstr ($nome, ' ')==FALSE)
{	echo "Favor digitar seu nome corretamente.<br>"; $erro=1; }

if (strlen($email)<8 || strstr ($email, '@')==FALSE)
{	echo "Favor digitar seu e-mail corretamente.<br>"; $erro=1; }

if (empty($cidade))
{	echo "Favor digitar sua cidade.<br>"; $erro=1; }

if (strlen($estado)!=2)
{	echo "Favor digitar seu estado corretamente.<br>"; $erro=1; }

// VERIFICA SE N�O HOUVE ERRO
if($erro==0)
{	echo "Todos os dados foram digitados corretamente!"; }

?>
