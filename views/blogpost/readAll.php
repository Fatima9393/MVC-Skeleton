<p>Here is a list of all Blog posts:</p>

<?php foreach($blogposts as $blogpost) { ?>
  <p>
<<<<<<< HEAD
    <?php echo $blogpost->title; ?> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=read&id=<?php echo $blogpost->id; ?>'>See blogpost information</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=delete&id=<?php echo $blogpost->id; ?>'>Delete blogpost</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=update&id=<?php echo $blogpost->id; ?>'>Update blogpost</a> &nbsp;
=======
    <?php echo $blogpost->blogPostName; ?> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=read&id=<?php echo $blogpost->blogpostID; ?>'>See blogpost information</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=delete&id=<?php echo $blogpost->blogpostID; ?>'>Delete blogpost</a> &nbsp; &nbsp;
    <a href='?controller=blogpost&action=update&id=<?php echo $blogpost->blogpostID; ?>'>Update blogpost</a> &nbsp;
>>>>>>> mvcpets
  </p>
<?php } ?>