<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>RMS Hardware Site</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style_2.css"/>

<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 50px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 50px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: center;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  font-size: 18px;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>
	
    <link rel="stylesheet" href="style_2.css"/>
</head>


<body>

        </div>

   
        <div id="content">
            <div id="title">
                <h2>Contact us</h2>
            </div>
        
        <div class="container">
            <form action="#">
            <table>
                <label for="fname">Name: </label>
                <tr>
                <input type="text" id="fname" name="fullname" placeholder="Enter your name here .....">
                </tr>
				
				<label for="Phone Number">Phone Number: </label><br>
                <tr>
				<input type="number" id="PhoneNumber" name="phonenumber" placeholder="Enter your phone number here....."><br><br>
                </tr>

                <label for="lemail">Email Address: </label><br>
                <tr>
                <input type="email" id="email" name="email" placeholder="Enter your email......."><br><br>
                </tr>

                <label for="message">Message: </label>
                <tr>
                <textarea id="message" name="message" placeholder="Enter your message......" ></textarea>
                </tr>
				<tr>
                <input type="submit" value="Submit">
                </tr>
            </table>
            </form>
        </div>


        </div>
		
		<div class="map">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.5061121028884!2d-84.28380444999999!3d30.421751549999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88ecf54398078fe5%3A0xee40e626028b8460!2sF.A.M.U.%2C%20Tallahassee%2C%20FL%2032301!5e0!3m2!1sen!2sus!4v1729549895455!5m2!1sen!2sus" width="600" height="450" style="border:5px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>



<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/Flat Head Screw Driver.png" width="600" height="450">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/Phillip Head Screw Driver.png" width="600" height="450">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/f350 Diesel Rental.png" width="600" height="450">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/Ford F-350 diesel dually Rental.png" width="600" height="450">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/Hibiscus Tahiti Tree.png" width="600" height="450">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/lawn-mower.png" width="600" height="450">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/Flat Head Screw Driver.png" height="220" style="width:100%" onclick="currentSlide(1)" alt="Flat Head Screw Driver">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/Phillip Head Screw Driver.png" height="220" style="width:100%" onclick="currentSlide(2)" alt="Phillip Head Screw Driver">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/f350 Diesel Rental.png" height="220" style="width:100%" onclick="currentSlide(3)" alt="Ford F350 Diesel Rental">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/Ford F-350 diesel dually Rental.png" height="220" style="width:100%" onclick="currentSlide(4)" alt="Ford F-350 diesel dually Rental">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/Hibiscus Tahiti Tree.png" height="220" style="width:100%" onclick="currentSlide(5)" alt="Hibiscus Tahiti Tree">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/lawn-mower.png" height="220" style="width:100%" onclick="currentSlide(6)" alt="Lawn Mower">
    </div>
  </div>
</div>
      
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</body>
</html>
