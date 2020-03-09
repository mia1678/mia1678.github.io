<!DOCTYPE html>
<html>
 <head>
  <title>Mia Li's WEB 110 Portal</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
     <link rel="stylesheet" href="css/myportal.css" />
     <link rel="stylesheet" href="css/nav.css" />
     <link rel="stylesheet" href="css/form.css" />
 </head>

 <body>
  <div class="wrapper">
   <header>
    <h1>Mia Li's WEB 110 Portal</h1>
     <nav>  
      <ul class="topnav" id="myTopnav">
        <li><a href="index.html">Main Page</a></li>
        <li><a href="elements.html">HTML Elements</a></li>
        <li><a href="aia.html">AIA</a></li>
        <li><a href="flowchart.html">Flowchart</a></li>
        <li><a href="big/index.html">BIG</a></li>
        <li><a href="fp/.html">Final Project</a></li>
        <li><a href="http://w3schools.com" target="_blank">W3 School</a></li>
        <li><a href="http://lynda.com" target="_blank">Lynda Training</a></li>
        <li><a class="selected" href="contact.php">Contact Mia</a></li>
        <li class="icon" ><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
      </ul>
     </nav>
   </header>
    <section>
        <h2 class="pageID">Contact Mia</h2>
            <?php
                /*
                 * Below are 2 different forms to be re-used       
                 * 
                 * Only use one at a time, comment out the other 1!       
                 *
                 */
                include 'includes/simple.php'; #demonstrates a simple contact form
                //include 'includes/multiple.php';#demonstrates multiple form elements

            ?>
    </section>
    
    <footer>
    <p><small>&copy; 2018 by <a href="contact.php" target="_blank">Meng-Yu, Li</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
      
 </div>
    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>
</body>

</html>