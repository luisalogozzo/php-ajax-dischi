<?php
include __DIR__ . '/database.php';


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="dist/app.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

     <title></title>
   </head>
   <body>
     <div class="container">
       <?php foreach ($db as $disc) { ?>
         <div class="disc">
           <img class='poster' src="<?php echo $disc['poster'] ?>" alt="">
           <h2> <?php echo $disc['title'] ?></h2>
           <h3> <?php echo $disc['author'] ?></h3>
           <h4> <?php echo $disc['genre'] ?></h4>
           <h4> <?php echo $disc['year'] ?></h4>

         </div>
       <?php } ?>

     </div>
   </body>
 </html>
