
<?php
$status =0;
if( isset($_GET['status']) && $_GET['status']){
  $status = $_GET['status'];
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/logo2.png" />
    <title>Book Shelf English Books</title>

  </head>
  <body>
    <?php
if ($status == 1) {
  include('login_navbar.php');
}else{
    include('navbar.php');
}
   ?>


     <div class="container">
     <div class="menu2">
       <div class="list1">
        <b>Thriller</b>
       </div>
     </div>
   </div>

   <div class="container mt-3">
     <div class="row">
       <div class="owl-carousel owl-theme">

         <div class="item">
           <div class="card">
             <?php if ($status==1) { ?>
               <a href="english_book_page.php?e_id=1&status=1"><img src="images/abndroom.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                    <a href="english_book_page.php?e_id=1&status=0"><img src="images/abndroom.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


             <div class="card-body">
               <h3>Abandoned Room</h3>

             </div>
           </div>
         </div>

         <div class="item">
           <div class="card">
             <?php if ($status==1) { ?>
                <a href="english_book_page.php?e_id=2&status=1"><img src="images/gonegirl.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                      <a href="english_book_page.php?e_id=2&status=0"><img src="images/gonegirl.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


             <div class="card-body">
               <h3>Gone Girl</h3>

             </div>
           </div>
        </div>

        <div class="item">
          <div class="card">
            <?php if ($status==1) { ?>
              <a href="english_book_page.php?e_id=3&status=1"><img src="images/inferno.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                      <a href="english_book_page.php?e_id=3&status=0"><img src="images/inferno.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


            <div class="card-body">
              <h3>Inferno</h3>

            </div>
          </div>
       </div>

       <div class="item">
         <div class="card">
           <?php if ($status==1) { ?>
             <a href="english_book_page.php?e_id=4&status=1"><img src="images/origin.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                    <a href="english_book_page.php?e_id=4&status=0"><img src="images/origin.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


           <div class="card-body">
             <h3>Origin</h3>

           </div>
         </div>
      </div>

      <div class="item">
        <div class="card">
          <?php if ($status==1) { ?>
              <a href="english_book_page.php?e_id=5&status=1"><img src="images/wind.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                         <a href="english_book_page.php?e_id=5&status=0"><img src="images/wind.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


          <div class="card-body">
            <h3>Windmills of the Gods</h3>

          </div>
        </div>
     </div>

       </div>
     </div>
   </div>

   <div class="container">
     <div class="menu2">
       <div class="list1">
        <b>Romance</b>
       </div>
     </div>
   </div>

   <div class="container mt-3">
     <div class="row">
           <div class="owl-carousel owl-theme">
             <div class="item">
               <div class="card">
                 <?php if ($status==1) { ?>
                   <a href="english_book_page.php?e_id=6&status=1"><img src="images/fault.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                     <a href="english_book_page.php?e_id=6&status=0"><img src="images/fault.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


                 <div class="card-body">
                   <h3>The Fault in Our Stars</h3>

                 </div>
               </div>
             </div>

             <div class="item">
               <div class="card">
                 <?php if ($status==1) { ?>
                   <a href="english_book_page.php?e_id=7&status=1"><img src="images/pride.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                  <a href="english_book_page.php?e_id=7&status=0"><img src="images/pride.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


                 <div class="card-body">
                   <h3>Pride and Prejudice</h3>

                 </div>
               </div>
             </div>

             <div class="item">
               <div class="card">
                 <?php if ($status==1) { ?>
                   <a href="english_book_page.php?e_id=8&status=1"><img src="images/notre.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                     <a href="english_book_page.php?e_id=8&status=0"><img src="images/notre.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


                 <div class="card-body">
                   <h3 style="font-size: 130.5% ">The Hunchback of the Notre-Dame</h3>

                 </div>
               </div>
             </div>

             <div class="item">
               <div class="card">
                 <?php if ($status==1) { ?>
                   <a href="english_book_page.php?e_id=9&status=1"><img src="images/she.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                  <a href="english_book_page.php?e_id=9&status=0"><img src="images/she.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


                 <div class="card-body">
                   <h3>She</h3>

                 </div>
               </div>
             </div>

             <div class="item">
               <div class="card">
                 <?php if ($status==1) { ?>
                   <a href="english_book_page.php?e_id=10&status=1"><img src="images/return.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                  <a href="english_book_page.php?e_id=10&status=0"><img src="images/return.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


                 <div class="card-body">
                   <h3>Return of She</h3>

                 </div>
               </div>
             </div>

           </div>
     </div>
   </div>




      <?php include('footer.php') ?>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

      <script src="js/owl.carousel.js" charset="utf-8"></script>
      <script>
      $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:5
              }
          }
      })
      </script>


  </body>
</html>
