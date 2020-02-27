<?php
  include 'database.php';
  $result = $database;
  
  //solo gli autori
  if(!empty($_GET['author-list'])) {
    $authors = [];
    
    foreach ($database as $key => $cd) {
      $thisAuthor = $cd['author'];
      if(!in_array($thisAuthor, $authors)) {
        $authors[] = $thisAuthor;
      }
    }

    $result = $authors;
  }
  //cd filtrati per autore
  elseif (!empty($_GET['author'])) {
    $authorFilter = $_GET['author'];
    //filtro i dati e mando solo cd con questo autore
    $cdsFiltered = [];

    foreach ($database as $cd) {
      $nameAuthor = $cd['author'];
      if($authorFilter == $nameAuthor) {
        $cdsFiltered[] = $cd;
      }
    }
    
    $result =  $cdsFiltered;

  } 


  header('Content-Type: application/json');
  echo json_encode($result);


