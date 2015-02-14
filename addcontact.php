<html>
 <head> 
 <title>Add Contact</title> 
 <link rel="stylesheet" type="text/css" href="style.css" /> 
 </head> 
 <body> 
 <?php  
 $dbc = mysqli_connect('localhost', 'root', 'deepthi0208', 'applicantdb') or die('Error1 connecting to MySQL server.'); 
 $fname = $_POST['ﬁrst']; 
 $last = $_POST['lastname']; 
 $gender=$_POST['Gender'];
 $dob=$_POST['dob'];
 $email = $_POST['email']; 
 $phone = $_POST['phone'];
 $country=$_POST['country'];
 $state=$_POST['state'];
 $year=$_POST['year'];
 $type=$_POST['interest'];
 $comment=$_POST['comment']; 
 $query = "INSERT INTO applicants     
VALUES ('$fname', '$last', '$gender', '$dob', '$email','$phone','$country','$state','$year','$type','$comment')"; 
 //mysqli_query($query);
 mysqli_query($dbc, $query) or die('Error2 querying database.'); 
 echo 'Applicant added.'; 
 mysqli_close($dbc); 
 ?> 
 </body> 
</html>