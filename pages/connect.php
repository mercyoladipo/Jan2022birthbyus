<?php 

// $email = $_POST['email'];
// if (!empty($email)){
//     $host = "localhost";
//     $dbusername = "root";
//     $dbpassword = "";
//     $dbname = "early-access";

//     $conn = new msqli($host, $dbusername, $dbpassword, $dbname);
//     if (mysqli_connect_error()) {
//         die("Connect Error (". mysqli_connect_errno(). ')' . mysqli_connect_error());
//     }
//     else{
//         $SELECT = "SELECT  email From early-access-requests Where email = ? Limit 1";
//         $INSERT = "INSERT Into early-access-requests (email) values(?)";

//         //prepare statement
//         $stmt = $conn->prepare($SELECT);
//         $stmt->bind_param("s", $email);
//         $stmt->execute();
//         $stmt->bind_result($email);
//         $stmt -> store_result();
//         $rnum = $stmt -> num_rows;

//         if ($rnum ==0) {
//             $stmt->close();

//             $stmt = $conn->prepare($INSERT);
//             $stmt->bind_param("s", $email);
//             $stmt->execute();
//             echo "new record inserted";
//         }
//         else{
//             echo "someone already used this email.";
//         }
//         $stmt->close();
//         $conn->close(;)

// }
// else{
//     echo("Please enter email");
//     die();
// }
// $email = filter_input(INPUT_POST, "email");
// if (!empty($email)){
//     $host = "localhost";
//     $dbusername = "root";
//     $dbpassword = "";
//     $dbname = "early-access";

// }

// // create connection
// $conn = new msqli($host, $dbusername, $dbpassword, $dbname);

// if (mysqli_connect_error()){
//     die("Connect Error (". mysqli_connect_errorno() . ')'
//     .mysqli_connect_error());
// }
// else{
//     $sql = 'INSERT INTO early-access-requests(email)
//     values ("$email")';
//     if ($conn->query($sql)){
//         echo "New record inserted successfully";
//     }
//     else{
//         echo "Error: ". $sql ."<br>". $conn->error; 
//     }
//     $conn->close();
// }

// else{
//     echo "Please enter your email";
//     die();

// }
?>