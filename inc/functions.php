<?php // PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
$quotes[]= [
    'quote' => 'Me shooting 40% at the foul line is just God\'s way to say nobody\'s perfect.',
    'source' => 'Shaq',
    'tags'  => 'Sports',
    ];

    $quotes[]= [
    'quote' => 'If you can\'t explain it simply, you don\'t understand it well enough.',
    'source' => 'Einstein',
    'tags'  => 'Science / Education',
    ];

   $quotes[]= [
    'quote' => 'I am the one who knocks!',
    'source' => 'Brian Cranston as Walter White',
    'citation' => 'Breaking Bad, Seaosn 4: episode 6',
    'year'  => '   August 21, 2011',
    'tags'  => 'Entertainment',
   ];


   $quotes[]=  [
    'quote' => 'True happiness is found within the family… for your family to fall apart is to scorn your ancestors and future descendants.',
    'source' => 'Gregorio Zeppeli',
    'citation' => 'JoJo’s Bizarre Adventures pt. 7',
    'tags'  => 'Manga',
   ];

   $quotes[]=[
    'quote' => 'They thought search engines were a map of what people think, but actually they were a map of <strong>HOW </strong>people think.',
    'source' => 'Oscar Isaac as Nathan',
    'citation' => 'Ex Machina',
    'year'  => ' April 24, 2015',
    'tags'  => 'Science Fiction',
   ];

// Each inner array element should be an associative array

// I used var_dump( $quotes ); to validatethe inner arrays

// Create the getRandomQuuote function and name it getRandomQuote




$load_Colors[] =['#42f5bf', '#42d1f5', '#4293f5', '#4257f5' , '#9c42f5' , '#f542aa' ];
function changeColors($load_Colors){
    $rand_color = $load_Colors[rand(0,5)];
   echo $rand_color;   
};
function getRandomQuote($array){

    $rand_quotes = $array[rand(0,4)];
    return $rand_quotes;
};
//var_dump(getRandomQuote($quotes));

// Create the printQuote funtion and name it printQuote

function printQuote(){
    global $quotes;
   //I tested this function without putting global $quotes and the function does not see the quotes array, this shows the importance of identifying a variable (or array) going forward 
    $seenQuote = getRandomQuote($quotes);
    //here we placed the random quote function into a variable to be called on more efficiently
    $quotePrep = " ";
        $quotePrep .= "<p class= 'quote' >".  $seenQuote['quote']. "</p>";
        $quotePrep .= "<p class= 'source'>". $seenQuote['source']. "<br>" ;
        if($seenQuote['citation']){
            $quotePrep .= "<span  class= 'citation' , style= 'text-align:right;'>". $seenQuote['citation']. "</span> <br> ";
        }
        if($seenQuote['year']){
            $quotePrep .= "<span  class= 'year'>". $seenQuote['year']. "</span> <br>";
        }
        if($seenQuote['tags']){
            $quotePrep .= "<span  class= 'tags'>". $seenQuote['tags']. "</span>";
        }

        $quotePrep .= "</p>";
        echo $quotePrep;
        
    };
    $page = $_SERVER['PHP_SELF'];
    //$_SERVER['PHP_SELF'], from my undersanding this targets the php file and associates it to the command that follows 
    $reload= "15";   
    //code to reload the page every 15 seconds, I tried putting inside the function but I realized actions like this need to be in the global scope
    

?>
