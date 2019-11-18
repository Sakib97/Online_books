<?php
$status = 0;
if( isset($_GET['status']) && $_GET['status']){
  $status = $_GET['status'];
}

$db = mysqli_connect('localhost', 'root', '', 'bookproject');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/logo2.png" />
    <title>Book Shelf Search</title>
    <style media="screen">
  body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

.c1{
  margin-top: 3%;
  margin-bottom: 5%;
}
.ff{
  margin-top: 33%;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  border-radius: 0;

}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

    </style>
  </head>
  <body>
    <?php if ($status==1) { ?>
      <?php include('login_navbar.php') ?>
                   <?php } else { ?>
                     <?php include('navbar.php'); ?>
                     <?php } ?>


<div class="container c1">
  <form class="example" action="search.php?status= <?php echo $status; ?>" method="post" style="margin:auto;max-width:500px">
    <input type="text" placeholder="Search Books & Authors.." name="search" required>
    <button type="submit" name="search_btn"><i class="fa fa-search"></i></button>
  </form>
</div>
<div class="container">
  <?php
    if(isset($_POST['search_btn'])) {
      $search = $_POST['search'];
     $search_query = "SELECT b_id AS id, bookname, writername , 'bangla' AS type FROM banglabooks
                      WHERE bookname LIKE '%$search%' OR writername LIKE '%$search%'
                      UNION
                      SELECT e_id as id, bookname, writername , 'english' AS type FROM englishbooks
                      WHERE bookname LIKE '%$search%' OR writername LIKE '%$search%' " ;
   $result = mysqli_query($db,$search_query);
   $num_rows = mysqli_num_rows($result);

   ?>
   <br> <br>
   <p> <strong><?php echo $num_rows; ?></strong> results found for '<strong><?php echo $search; ?></strong>' </p> <hr>
   <?php
          while ($row = mysqli_fetch_assoc($result)) {
              $type = $row['type'];
              $id = $row['id'];
              $title = $row['bookname'];
              $author = $row['writername'];
              if ($type == 'bangla' && $status == 1) {
                  echo '<h3> <a href = "bangla_book_page.php?b_id= '.$id.'&status= '.$status.' ">'  .$title.   '</a> </h3>';
                  echo "<div> $author </div>" ;
                  echo "<hr>";
                }  else if($type == 'bangla' && $status != 1) {
                  //  echo '<h3> <a href = "sorry.php ">'  .$title.   '</a> </h3>';
                    echo '<h3> <a href = "bangla_book_page.php?b_id= '.$id.'&status= '.$status.' ">'  .$title.   '</a> </h3>';
                    echo "<div> $author </div>" ;
                    echo "<hr>";
                  }

              if ($type == 'english' && $status == 1) {
              echo '<h3> <a href = "english_book_page.php?e_id= '.$id.'&status= '.$status.' ">'  .$title.   '</a> </h3>';
              echo "<div> $author </div>" ;
              echo "<hr>";
            }  else if ($type == 'english' && $status != 1){
                  //  echo '<h3> <a href = "sorry.php ">'  .$title.   '</a> </h3>';
                  echo '<h3> <a href = "english_book_page.php?e_id= '.$id.'&status= '.$status.' ">'  .$title.   '</a> </h3>';
                  echo "<div> $author </div>" ;
                  echo "<hr>";
                  }

              }

          }
    ?>

</div>


<footer class="footer ff" style="padding: 2% 0 2% 0;color:white;font-size: 100%; text-align: center">
  <p>Follow us on <br>
    <a href="https://twitter.com" target="_blank">   <i class="icon i2 fab fa-twitter" ></i></a>
    <a  href="https://instagram.com" target="_blank">  <i class="icon i3 fab fa-instagram"></i></a>
    <a href="https://facebook.com" target="_blank"> <i class="icon i1 fab fa-facebook-square"></i> </a>
  </p>
  &copy; Digital Book Shelf 2018, ALL RIGHTS RESERVED</footer>

    <?php //include('footer.php') ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
