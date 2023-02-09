<html>
   <head>
      <meta charset="utf-8">
      <title>hammaddeler</title>
   </head>
   <body>
     <?php
     foreach ($hammadde as $row){
        echo $row->Id;
        echo $row->name;
        echo $row->miktar;
     }
     ?>
   </body>
</html>