<?php 
//$feedback_txt = $_POST['suggestion'];
$conn = mysqli_connect("localhost", "mumbai","Mellob1989@", "temp"); 
//PUT YOUR MYSQL DB CREDENTIALS HERE, THESE CREDENTIALS ARE JUST EXAMPLE.
$feedback_txt = $conn->real_escape_string($_POST['suggestion']); 
$query = "insert into feedback(feedback)values('".$feedback_txt."')"; 
$result = mysqli_query($conn, $query);
if($result)
//   die("gggg");
//    echo '".$feedback_txt."'
  echo '<script>alert("Message sent, you can always leave me a message here!")</script>'; 
 // header("Location: http://message.cryptomine.network");
else
  die("Something terrible happened. Please try again. ");
?>


<!DOCTYPE html> <html> <head> <meta http-equiv="refresh" 
    content="0; url='http://message.cryptomine.network'" />
  </head> <body> <p>Please follow <a 
    href="http://message.cryptomine.network">this link</a>.</p>
  </body>
</html>
