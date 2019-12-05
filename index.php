  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <!-- simulate existing code - download from temp folder-->
        <form action="/download-method1.php" method="post"> 
            <button type="submit">Method 1 - csv1.csv</button> FAILS
        </form>

        <form action="/download-method2.php" method="post">
            <button type="submit">Method 2 - csv1.csv</button> SUCCEEDS
        </form>

        <form action="/download-method3.php" method="post">
            <button type="submit">Method 3 - csv1.csv</button> SUCCEEDS
        </form>

        <form action="/download-method4.php" method="post">
            <button type="submit">Method 4 - csv1.csv</button> FAILS
        </form>        

        <form action="/download-method5.php" method="post">
            <button type="submit">Method 5 - csv1.csv</button> SUCCEEDS
        </form>              
      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>