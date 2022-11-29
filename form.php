<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php'; 


  if ($_GET){ 
    $showData= "yes";
    $fName = $_GET['fName'];
    $lName = $_GET['lName'];
    $reason = $_GET['reason'];
  } else {
    $showData="No";
  }


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/style.css" rel="stylesheet" >
    
  </head>
  <body>

    <div class="container"> <!-- START: Container -->
      

      
      <div class="row mt-3" id="top"> <!-- START: rowTop -->
        
        <div class="col p-2"> <!-- START: col1 -->
          <h1>  <?php echo $siteName; ?> </h1>
          <?php 
            echo $mainNav;
          ?>
        </div> <!-- END: col1 -->
        
      </div> <!-- END: rowTop -->
      

      <div class="row" id="content"> <!-- START: rowMiddle -->

        <div class="col p-2"> <!-- START: rowMiddle col1 -->
          <h3>Contact Form</h3>


          <form action= "redirectForm.php" method="post">

            <br>
            What is your Name? 
            <br>
            <input type="text" name="fullName">
            <br><br>
            Reason For Contact?
            <br>
            <select name="reason">
              <option value="question"> Question </option>
              <option value="comment"> Comment </option>
            </select>
            <br><br>
            <input type="submit" value="Send">
            
          </form>
          
          
        </div> <!-- END: rowMiddle col1 -->


        
        <div class="col p-2"> <!-- START: rowMiddle col2 -->


          <?php 
            if($showData == 'yes'){
            echo "<h3> Form Data: </h3>";
            echo "First Name: $fName";
            echo "<br>";
            echo "Last Name: $lName";
            echo "<br>";
            echo " Reason: $reason";
            echo "<br>";
            }
          ?>
        
          
        </div> <!-- END: rowMiddle col2 -->

        
        
      </div> <!-- END: rowMiddle -->
      

      <div class="row" id="footer"> <!-- START: rowBottom -->
        
        <div class="col p-2"> <!-- START: rowBottom col1 -->
           <?php 

            echo $footer;

          ?>
        </div> <!-- END: rowBottom col1 -->
        
      </div> <!-- END: rowBottom -->


      
    </div> <!-- END: Container -->



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>