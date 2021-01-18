<?php include("../database.php"); ?>
<?php include("./elements/header.php"); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startseite</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
  </head>

  <body>
    <div class="container">
      <h1>Startseite des Blogs</h1>
      <p class="lead">This blog is for testing MySQL & PHP on Xampp</p>
      <!--fetch and loop the data from database here-->
      <?php $res = fetch_posts();?>
      <ul>
        <?php foreach ($res AS $row): ?>
          <li>
          <a href="post.php?id=<?php echo $row['id']; ?>">
            <?php echo $row["title"]; ?>
            </a>
          </li>
          <p>
            <?php echo $row["content"]; ?>
          </p>
        <?php endforeach; ?>
      </ul>
      </br>

<!--This is the card section -->
      <section class="blog-area pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center pb-3">
                        <div class="section-title service-title">
                            <h2>Latest Blog Posts</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the blog post cards below are rendered using foreach loop.
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            </p>
                        </div>
                    </div>
                </div>
                <?php $res = fetch_posts();?>
                <?php foreach ($res AS $row): ?>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="blog-wrapper home-blog-wrapper white-bg">
                            <div class="blog-thumb">
                                <a href="post.php?id=<?php echo $row['id']; ?>" >
                                    <img src="https://images.unsplash.com/photo-1529380996459-a5a4eeea810a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" alt="" />
                                </a>
                            </div>
                            <div class="meta-info">
                                <ul>
                                    <li class="posts-time">January 08, 2019</li>
                                </ul>
                            </div>
                            <div class="blog-content home-blog">
                                <h2 class="blog-title">
                                <?php echo $row["title"]; ?>
                                </h2>
                                <p>
                                <?php echo $row["content"]; ?>
                                </p>
                            </div>
                            <div class="link-box home-blog-link">
                              <a href="post.php?id=<?php echo $row['id']; ?>" >Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </div>

<?php include("./elements/footer.php"); ?>
