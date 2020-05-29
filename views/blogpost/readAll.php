 
    
                <div id="realTimeContents">         

<div class="container">
    <div class="row">
        <div class="col">
            <!--      1 of 3-->
        </div>
        <div class="col-6">
            <!--      2 of 3 (wider)-->
        </div>
        <div class="col">
            <!--      3 of 3-->
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!--      1 of 3-->
        </div>
        <div class="col-5">
            <!--      2 of 3 (wider)-->
        </div>
        <div class="col">
            <!--      3 of 3-->
        </div>
    </div>
</div>

      <!-- ForEach over our blogposts -->
        
<!--   //Attempts to move the translate API to the right hand side:-->
<!--<div dir="rtl" lang="">-->
<!--<style>
.google_translate_element {
  border: 5px outset red;
  background-color: lightblue;    
  text-align: center;
}
</style>-->
<!--<style>
    .google_translate_element {
    align: center;
}
</style>-->
           <p>Translate this page:</p>

<div class="container">
    <div class="row">
        <div class="form-group">
            <input class="form-group">
    <div class="col-lg-8"></div>
    <div class="col-lg-4">
<div id="google_translate_element"> 
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>      
 </div>
</div>
</div>
    </div>
    </div>
<!-- Banner -->

<div class="jumbotron">
    <h1 class="display-3">Welcome to Pawsome</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
</div>

<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
    
            <!-- Blog Post #1 -->
            <div class="card mb-4">
                
                 <?php foreach ($blogposts as $blogpost) {                 
     try{    
         if(empty($blogpost->blogPostPhoto)){
             throw new Exception("Picture is not available");
         }else{    
             $file = $blogpost->blogPostPhoto;

    $file = explode('/', $file, 5);      
   echo "<div>";
    $img = "<img class='card-img-top' src='$file[4]' alt='Card image cap' style='height: 700px; width: 100%; display: block;' />";

         echo $img;      }
     } catch (Exception $e){
         echo 'Message: ' .$e->getMessage();
     }
?>                
<!--                <img class="card-img-top" src='' alt="Card image cap">-->
                <div class="card-body">
                    <h2 class="card-title">                    
                                <?php echo $blogpost->blogPostName; ?> 
                    </h2>
                    <p class="card-text">   <?php echo $blogpost->blogPostSubName; ?>  </p>
                     <a class="btn btn-primary" href='?controller=blogpost&action=read&id=<?php echo $blogpost->blogpostID; ?>'>Read More &rarr;</a>    
                </div>
                <div class="card-footer text-muted">
                    <?php echo $blogpost->datePosted; ?> 
<!--                    Posted on January 1, 2017 -->
                    <a href='?controller=blogpost&action=update&id=<?php echo $blogpost->blogpostID; ?>'>Edit</a>
                    <a href='?controller=blogpost&action=delete&id=<?php echo $blogpost->blogpostID; ?>'>Delete</a>
                </div>
            </div>
            <?php } ?>

<!--             Blog Post #2 
            <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a href="#" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on January 1, 2017 by
                    <a href="#">Start Bootstrap</a>
                </div>
            </div>-->

            <!--           Side Widget 
                    <div class="card my-4">
                      <h5 class="card-header">Side Widget</h5>
                      <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                      </div>
                    </div>
            
                  </div>
            
                </div>
                 /.row 
            
              </div>
               /.container -->

         