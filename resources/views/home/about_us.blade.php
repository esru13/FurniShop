<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="js.js"></script>

    <!-- Additional CSS or JS files -->

</head>

<body>

<!-- Header Section -->
    @include('home.header');


      <!-- About Us Text Area -->
      <div class="about-us p-8 mx-auto max-w-7xl mt-20" style="background-color: #E6E6E6; border-radius: 10px;">
        <h2 class="text-3xl font-bold mb-4 text-center">About Us</h2>
        <p class="text-black-700 text-xl">
          Welcome to Furnishop, your destination for exquisite furniture and home decor. We are dedicated to transforming your living spaces into havens of comfort and style. With a discerning eye for quality and aesthetics, we curate a stunning collection of furniture pieces and accessories to suit every taste and budget.
          <br><br>
          At Furnishop, we believe that your home should be a reflection of your personality and a place where you can unwind and recharge. Our team of design experts is passionate about helping you create spaces that inspire and uplift. From elegant sofas and dining sets to chic lighting and decorative accents, our range encompasses a diverse selection of styles and trends.
          <br><br>
          We pride ourselves on offering exceptional customer service, ensuring that your shopping experience is seamless and enjoyable. Whether you visit our showroom or explore our online store, our knowledgeable staff is here to assist you every step of the way. We provide secure and convenient payment options, along with reliable delivery services, ensuring that your purchases arrive safely at your doorstep.
          <br><br>
          Discover the art of living beautifully with Furnishop. Let us accompany you on your journey to create a home that reflects your individuality and embraces the essence of comfort.
        </p>
      </div>
      <!-- Team Members -->
      <div class="mt-8 flex justify-center gap-8">
        <div class="team-section flex flex-wrap justify-center items-center gap-8">
          <h2 class="text-4xl font-bold mb-4 text-center w-full text-white">Meet Our Team</h2>
      
          <div class="team-member flex flex-col items-center mb-8">
            <img class="w-36 h-36 rounded-full object-cover border-4 border-white mb-4" src="beki/about_us/Beka.JPG" alt="Beka Tilahun">
                  <div class="text-center">
                    <h3 class="text-lg font-semibold mb-1 text-white">Beka Tilahun</h3>
                    <p class="text-white mb-2">FE UI/UX SRS</p>
                    <div class="social-links flex justify-center"> <!-- Modified -->
                      <a href="https://www.instagram.com/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-instagram"></i></a>
                      <a href="https://www.linkedin.com/in/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-linkedin-square"></i></a>
                      <a href="https://www.github.com/in/dani" target="_blank"><i class="bx bxl-github text-white text-2xl"></i></a>
                    </div>
                  </div>
          </div>
      
          <div class="team-member flex flex-col items-center mb-8">
          <img class="w-36 h-36 rounded-full object-cover border-4 border-white mb-4" src="beki/about_us/Dani.jpg" alt="Dani">
                  <div class="text-center">
                      <h3 class="text-lg font-semibold mb-1 text-white">Daniel Walelegn</h3>
                      <p class="text-white mb-2">FE SRS</p>
                      <div class="social-links flex justify-center"> <!-- Modified -->
                        <a href="https://www.instagram.com/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-linkedin-square"></i></a>
                        <a href="https://www.github.com/in/dani" target="_blank"><i class="bx bxl-github text-white text-2xl"></i></a>
                      </div>
                    </div>
          </div>
      
          <div class="team-member flex flex-col items-center mb-8">
            <img class="w-36 h-36 rounded-full object-cover border-4 border-white mb-4" src="beki/about_us/esru3.JPG" alt="Esru">
                  <div class="text-center">
                      <h3 class="text-lg font-semibold mb-1 text-white">Esrael Berhanu</h3>
                      <p class="text-white mb-2">BE</p>
                      <div class="social-links flex justify-center"> <!-- Modified -->
                        <a href="https://www.instagram.com/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-linkedin-square"></i></a>
                        <a href="https://www.github.com/in/dani" target="_blank"><i class="bx bxl-github text-white text-2xl"></i></a>
                      </div>
                    </div>
          </div>
      
          <div class="team-member flex flex-col items-center mb-8">
           <img class="w-36 h-36 rounded-full object-cover border-4 border-white mb-4" src="beki/about_us/kide.jpg" alt="Kide">
                  <div class="text-center">
                      <h3 class="text-lg font-semibold mb-1 text-white">Kidus Tesfaye</h3>
                      <p class="text-white mb-2">FE SRS</p>
                      <div class="social-links flex justify-center"> <!-- Modified -->
                        <a href="https://www.instagram.com/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-linkedin-square"></i></a>
                        <a href="https://www.github.com/in/dani" target="_blank"><i class="bx bxl-github text-white text-2xl"></i></a>
                      </div>
                    </div>
          </div>
        </div>
      </div>
      
      <div class="mt-8 flex justify-center gap-8">
        <div class="team-section flex flex-wrap justify-center items-center gap-8">
          <div class="team-member flex flex-col items-center mb-8">
           <img class="w-36 h-36 rounded-full object-cover border-4 border-white mb-4" src="beki/about_us/Sintu.jpg" alt="Sintu">
                  <div class="text-center">
                      <h3 class="text-lg font-semibold mb-1 text-white">Sintayehu Sisay</h3>
                      <p class="text-white mb-2">FE BE</p>
                      <div class="social-links flex justify-center"> <!-- Modified -->
                        <a href="https://www.instagram.com/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-linkedin-square"></i></a>
                        <a href="https://www.github.com/in/dani" target="_blank"><i class="bx bxl-github text-white text-2xl"></i></a>
                      </div>
                    </div>
          </div>
      
          <div class="team-member flex flex-col items-center mb-8">
           <img class="w-36 h-36 rounded-full object-cover border-4 border-white mb-4" src="beki/about_us/sosna.jpg" alt="Sosina">
                  <div class="text-center">
                      <h3 class="text-lg font-semibold mb-1 text-white">Sosina Birhanu</h3>
                      <p class="text-white mb-2">FE SRS</p>
                      <div class="social-links flex justify-center"> <!-- Modified -->
                        <a href="https://www.instagram.com/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-linkedin-square"></i></a>
                        <a href="https://www.github.com/in/dani" target="_blank"><i class="bx bxl-github text-white text-2xl"></i></a>
                      </div>
                    </div>
          </div>
      
          <div class="team-member flex flex-col items-center mb-8">
            <img class="w-36 h-36 rounded-full object-cover border-4 border-white mb-4" src="beki/about_us/Teamer.jpg" alt="Teamer">
                  <div class="text-center">
                      <h3 class="text-lg font-semibold mb-1 text-white">Teamir Ab/n</h3>
                      <p class="text-white mb-2">BE</p>
                      <div class="social-links flex justify-center"> <!-- Modified -->
                        <a href="https://www.instagram.com/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/beka" target="_blank" class="mr-2 text-white text-2xl"><i class="bx bxl-linkedin-square"></i></a>
                        <a href="https://www.github.com/in/dani" target="_blank"><i class="bx bxl-github text-white text-2xl"></i></a>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>



      <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body{
            background-color: #0F2547;
            font-family: 'Poppins', sans-serif;

        }
        </style>

</body>
</html>
