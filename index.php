<?php
class Store {
   private $name;
   private $image;
   private $description;
   private $products = [];

   public function __construct($name, $image, $description) {
       $this->name = $name;
       $this->image = $image;
       $this->description = $description;
   }

   // Method to add a product to the store
   public function addProduct($product) {
       $this->products[] = $product;
   }

   
   public function getProducts() {
       return $this->products;
   }

}


class Product {
   private $title;
   private $image;
   private $price;

   public function __construct($title, $image, $price) {
       $this->title = $title;
       $this->image = $image;
       $this->price = $price;
   }

   // Getter methods
   public function getTitle() {
       return $this->title;
   }

   public function getImage() {
       return $this->image;
   }

   public function getPrice() {
       return $this->price;
   }
}



?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Uoni</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <link rel="stylesheet" href="css/cssm.css">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="#"><img src="images/search-icon.png"></a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="index.html">Home</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="banner_taital">Watchs</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Buy Now</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Watchs</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Buy Now</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Watchs</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Buy Now</a></div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-plus" style="font-size:24px; color: #fff;"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-minus" style="font-size:24px;  color: #fff;"></i>
               </a>
            </div>
         </div>


              <?php
               // Create some Product objects
               $product1 = new Product("Smart whatch1", "images/1.jpg", '$100');
               $product2 = new Product("Smart whatch2", "images/2.jpg", '$200');
               $product3 = new Product("Smart whatch3", "images/3.jpg", '$300');

               // Create a Store object and add the products to it
               $store = new Store("My Online Store", "store.jpg", "Welcome to our online store!");
               $store->addProduct($product1);
               $store->addProduct($product2);
               $store->addProduct($product3);

               ?>



         <div class="container">
            <div class="row">
               <?php foreach ($store->getProducts() as $product) {?>
               <div class="col-4">
                  <div class="card">
                     <img src="<?php echo $product->getImage();?> " class="card-img-top" alt="...">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-10">
                              <h5 class="card-title"><?php echo $product->getTitle();?></h5>
                              <p class="card-text">
                                 <i class="bi bi-star-fill text-warning"></i>
                                 <i class="bi bi-star-fill text-warning"></i>
                                 <i class="bi bi-star-fill text-warning"></i>
                                 <i class="bi bi-star-fill text-warning"></i>
                                 <i class="bi bi-star-fill text-warning"></i>
                                 4.5 (20 reviews)
                              </p>
                           </div>
                           <div class="col-2"></div>
                        </div>
                       <a href="#" class="btn btn-primary">Add To Cart</a>
                     </div>
                     <div class="row align-item-center text-align">
                        <div class="col-4">
                           <h5><?php echo $product->getPrice();?></h5>
                        </div>
                        <div class="col-8"></div>
                     </div>
                   </div>
               </div>
               <?php }?>
         </div>




      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 All Rights Reserved. Design by <a href="https://html.design">Mohammed Balgaam</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>