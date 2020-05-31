<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4"><?php echo $blogpost->blogPostName; ?></h1>


            <!-- Date/Time 
            <p>Posted on January 1, 2019 at 12:00 PM</p>
    
            <hr>-->

            <!-- Preview Image -->
            <img class="img-fluid rounded" alt="" >
            <?php
            $file = $blogpost->blogPostPhoto;
            if (file_exists($file)) {
                $file = explode('/', $file, 5);
                $img = "<img src='$file[4]' width='150' />";
                echo $img;
            } else {
                echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
            }
            ?>
            <h2><?php echo $blogpost->blogPostSubName; ?></h2>
            <hr>

            <!-- Post Content -->
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

            <hr>


            <!-- Comments Form -->
            <div class="card my-4">
                <form action="" method="POST" class="" enctype="multipart/form-data">    
                    <h5 class="card-header">Leave a Comment:</h5>

                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="1" type="text" name="Username" placeholder="Name" required></textarea>
                                <textarea class="form-control" rows="3" name="Comment" placeholder="Comment" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
            </div>


            

             
            <!-- Single Comment -->
            <div class="card mb-4">
                <div class="media-body">
                     <h5 class="card-header">Comments submitted</h5>
                    <?php
                    try {
                        if ($comments) {
                            foreach ($comments as $comment1) {
                                ?>  
                                <h5 class="mt-0"<?php echo $comment1->username; ?>></h5>                                           
                                <p><?php echo $comment1->commentContent; ?></p>
                                <p> <?php echo $comment1->commentTime; ?></p>   
                                
                                <a href='?controller=blogpost&action=read&id=<?php echo $_GET['id']; ?>&CommentID=<?php echo $comment1->commentID; ?>'>Delete</a> &nbsp; &nbsp;

                                <?php
                            }
                        } else {
                            throw new Exception('No comments');
                        }
                    } catch (Exception $e) {
                        echo '';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div> 


