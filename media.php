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


          <div class="row"> <!-- START: mediaRow1  -->
              
              <div class="col">
                <img src='https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=1.00xw:0.669xh;0,0.190xh&resize=640:*' class="img-fluid">
              </div>
              <div class="col">
                <img src='/image/dog-puppy.jpeg' class="img-fluid">
              </div>
              <div class="col">
                <img src='/image/GettyImages-1310147575.jpeg' class="img-fluid">
              </div>
              <div class="col">
                <img src='/image/1200px-RedCat_8727.jpeg' class="img-fluid">
              </div>
            
          </div> <!-- END: mediaRow1  -->

          <div class="row"> <!-- START: mediaRow2  -->
              
              <div class="col">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/KwQXzfTa7x0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
              </div>
            
          </div> <!-- END: mediaRow2  -->

          <div class="row"> <!-- START: mediaRow3  -->
              
              <div class="col">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Oh hey it’s <a href="https://twitter.com/ChrisEvans?ref_src=twsrc%5Etfw">@ChrisEvans</a> and the fella famous for wearing a fanny pack. <br>Christmas comes early as we kick off production for our Christmas franchise,“RED ONE”<br>🎅🏼🎄😈🎅🏾🧸❤️💀🌍<br>Directed by, Jake Kasdan<br>(JUMANJI franchise) <a href="https://twitter.com/SevenBucksProd?ref_src=twsrc%5Etfw">@SevenBucksProd</a> <a href="https://twitter.com/PrimeVideo?ref_src=twsrc%5Etfw">@PrimeVideo</a> <a href="https://t.co/1BkcupSnvn">https://t.co/1BkcupSnvn</a></p>&mdash; Dwayne Johnson (@TheRock) <a href="https://twitter.com/TheRock/status/1589627177334870016?ref_src=twsrc%5Etfw">November 7, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
              <div class="col">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">What a strong piece of <a href="https://twitter.com/hashtag/BlackAdam?src=hash&amp;ref_src=twsrc%5Etfw">#BlackAdam</a>  business to wake up to. <br>Our film will be the #1 movie in the world for the 3rd week in a row. 🤯<br>Makes me VERY happy.<br>Ultimately, we should all want our theatrical business to THRIVE as we work thru and past🤞🏾COVID. <a href="https://twitter.com/AwardsTony?ref_src=twsrc%5Etfw">@AwardsTony</a> <a href="https://twitter.com/SevenBucksProd?ref_src=twsrc%5Etfw">@SevenBucksProd</a> <a href="https://t.co/0NiLotf8O7">pic.twitter.com/0NiLotf8O7</a></p>&mdash; Dwayne Johnson (@TheRock) <a href="https://twitter.com/TheRock/status/1589013029869719553?ref_src=twsrc%5Etfw">November 5, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            
          </div> <!-- END: mediaRow3  -->
        
          
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