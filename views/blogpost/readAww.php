<div id="realTimeContents">  <!-- Search Box on Navbar opening-->
<!-- Page Container -->
<div class="container-fluid">
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Column -->
            <div class="col-md-2"></div>
            <!-- Blog Entries Column -->
            <div class="col-md-8">                
                <!--Text banner-->
                <!--<div class="col-md-8  py-3">-->
                    <h1 class="display">AWW</h1>
                    <p class="lead">Get ready to gush over these cuties!</p>
                <!--</div>
                <!-- Blog Post | For Each -->
                <?php
                foreach ($blogposts as $blogpost) {
                    try {
                        if (empty($blogpost->blogPostPhoto)) {
                            throw new Exception("Picture is not available");
                        } else {
                            $filePath = $blogpost->blogPostPhoto;
                            $splitFilePath = explode('/', $filePath);
                            $imageName = end($splitFilePath);
                            //echo "<div>";
                            $img = "<img class='card-img-top' src='views/images/$imageName' alt='Card image cap';/>";
//                          echo $img;
                        }
                    } catch (Exception $e) {
                        echo 'Message: ' . $e->getMessage();
                    }
                    ?>                
                    <div class='card mb-4'>
    <!--  the below line will show the following <img class='card-img-top' src='views/images/$imageName' alt='Card image cap';/>-->
                        <?php echo $img; ?>
                        <div class="card-body">
                            <h2 class="card-title">                    
                                <?php echo $blogpost->blogPostName; ?> 
                            </h2>
                            <p class="card-text">   <?php echo $blogpost->blogPostSubName; ?>  </p>
                            <a class="btn btn-primary" href='?controller=blogpost&action=read&id=<?php echo $blogpost->blogpostID; ?>'>Read More &rarr;</a>    
                        </div>
                        <div class="card-footer text-muted">
                            <?php echo "Posted: " .   $blogpost->datePosted; ?> 
                             <?php if(!empty($_SESSION)){ ?>
                            <a href='?controller=blogpost&action=update&id=<?php echo $blogpost->blogpostID; ?>'>Edit</a>
                            <a href='?controller=blogpost&action=delete&id=<?php echo $blogpost->blogpostID; ?>'> Delete</a>
                              <?php }?>
                        </div>                      
                    </div>
                    <div class="display-4"> </div>           
                <?php } ?>
            </div> 
            <div class="mb-4"></div>
        </div> 
        <div class="col-md-2"></div>
    </div>
</div>
</div> <!-- Search Box on Navbar closing -->






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





<!--                <div id="realTimeContents">         

<div class="container">
    <div class="row">
        <div class="col">
                  1 of 3
        </div>
        <div class="col-6">
                  2 of 3 (wider)
        </div>
        <div class="col">
                  3 of 3
        </div>
    </div>
    <div class="row">
        <div class="col">
                  1 of 3
        </div>
        <div class="col-5">
                  2 of 3 (wider)
        </div>
        <div class="col">
                  3 of 3
        </div>
    </div>
</div>-->

<!-- ForEach over our blogposts -->


<!--      Centered content TO TRY LATER -->
<!--      
      <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      1 of 3
    </div>
    <div class="col-md-auto">
      Variable width content
    </div>
    <div class="col col-lg-2">
      3 of 3
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-md-auto">
      Variable width content
    </div>
    <div class="col col-lg-2">
      3 of 3
    </div>
  </div>
</div>-->


<!-- Banner -->

<!--<div class="container">
    <h1 class="display-3">WOW</h1>
    <p class="lead">Animals never cease to amaze us!</p>
</div>-->

<!-- Banner -->
<!--<div class="fluid">
  <div class="container">
    <h2 class="display-4">WOW</h2>
    <p class="lead">Animals never cease to amaze us!</p>
  </div>
</div>-->

