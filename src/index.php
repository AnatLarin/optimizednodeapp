<html>
    <head>
    </head>
      <body>
        <h1>GCP Cloud Build Prod test image</h1>
 <?php
        $ip_server = $_SERVER['SERVER_ADDR'];
  
        echo "<br>Server IP Address is: $ip_server" 
  ?>
              <p>
               <b>
                   <font color="red">Application Version 1.3
                 </b>
                   </font>
              </p>
              <p>
                Build number: ${BUILD_NUMBER} 
              </p>
       </body>
   </html>