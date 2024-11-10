<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mubashira Naseem - Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

<header>
    <nav>
        <div class="left">Mubashira Portfolio</div>
        <div class="right">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <!-- Home Section -->
    <section id="home" class="firstsection">
        <div class="leftsection">
            <h1>Hi, My Name is <span style="color: rgb(104, 69, 137);">Mubashira Naseem</span></h1>
            <p>and I am a passionate</p>
            <span id="element"></span>
        </div>
        <div class="rightsection">
            <img src="im.avif" alt="Profile Image">
        </div>
    </section>

    <hr>

    <!-- About Section -->
    <section id="about" class="about-section">
        <h1>About Me</h1>
        <div class="about-content">
            <div class="about-icon">
                <i class="fas fa-user-circle fa-5x"></i>
            </div>
            <div class="about-text">
                <h2>Hello, I'm Mubashira Naseem!</h2>
                <p>I am a passionate web developer with experience in designing and developing responsive websites and applications. My skills include HTML, CSS, JavaScript, PHP, and jQuery. I love creating engaging user experiences and working on innovative projects.</p>
                <p>In my final year, I developed a Restful API based short video platform that allows users to upload, share, and view videos seamlessly.</p>
                <p>I'm always eager to learn new technologies and improve my skills. Feel free to connect with me!</p>
            </div>
        </div>
    </section>

    <hr>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <h1>Work Experience</h1>
        <ul>
            <li>
                <h3>Final Year Project: Restful API Based Short Video Platform</h3>
                <p>Developed a platform that allows users to upload, share, and view short videos. Utilized technologies such as PHP, jQuery, and RESTful APIs to create a seamless user experience.</p>
            </li>
            <li>
                <h3>R Gallery App</h3>
                <p>Designed and developed the R Gallery App to showcase a collection of artwork using a dynamic and interactive interface. Built the app using HTML, CSS, and JavaScript to ensure smooth navigation and an engaging user experience.</p>
            </li>
            <li>
                <h3>Web Developer</h3>
                <p>Designed and developed responsive websites using HTML, CSS, and JavaScript.</p>
            </li>
            <li>
                <h3>Video Editor</h3>
                <p>Edited videos for various projects, focusing on storytelling and visual aesthetics.</p>
            </li>
            <li>
                <h3>Web Designer</h3>
                <p>Created visually appealing web designs that enhance user engagement and functionality.</p>
            </li>
        </ul>
    </section>

    <hr>

  <!-- Contact Section -->
<section id="contact" class="contact-section">
    <h1>Contact Me</h1>
    <form class="contact-form" action="" method="post"> <!-- Updated action to current page -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" name="submit">Send Message</button>
    </form>
</section>

</main>

<footer>
    <div class="footer">
        <div class="first-footer">
            <h3>Mubashira Developer Portfolio</h3>
        </div>
        <div class="second-footer">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>
        </div>
    </div>
    <div class="text">
        <p>© 2024 Mubashira Naseem. All rights reserved.</p>
    </div>
</footer>

<?php
// Database connection parameters
$host = 'localhost';
$dbname = 'portfolio';
$username = 'root';
$password = '';

// Create a new connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection

// Database connection parameters
$host = 'localhost';
$dbname = 'portfolio';
$username = 'root';
$password = '';

// Create a new connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the form data and escape to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO sms (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql))  // If the query was successful
    echo "<script>
            alert('Thank you! Your submission was successful.');
            window.location.href = 'thank_you.php'; // Redirect to another page if needed
          </script>";
} else {
    // If the query failed
    echo "<script>
            alert('There was an error. Please try again.');
       
          </script>";
}

// Close the connection
mysqli_close($conn);
?>


<script src="script.js"></script>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<script>
    var typed = new Typed('#element', {
        strings: ['Web Developer', 'Video Editor', 'Web Designer'],
        typeSpeed: 50,
    });
</script>

</body>
</html>
