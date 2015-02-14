<html>
 <head> 
 <meta charset="UTF-8"> 
 <title>Send Email</title> 
 </head> 
 <body> 
 <?php 
 // put your code here 
 require_once 'Mail.php'; 
 require_once 'Mail/RFC822.php'; 
  $subject = $_POST['subject']; 
 $text = $_POST['message']; 
 $from = 'gummi.rao@gmail.com'; 
 $smtp = array(); 
 $smtp['host'] = 'ssl://smtp.gmail.com'; 
 $smtp['port'] = 465; 
 $smtp['auth'] = true; 
 $smtp['username'] = 'gummi.rao@gmail.com'; 
 $smtp['password'] = '*********'; 
 $mailer = Mail::factory('smtp', $smtp); 
 //$recipients=array();
 //$recipients ='rajitha.vodela@gmail.com'; 
 $headers = array(); 
 $headers['From'] = 'gummi.rao@gmail.com'; 
 $dbc = mysqli_connect('localhost', 'root', 'deepthi0208', 'applicantdb') or die('Error1 
 connecting to MySQL server.'); 
 $query = "SELECT email FROM applicants"; 
 $result = mysqli_query($dbc, $query) or die('Error2 querying database.'); 
 while ($row = mysqli_fetch_array($result)) { 
 $to = $row['email']; 
$recipients =$to;
 $msg = "Hello,\n$text"; 
 $headers['To'] = $to; 
 $headers['Subject'] = $subject; 
 $msg = "Hello,  $text "; 
 $mailer->send($recipients, $headers, $msg); 
 echo 'Email sent to:'. $to ; 
 }
 mysqli_close($dbc); 
 ?> 
 </body> 

</html>