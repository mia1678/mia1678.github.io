<!DOCTYPE html>
<html>
 <head>
  <title>Mia Li's  Web Development Examples</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
     <link rel="stylesheet" href="css/big.css" />
     <link rel="stylesheet" href="css/nav.css" />
     <link rel="stylesheet" href="http://web-students.net/site49/web110/big/css/form.css" />
     <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     <script src="js/script.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 </head>

 <body>
  <div class="wrapper">
   <header>
    <h1>
        <a href="index.html"><i class="fa fa-fw fa-server"></i> Mia Li's  Web Development Examples</a>
    </h1>
       <nav id="cssmenu">
        <ul>
     <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
     <li><a href="index.html"><i class="fa fa-fw fa-home"></i> Main Page</a></li>
     <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
     <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
     <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Image Gallery</a></li>
     <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google Tools</a>
        <ul>
           <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
           <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
           <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
        </ul>
     </li>
            <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Mia</a></li>
        </ul>
       </nav>
   </header>
      
      <!-- START Left Column -->
    <section>
        <h2 class="pageID">Contact Mia</h2>
                <?php
                /*
                 * Below are 2 different forms to be re-used       
                 * 
                 * Only use one at a time, comment out the other 1!       
                 *
                 */
                //include 'includes/simple.php'; #demonstrates a simple contact form
                include 'includes/multiple.php';#demonstrates multiple form elements

            ?>
    </section>
      <!-- END Left Column -->
      
      <!-- START Right Column -->
      <!-- END Right Column -->
    <footer>
    <p><small>&copy; 2018 by <a href="contact.php" target="_blank">Meng-Yu, Li</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
 </div>
</body>

</html>