 <?php
  include 'partials/header.php';
  ?>

 <body>
   <header>
     <div class="container">
       <img class="logo" src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
       <?php // include 'database.php' 
        ?>
       <select name="search" id="search-cd">
         <option value="">All</option>
         <?php //foreach ($database as $value) { 
          ?>
         <!-- <option value="<?php //echo $value['author'] 
                              ?>"><?php // echo $value['author'] 
                                  ?></option> -->
         <?php //} 
          ?>
       </select>
     </div>
   </header>
   <!-- container dei cd -->
   <div class="cds">

   </div>

   <!-- template cd -->
   <script id="entry-template" type="text/x-handlebars-template">
     <div class="cd">
      <img class="cd-image" src="{{poster}}" alt="">
      <h2 class="cd-title">{{title}}</h2>
      <h3 class="cd-author">{{author}}</h3>
      <small class="cd-date">{{year}}</small>
    </div>
  </script>

   <!-- template cd -->
   <script id="entry-option" type="text/x-handlebars-template">
     <option value="{{author}}">{{author}}</option>
   </script>

   <!-- nostro script -->
   <script src="dist/app.js"></script>
 </body>

 </html>