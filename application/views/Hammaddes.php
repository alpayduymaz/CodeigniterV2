<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <title>hammaddeler</title>
   </head>
   <script type="text/javascript">
      $(document).ready(function(){
         $('btn').click(function(){
            var name=$("#name").val();
            $.post("./HammaddeController.php",{
               name:name,
            },
               function(data,status){

               });
         });
      });

   </script>
   <body>
      <div class="container">
         <div class="row">
         <div class="col-md-4" style="margin-top:8%;padding:8px;"></div>
            <div class="col-md-4" style="margin-top:8%;padding:8px;">
            <h1>Hammadde Oluşturun</h1>

               <div class="form-group">

                  <form action="insert" method="post">
                  <label>Hammadde Adı</label>
                  <input type="text" class="form-control" name="name"><br><br>
                  <input class="btn btn-primary btn-block" type="submit" value="Ekle"> 
                  </form>
                  
               </div>
               <br/>
               <br/>
               <span id="response"></span>
            </div>
         </div>
         
      </div>
      <div class="container">
            <table class="table table-hover text-center">
               <thead class="table-dark">
                  <tr>
                     <th scope="col">Id</th>
                     <th scope="col">İsim</th>
                     <!-- <th scope="col">Action</th> -->
                  </tr>
               </thead>
               <tbody>
                  <?php
                     foreach (json_decode(json_encode($hammadde),true) as $row){?>
                     <tr>
                        <td><?php echo $row['Id']?></td>
                        <td><?php echo $row['name']?></td>
                        <!-- <td>
                           <a href="" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td> -->
                     </tr>
                        <?php
                     }
                  ?>
               </tbody>
            </table>
         </div>
   
   

     
   </body>
</html>