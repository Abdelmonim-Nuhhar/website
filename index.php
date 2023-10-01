<?php

   /* cookie = Information about user stored in a user web-browser
   targted advertisements, browsing preferences, and
   other non-senitive data.
   
   to create a cookie in PHP we use the set cookie function, 
   cookie is stored as array, first argu is the key, 2 argu is
   the value, 3 argu is an expiration time, the 4 argu is 
   the file path("/" is for default file path) 
   
   86400 is seconds in one day., if we want to expire in
   2 days just multiply by 2
   if we save the page and right click on the page,
   and go for inspect, we can find cookies under Application
   
   To delete the cookie just the time to - 0
   setcookie("fav_desert", "icecrem", time() - 0, "/");
   */ 

   
   setcookie("fav_food", "pizzaa", time()+ (86400 *2), "/");
   setcookie("fav_drink", "pepsi", time()+ (86400 ), "/");
   setcookie("fav_desert", "icecrem", time() - 0, "/");
/*
   foreach($_COOKIE as $key => $value){
    echo "{$key} = {$value}<br>";
   }
*/
   // To access to one of the value, the key is needed
   if(isset($_COOKIE["fav_food"])){
    echo"BUY SOME {$_COOKIE["fav_food"]}!!! <br>";
   }
   else{
    echo "I do not know your favorite food";
   }
?>

</head>
<body>
    
</body>
</html>
