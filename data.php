<?php include $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php'; ?>
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
          


          <table class="table">
            <thead>
              <tr>
                <th scope="col">country</th>
                <th scope="col">idealogy</th>
                <th scope="col">starting factory</th>
                <th scope="col">army</th>
                <th scope="col">navy</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
               
              </tr>
            </tbody>
          </table>


          


<!--           Data is either table or list. Table is perferred due to the simplicity of a list-->
          
          
        </div> <!-- END: rowMiddle col1 -->
        
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