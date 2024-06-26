<?php
$conn = new mysqli("localhost", "root", "", "hci");

if ($conn->connect_error){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $amountToPay = isset($_POST['amountToPay']) ? $_POST['amountToPay'] : '';
    $cashAmount = isset($_POST['cashAmount']) ? $_POST['cashAmount'] : '';
    $change = isset($_POST['change']) ? $_POST['change'] : '';

    // Insert data into the database
    $sql = "INSERT INTO Orders (Email, Name, Address, AmountToPay, CashAmount, ChangeAmount) 
            VALUES ('$email', '$name', '$address', '$amountToPay', '$cashAmount', '$change')";

    // Check if the query was successful
    if (mysqli_query($conn, $sql)) {
    echo <<<HTML
        <div class="success-message text-white text-center" style="position: fixed; bottom: 10px; left: 10px; background-color: #C4A484; padding: 25px; border-radius: 45px; width: 200px;">
            <p style="font-weight: bold; color: #FFFFFF !important;">ORDER PLACED SUCCESSFULLY!</p>
        </div>
HTML;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    

    // Close the database connection
    mysqli_close($conn);
}

echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARSBAKS</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="submit_order.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
 
</head>
<body>
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="logo.png" alt="" class="navbar-logo">
            <a class="navbar-brand" href="#"><strong>STARSBAKS</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: auto;">
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link home-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

    <div class="text-center text-white">
        <p>FOLLOW US ON SOCIAL MEDIA:</p> 
        <a href="https://www.instagram.com/_starsbaks?igsh=dDF2OXg4YWliNHRm" target="_blank"><img src="instaicon.webp" alt="Instagram" class="social-logo"></a>
        <a href="https://www.facebook.com/profile.php?id=100095000918464" target="_blank"><img src="fbicon.png" alt="Facebook" class="social-logo"></a>
        <a href="https://youtube.com/@starsbaks?si=oaFsDNJcoLLyewmx" target="_blank"><img src="yticon.png" alt="YouTube" class="social-logo"></a>
        <a href="starsbakssti@gmail.com" target="_blank"><img src="gmailicon.jpg" alt="Gmail" class="social-logo"></a>
    </div>

    <div class="video-container">
        <video controls autoplay muted loop id="autoplayVideo" width="640" height="360">
            <source src="last.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var video = document.getElementById('autoplayVideo');
            video.play();
        });
    </script>


</body>
</html>
HTML;
?>
