<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Travel Photography Portfolio</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
          </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Gallery</a></li>
               
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h1>Travel Photography Portfolio</h1>
            <p>Welcome to my travel photography portfolio showcasing my adventures around the world.</p>
        </section>

       

        <section id="about" class="about">
            <h2>About</h2>
            <p>Welcome to my portfolio, where I combine my love for photography with the thrill of exploring new places. Through travel photography, I strive to capture the essence of each destination, showcasing its unique beauty, vibrant cultures, and fascinating people.</p>
            <p>My goal is to evoke a sense of wanderlust and inspire others to embark on their own adventures. By freezing moments in time, I aim to preserve memories and emotions that can be relived and shared with viewers. Through my visual storytelling, I hope to ignite curiosity and encourage people to explore the world.</p>
            <p>One of the things I love most about travel photography is its ability to bridge cultural gaps and foster understanding. By immersing myself in local communities, I capture the traditions, customs, and ways of life that make each place special. Through my lens, I strive to convey the rich tapestry of human experiences and foster empathy across cultures.</p>
            <p>To create compelling images, I continuously refine my technical skills and explore creative perspectives. Mastering composition, lighting, and timing allows me to capture the perfect shot that showcases the destination's unique character. I adapt to different environments and weather conditions, making the most of available natural light and seeking out angles that offer fresh and captivating views. By employing post-processing techniques, I enhance the visual impact of my photographs, bringing out the true essence of each location.</p>
            <p>Join me on this visual journey as we explore the world together. Through my portfolio, I hope to transport you to far-off places, evoke emotions, and inspire you to embark on your own adventures. Let's celebrate the beauty, diversity, and stories of our planet through the lens of travel photography.</p>
          </section>
   
          <section id="portfolio">
            <h2>Gallery</h2>
            <div class="slideshow-container">
              <img class="mySlides" src="img/1.jpg" alt="Image 1" />
              <img class="mySlides" src="img/2.jpg" alt="Image 2" />
              <img class="mySlides" src="img/3.jpg" alt="Image 3" />
              <img class="mySlides" src="img/4.jpg" alt="Image 4" />
              <img class="mySlides" src="img/5.jpg" alt="Image 5" />
              <img class="mySlides" src="img/6.jpg" alt="Image 6" />
              
              <!-- Navigation buttons -->
              <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
              <a class="next" onclick="changeSlide(1)">&#10095;</a>
            </div>
          </section>
          

        <section id="contact">
            <h2>Contact Us For Capture Your Golden Memaories </h2>
            <!-- Contact form or information -->
        </section>
    </main>


	<table >
        <form action="#" method="post">
      <td>Name:</td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td>Date:</td>
      <td><input type="date" name="date"></td>
    </tr>
   
<tr>
            <td>Telephone Number:</td>
            <td><input type="tel" name="telephone"></td>
        </tr>
    <tr>
      <td colspan="2"><button type="submit" name="send" class="btn">SUBMIT</button></td>
    </tr>
  </form>
    </table>
	    <aside>
        <h3>Related Links</h3>
        <!-- Related links or resources -->
    </aside>

   

    <footer>
        <div class="social-media">
            <a href="https://www.facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
          </div>
          
        <div class="contact-info">
            <!-- Contact information -->
        </div>
    </footer>
    <script src="scripts.js"></script>
	
	
	
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $date = $_POST["date"];
    $telephone = $_POST["telephone"];

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO details (name, date, telephone) VALUES ('$name', '$date', '$telephone')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}




?>

</body>
</html>
