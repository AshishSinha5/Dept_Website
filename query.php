<?php echo 'its working' ?>

<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap.min.css" />
</head>

<body> 


<div class="container" >
<div class="row">
<div class="col-xs-12">
<div class="page-header">
<h1>Post your doubts without any hesitation<br>
<small>let our community answer</small>
</h1>
</div>
</div>
</div>

<div class="row">
<div class="col-md-7">

<div class="panel panel-default">
<div class="panel-body">
<form role="form" action="query.php" >
  <div class="form-group">
    <label for="email" class="control-label">Email</label>
    <input type="text" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="subject" class="control-label">Subject</label>
    <input type="text" class="form-control" id="subject">
  </div>

<label for="q_desc">Enter your query here</label>
<textarea class="form-control" rows="10"></textarea>
<br>
<div class="form-group">
<button type="submit" class="btn btn-info">Sign in</button>
</div><!-- End submit formgroup -->
</form>
</div>
</div> <!-- End Panel -->	
</div> <!-- End form column -->

<div class="col-md-5">
<div class="jumbotron">
<h2>How it works!</h2>
<p>First enter your mail. This way we can notify you on your mail when we respond to your query! Enter the subject about which you are having a query. For example, if you have a query regarding fee structure, you can put "Confusion regarding Fees" as the subject. This makes us easier to do our job but you can also leave it blank if you cant think of one. In the description area fill in the details regarding your query. Keep it short as far as possible and we will reach out to you as soon as we can!</p>
</div><!--End jumbotron-->
</div><!--end jumbotron column-->
</div> <!-- End Row -->
</div><!-- End Container -->

</body>

</html>
