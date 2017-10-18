<!DOCTYPE html>
<html lang="en">

<?php include "includes/create_article_head.php"?>

<body id="page-top" class="index">

<?php include "includes/create_article_navigation.php"?>    

  </head>
 <br></br><br></br><br>
 
 <form>
     <div class="form-group row">
         <label for="example-text-input" class="col-2 col-form-label">Author</label>
         <div class="col-10">
             <input class="form-control" type="text" value="" id="example-text-input">
                 </div>
     </div>
     </div>
     <div class="form-group row">
         <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
         <div class="col-10">
             <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                 </div>
     </div>

     <div class="form-group row">
         <label for="example-text-input" class="col-2 col-form-label">Title</label>
         <div class="col-10">
             <input class="form-control" type="text" value="" id="example-text-input">
                 </div>
     </div>
     <div class="form-group row">
         <label for="example-text-input" class="col-2 col-form-label">Sub Header</label>
         <div class="col-10">
             <input class="form-control" type="text" value="" id="example-text-input">
                 </div>
     </div>
          </div>
     <div class="form-group">
         <label for="exampleTextarea">Article Contents</label>
         <textarea class="form-control" id="exampleTextarea" rows="20"></textarea>
     </div>
     <div class="form-group">
         <label for="exampleInputFile">Choose Article Image</label>
         <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
             <small id="fileHelp" class="form-text text-muted">Please select the image you would like to add to the article.</small>
             </div>
     <div class="form-check">
         <label class="form-check-label">
             <input type="checkbox" class="form-check-input">
                 Hereby i agree to all the terms of posting an article.
                 </label>
     </div>
     <button type="submit" class="btn btn-primary">Submit Article</button>
 
 
    <hr> 
    
<?php include "includes/create_article_footer.php"?>




    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
