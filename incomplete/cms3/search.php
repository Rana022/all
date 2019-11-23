<?php include("includes/header.php"); ?>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <!-- top bar section -->
  <?php include("includes/navbar.php"); ?>
  <!-- intro -->
  <div id="intro">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <h1 class="text-center">killer video tuitorial</h1>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- post-section -->
  <div id="post-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <?php
          if (isset($_POST['submit'])) {
             $search = $_POST['search'];
             $search_query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
             $search_query_run = mysqli_query($con, $search_query);
             if (!$search_query_run) {
               die("search failed". mysqli_error($con));
             }
             $search_count = mysqli_num_rows($search_query_run);
             if ($search_count == 0) {
                echo "<h3 class='text-center'>no search result found</h3>";
             }else{
          while ($post_query_row = mysqli_fetch_assoc($search_query_run)) {
                $post_title = $post_query_row['post_title'];
                $post_date = $post_query_row['post_date'];
                $post_category = $post_query_row['post_category'];
                $post_image = $post_query_row['post_image'];
                $post_content = $post_query_row['post_content'];
                $post_tags = $post_query_row['post_tags'];
           ?>
          <div class="post">
            <h1><a href=""><?php echo $post_title; ?></a></h1>
            <div class="row">
              <div class="col-md-6">
                <p><?php echo $post_date; ?><span>posted in:</span> <a href=""><?php echo $post_category; ?></a></p> 
              </div>
              <div class="col-md-6">
                <div class="link-image">
                  <a href=""><img src="img/<?php echo $post_image; ?>" alt=""></a>
                </div>
              </div>
            </div>
            <div class="post-details">
              <p><?php echo $post_content; ?></p>
            </div>
            <hr>
          </div>
        <?php }
             }

          }
          ?>
          <!-- button -->
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- sidebar -->
        <?php include("includes/sidebar.php"); ?>
      </div>
    </div>
  </div>
<!-- footer-section -->
<?php include("includes/footer.php"); ?>