<html>
 <head>
 <title>Remove Contact</title> 
 <link rel="stylesheet" type="text/css" href="style.css" /> 
 </head> 
 <body> 
 <?php 
 $dbc = mysqli_connect('localhost', 'root', 'deepthi0208', 'applicantdb') or die('Error 
connecting to MySQL server.'); 
 $email = $_POST['email']; 
 $query = "DELETE FROM applicants WHERE email = '$email'"; 
 mysqli_query($dbc, $query) or die('Error2 querying database.'); 
 echo '<h2>Applicant removed: ' . $email . "<\h2>"; 
 mysqli_close($dbc); 
 ?> 
 </body> 
</html>