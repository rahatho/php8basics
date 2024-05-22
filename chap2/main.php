<code>
    <?php
    error_reporting(E_ALL);
    ini_set("diplay_errors",1);
    
    $title = "Beginning PHP 8 & MySQL";
    $content = "Here is the main content for this page by php";

    $html = "
    <!DOCTYPE html>
    <html lang='en'><?php
    <head>
        <meta charset='UTF-8'>
        <title>$title</title>
        <meta name= 'description' content = 'Basic HTML5 Page'>
        <meta name= 'author' content= 'Rahat'>
        
        <link rel= 'stylesheet' href= 'css/styles.css?v=1.0'>
    </head>
    <body>
      $content  
    </body>
    </html>";
    
    echo $html;
    ?>
</code>