<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $mobile = $_POST["mobile"];

    //Save the user's information to a text file
    $file = fopen("user_data.txt", "a"); // Open the file in append mode
    fwrite($file, "Name: " . $name . "\n");
    fwrite($file, "Email: " . $email . "\n\n");
    fwrite($file, "City: " . $city . "\n");
    fwrite($file, "Mobile: " . $mobile . "\n");

    fclose($file);

    //Datbase Connection
/* $conn = new mysqli('localhost','root','', 'register_user');
    if($conn->connect_eror){
        die('Connnection Failed : '.$conn->connect_eror);
    }else{
        $stmt -> $conn->prepare("insert into registration(name, email, city, mobile)values(?, ?, ?, ?)");
        $stmt->bind_param("sssssi",$name, $email, $city, $mobile);
        echo"registration succedful...";
        $stmt->close();
        $conn->close();
    }*/
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submission Successful</title>
    <style>

    body{
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            margin-top: 200px;
    }
    .container{
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            border-width: 0, 2px;
            border: solid black;
            max-width: fit-content;
            padding: 5px;
        }

        p{
            color: black;
            font-size: 1.1em;
        }

        h1{
            border: solid 2px, brown;
        }

        .rem{
            color: red;
            font-size: 1.3em;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You!</h1>
        <p>Your information has been submitted successfully.<br><br>
        <span class="rem">You will be get all remainders and notification via registered Email Addrss.<span>
        </p>
        <a href="index.html">Go Back To Home Page</a>
    </div>
</body>
</html>
