<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact | Forum Ohio </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="../css/build/main.css">
        <script src="../js/vendor/modernizr.custom.63811.js"></script>

        

        <script type="text/javascript" src="//use.typekit.net/kfv6ezh.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    </head>
    <body role="document" class="contact">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="grid grid-pad">
            
            <header class="main-header" role="banner">
                <div class="wrapper">
                    <h1>Forum Ohio</h1>
                    <nav>
                        <ul>
                            <li><a href="../about" title="About Us">About Us</a></li>
                            <li><a href="../psychology" title="Services">Services</a></li>
                            <li><a href="../contact" title="Contact" class="current">Contact</a></li>
                            <li><a href="../legal" title="legal">Legal</a></li>
                        </ul>
                    </nav>
                    
                    <form action="mail_handler.php" method="post">
                    <h3>Send a Message</h3>
                        <fieldset>
                          <label for="name">Your name *</label>
                          <input type="text" name="name" id="name" required >
                          
                          <label for="email">Your email address *</label>
                          <input type="email" name="email" id="email" required >
                          
                          <label for="message">Enter your message *</label>
                          <textarea name="message" id="message" cols="25" rows="5" required ></textarea>
                          
                          <input type="submit" name="submit" value="Submit" id="submit-button">
                        </fieldset>

                    </form>
                </div>
            </header>

            <!-- <div>
                <div class="col-2-3">Main Content</div>
                
                <div class="col-1-3">Secondary Content</div>
            </div> -->

            <section class="main-section" role="main">

            <div class="wrapper">
                
                    <div class="info-box-wrap1 clearfix">
                        <div class="info-box col-1-2">
                            <h3>Address</h3>
                            <p>20 S. Third Street, Suite 210</p>
                            <p>Columbus, OH 43215</p>

                        </div>

                        <div class="info-box col-1-2">
                            <h3>Phone</h3>
                            <p>(614) 309-9727</p>

                            <h3>Fax</h3>
                            <p>(614) 895-6801</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6116.151148580256!2d-82.99740399999999!3d39.962063!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88388f33cb303d71%3A0x1f0ed6ec30bf5c68!2s20+S+3rd+St+%23210%2C+Columbus%2C+OH+43215!5e0!3m2!1sen!2sus!4v1409141288160" width="500" height="300" frameborder="0" style="border:0"></iframe>
                    </div>
                    
                </div>


            </section>            

            <footer>
                <div class="wrapper">
                    <p>Copyright Forum Ohio LLC 2014</p>
                </div>
            </footer>


        </div> <!-- .grid-pad -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <!--[if (gte IE 6)&(lte IE 8)]>
          <script type="text/javascript" src="js/vendor/selectivizr-min.js"></script>
        <![endif]-->
        
        <script>

            Modernizr.load([
            {
              test: Modernizr.mq('only all'),
              nope: 'bower_components/respond/dest/respond.min.js'
            }
            ]);

        </script>

        <script src="../js/build/production.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-48144020-2', 'auto');
          ga('send', 'pageview');

        </script>

    </body>
</html>
