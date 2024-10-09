<?php
session_start();
include("connection.php");
include("functions.php");

$user_data=check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" conyent="width=device-width", initial-scale="1.0">
        <title>PET SHOP</title>

        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- custom css file link-->
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
    <!--header section starts-->
    <header>

        <div id="menu" class="fas fa-bars"></div>
        <a href="#" class="logo"><i class="fa-solid fa-paw"></i>paWfectly</a> 
        
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#category">Category</a>
            <a href="#featured">Featured</a>
            <a href="#products">Products</a>
            <a href="#offer">Offer</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>
    
        <form action="" id="search-box">
            <input type="search" id="search" placeholder="search here">
            <label for="search" class="fas fa-search"></label>
        </form>
    </header>
    <!--header section ends-->
    
    <!--home section starts-->
    <section class="home" id="home">
        <div class="content">
            <span>upto 50% off</span>
            <h3>We care for<br> your pets!</h3>
            <a href="#" class="btn">get started</a>
        </div>
    </section>

    <section class="category" id="category">

        <h1 class="heading"><i class="fas fa-paw"></i>Shop by Category<i class="fas fa-paw"></i></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pexels-pixabay-248307.jpg" alt="">
                <h3>Food for Dogs</h3>
                <a href="#" class="btn">Shop now</a>
            </div>

            <div class="box">
                <img src="images/pexels-kelvin-valerio-617278.jpg" alt="">
                <h3>Food for Cats</h3>
                <a href="#" class="btn">Shop now</a>
            </div>

            <div class="box">
                <img src="images/pexels-ali-atakan-açıkbaş-10595503.jpg" alt="">
                <h3>Food for Rabbits</h3>
                <a href="#" class="btn">Shop now</a>
            </div>

            <div class="box">
                <img src="images/pexels-mali-maeder-75973.jpg" alt="">
                <h3>Food for Birds</h3>
                <a href="#" class="btn">Shop now</a>
            </div>
         </div>
    </section>
    <!--home section ends-->

    <!-- features section starts  -->
    
    <section class="featured" id="featured">

        <h1 class="heading"> <i class="fas fa-paw"></i> Our featured Products <i class="fas fa-paw"></i> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <div class="price">1862/-</div>
                <img src="images/dog food.png" alt="">
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Dogs food</h3>
                    <p>Pedigree Puppy Dry Dog Food, Chicken & Milk, 10g Pack</p>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="price">1800/-</div>
                <img src="images/peeeee.png" alt="">
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Soft Pet bed</h3>
                    <p>Pawgene Ultra comfy, best pet bed,made with memory foam and pure cotton</p>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
    
            <div class="box">
                <div class="price">387/-</div>
                <img src="images/cat food.png" alt="">
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Cats food</h3>
                    <p>Cat treats Dry Cat Food,Ocean Fish Flavour,1.2kg</p>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="price">460/-</div>
                <img src="images/rabbit food.png" alt="">
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Rabbits food</h3>
                    <p>Versele Laga, Rabbit Food 1kg, Complete cuni adult</p>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="price">799/-</div>
                <img src="images/paWsitive-min.png" alt="">
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Pet Dress</h3>
                    <p>Pawsitive pet short and sweet round neck sleevless vest tank T-shirt</p>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            

            <div class="box">
                <div class="price">532/-</div>
                <img src="images/bird food.png" alt="">
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Birds Food</h3>
                    <p>Versele Laga, Exotic Fruit Bird Food, 600g</p>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
    
        </div>
    
    </section>

<!-- featured section ends  -->

<!-- deal section starts  -->

<section class="deal">

    <span>Upto 70% off</span>
    <h3>Tasty and Healthy Pets Food</h3>
    <a href="#" class="btn">See the Deals now</a>

</section>

<!-- deal section ends -->

<!--products section starts-->

<section class="products" id="products">

    <h1 class="heading"> <i class="fas fa-paw"></i> Our Latest Products <i class="fas fa-paw"></i> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/dog food.png" alt="">
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>healthy pets food</h3>
                <div class="price"> $10.03 <span>12.50</span> </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <img src="images/dog belt.png" alt="">
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>healthy pets food</h3>
                <div class="price"> $10.03 <span>12.50</span> </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <img src="images/dog scraf.jpeg" alt="">
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>healthy pets food</h3>
                <div class="price"> $10.03 <span>12.50</span> </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <img src="images/cat food.png" alt="">
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>healthy pets food</h3>
                <div class="price"> $10.03 <span>12.50</span> </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <img src="images/cat playing.webp" alt="">
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>healthy pets food</h3>
                <div class="price"> $10.03 <span>12.50</span> </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <img src="images/bird food.png" alt="">
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>healthy pets food</h3>
                <div class="price"> 10.03 <span>12.50</span> </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

    </div>

</section>
<!--products section ends here-->

<!-- offer section starts  -->

<section class="offer" id="offer">

    <h1 class="heading"> <i class="fas fa-paw"></i> our latest offer <i class="fas fa-paw"></i> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/offer-img1.webp" alt="">
            <div class="content">
                <span>best offer</span>
                <h3>upto 40% off</h3>
                <a href="#" class="btn">see offer</a>
            </div>
        </div>

        <div class="box">
            <img src="images/offer-img2.webp" alt="">
            <div class="content">
                <span>only for today</span>
                <h3>upto 80% off</h3>
                <a href="#" class="btn">see offer</a>
            </div>
        </div>

    </div>

</section>

<!-- offer section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <i class="fas fa-paw"></i> contact us <i class="fas fa-paw"></i> </h1>

    <form action="">

        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>

        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>

        <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>

        <input type="submit" value="send message" class="btn">

    </form>

</section>

<!-- contact section ends -->

<!-- footer section  -->

<section class="footer">
    
    <div class="share">
        <a href="#" class="btn">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="#" class="btn">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="btn">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="btn">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="#" class="btn">
            <i class="fab fa-instagram"></i>
        </a>
    </div>

    <h1 class="credit">  | all rights reserved! </h1>

</section>














    <!--jquery cdn link-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- custom js file link-->
        <script src="script.js"></script>
    </body>
</html>



