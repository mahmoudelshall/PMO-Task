<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <!--      start  nav     -->
    <nav>
        <div>
            <img src="img/favicon.png">
            <h1>START</h1>
        </div>
         <ul>
              <li><a href="index.php">Home</a></li>
              <li>About</li>
              <li>Service</li>
              <li>Help</li>
              <li>Contact </li>
          </ul>
          <?php 
          
          if(isset($_SESSION['user'])){

         ?>
         <div>
             <span><?= $_SESSION['user']['name'] ?> </span> |
             <a style="color:aliceblue;" href="logout.php">Logout</a>
         </div>
        <?php   } else{  ?>
          <div >
              <a style="color:aliceblue;" href="login.php">Login</a> | 
              <a style="color:aliceblue;" href="registrate.php">Sign in</a>
            </div>
        <?php } ?>
       </nav>     
<!--      end  nav     -->
<!--      start   header section     -->

   <header>
     <div class="head-content">       
        <h3>Computer And Laptop</h3>
        <h1>Accessories</h1>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
        <div class="cont">
            <button>Buy Now</button>
            <button>Contact</button>
        </div>
           
    </div>
    <img src="img/pct.png">
    <div class="spinnar-parent">
        <div class="spinner">
            <span class="spinner-cricle"></span>
        </div>
       </div>
 </header> 
<!--      end   header section     -->
<!--      start   Product  section     -->
   <section class="products-section">
    <span class="title">OUR PRODUCTS</span>
    <br>
    <div class="products">
        <div class="product-cart">
            <img src="img/product1.png">
            <h1>Keybord</h1>
            <p class="desc">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod... <a href="#">read more</a></p>
            <p>Price:<span>30$</span></p>
             <div class="buy">Buy Now</div>
       </div>
         <div class="product-cart">
            <img src="img/product2.png">
            <h1>Mouse</h1>
            <p class="desc">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod... <a href="#">read more</a></p>
            <p>Price:<span>30$</span></p>
            <div class="buy">Buy Now</div>
       </div>
         <div class="product-cart">
            <img src="img/product3.png">
            <h1>Microphone</h1>
            <p class="desc">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod... <a href="#">read more</a></p>
            <p>Price:<span>100$</span></p>
            <div class="buy">Buy Now</div>

       </div>
        <div class="product-cart">
            <img src="img/product4.png">
            <h1>Speakers</h1>
            <p class="desc">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod... <a href="#">read more</a></p>
            <p>Price:<span>60$</span></p>
            <div class="buy">Buy Now</div>
       </div>
         <div class="product-cart">
            <img src="img/product5.png">
            <h1>Internet</h1>
            <p class="desc">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod... <a href="#">read more</a></p>
            <p>Price:<span>200$</span></p>
             <div class="buy">Buy Now</div>
       </div>
         <div class="product-cart">
            <img src="img/product6.png">
            <h1>Hardisk</h1>
            <p class="desc">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod... <a href="#">read more</a></p>
            <p>Price:<span>300$</span></p>
            <div class="buy">Buy Now</div>
       </div>
         <div class="product-cart">
            <img src="img/product7.png">
            <h1>Rams</h1>
            <p class="desc">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod... <a href="#">read more</a></p>
            <p>Price:<span>150$</span></p>
            <div class="buy">Buy Now</div>

       </div>
        <div class="product-cart">
            <img src="img/product8.png">
            <h1>Bettery</h1>
            <p class="desc">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod... <a href="#">read more</a></p>
            <p>Price:<span>60$</span></p>
            <div class="buy">Buy Now</div>
       </div>
      </div>
    </section>
    
<!--      end   Product  section     -->
<!--      start   Footer  section     -->
    <footer>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12305.87366981996!2d31.326005615662233!3d30.05925796373919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e5b7a84e367%3A0x9005621d9ad5bb6c!2sNasr%20City%20Hospital%20For%20Health%20Insurance!5e0!3m2!1sen!2seg!4v1655723962836!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="form-data">
            <span>Contact US</span>
             <form>
                <input type="text" placeholder="Enter your name">
                <input type="email" placeholder="Enter your email ">
                <textarea>Enter Your massage</textarea>
                <button>Send</button>
        
          </form>
        </div>
       
    </footer>
    
    
    
    
<!--      end   Footer  section     -->
</body>
</html>