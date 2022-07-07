<?php
$favoriteBooks = ["india","paskitan"]; 
function addFavoriteBook($bookName){
    if(str_contains($bookName,"Great")==false){
     
        global $favoriteBooks;
        array_push($favoriteBooks,$bookName);

    }
  }
  function printFavoriteBooks(){
    global $favoriteBooks;
    echo "Favorite Books: ..", count($favoriteBooks)."<br>";

    foreach($favoriteBooks as $book){
        echo "$book <br>";

    }
    
  
  }
 
addFavoriteBook("india treat");
printFavoriteBooks();
