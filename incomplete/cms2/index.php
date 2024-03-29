<?php include("includes/header.php"); ?>
    <!-- Navigation -->
    <?php include("includes/navigation.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <?php 
                $post_query = "SELECT * FROM posts";
                $post_query_run = mysqli_query($con, $post_query);
                while ($post_query_row = mysqli_fetch_assoc($post_query_run)) {
                    $post_id = $post_query_row['post_id'];
                    $post_title = $post_query_row['post_title'];
                    $post_author = $post_query_row['post_author'];
                    $post_date = $post_query_row['post_date'];
                    $post_image = $post_query_row['post_image'];
                    $post_content = $post_query_row['post_content'];
                    ?>
               
                <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
                </h1>
                <!-- First Blog Post -->
                <h2>  <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
                <p class="lead"> by <a href="index.php"><?php echo $post_author; ?></a></p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                <hr>
                <p><?php echo $post_content;?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
            <?php }?>
            </div>
            <!-- Blog Sidebar Widgets Column -->
            <?php include("includes/sidebar.php"); ?>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Footer -->
        <?php include("includes/footer.php"); ?>
