<?php 
  // conect to database
  $conn = mysqli_connect('localhost', 'gilia', 'gilia1234@', 'gilias-pizza');

  // cjeck connection
  if(! $conn ) {
      echo 'Could not connect: ' . mysqli_connect_error();
   }

   // write query for all pizzes
   $sql = 'SELECT * FROM pizzes ORDER BY dhmiourgia';

   // make query and get result
   $result = mysqli_query( $conn, $sql );

   // fech the resulting rows as an array
   $pizzes = mysqli_fetch_all($result, MYSQLI_ASSOC);

   //free result from memory
   mysqli_free_result($result);
   
   //close the connection
   mysqli_close($conn);

   print_r($pizzes);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gilia's Pizza</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    
  </head>
  <body>
    <h2>Gilia's Pizza</h2>

    <?php foreach($pizzes as $pizza){ ?>
      <div> 
        <div>
          <?php echo htmlspecialchars($pizza['name']); ?>
        </div>
        <div>
          <?php echo htmlspecialchars($pizza['ylika']); ?>
        </div>
      </div>
<?php }  ?>

    <h1 id="id1">My Heading 1</h1>

    <button type="button" 
    onclick="document.getElementById('id1').style.color = 'red'">
    Click Me!</button>

      <!-- <?php while($rows=mysqli_fetch_assoc($result)) 
    { 
    ?> 
    <tr> <td><?php echo $rows['id']; ?></td> 
    <td><?php echo $rows['name']; ?></td> 
    <td><?php echo $rows['ylika']; ?></td> 
    <td><?php echo $rows['dhmiourgia']; ?></td> 
    </tr> 
    <?php  } ?>  -->

    

  </body>
</html>