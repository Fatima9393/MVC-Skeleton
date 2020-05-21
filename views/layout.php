<!DOCTYPE html>
<!--index > layout > routes > controller > functionality (models)-->
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >
<link rel="stylesheet" href="views/css/styles.css">
<title>Shopping Cart</title>
  </head>
  <body>
    <header class="w3-container w3-gray">
      <a href='/MVC-Skeleton'>Home</a>
      <a href='?controller=product&action=readAll'>Products</a> 
      <a href='?controller=product&action=create'>Add Product</a>
      <a href='?controller=blogpost&action=readAll'>Blogs</a>
      <a href='?controller=blogpost&action=create'>Add Blog</a>
    </header>
<div class="w3-container w3-pink">
    <?php require_once('routes.php'); ?>
</<div>
<div class="w3-container w3-gray">
    <footer >
        Copyright &COPY; <?= date('Y'); ?>
        
        
<!--The other way that we can do this is not just typing the URL in the browser, but embedded in the HTML are what are called anchor tags which are clickable links that have an href, 
a Hyper Text Reference, inside that.
Each time the user clicks on an anchor tag with an href = value to switch to a new page, the browser makes a connection to the web server and issues a GET request - to GET the contents of the page at the specified URL.
The server returns the HTML document to the browser, which formats and displays the document to the user.-->
    </footer>
</div>
  </body>
</html>