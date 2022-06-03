<html>
  <head>
    <title>PHP Test Page</title>
  </head>
  <body>
    <h1>PHP Tests</h1>
   
    <h1> world's smallest form handler</h1>


    <?php
if (isset($_POST["FirstName"])){//show data
      echo $_POST["FirstName"];
  
}else{//show form
  echo '
      <form method="post" action=""> 
    <p>First Name:</p>  <input type="text"     name="FirstName" />
      <p><input type="submit"/></p>
    </form>
    
      ';
}

?>
    
   
    
  </body>
</html>
