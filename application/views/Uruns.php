<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <title>Ürünler</title>
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
            <div class="col-md-4" style="margin-top:8%;padding:8px;">
            <h1>Ürün Oluşturun</h1>

               <div class="form-group">

                  <form action="insert" method="post">
                  <label>Ürün Adı</label>
                  <input type="text" class="form-control" name="name"><br>
                  <input class="btn btn-primary btn-block" type="submit" value="Olustur"> 
                  </form>
                  
               </div>
               <br/>
               <br/>
               <span id="response"></span>
            </div>
            <div class="col-md-2" style="margin-top:8%;padding:8px;"></div>
            <div class="col-md-6" style="margin-top:8%;padding:8px;">
            <h1>Ürün İçeriğini Belirleyin</h1>
               <form action="insertUrunIcerik" method="post">
               <label>Ürün İçeriği</label>
                  <div class="from-group row">
                     <div class="col-md-10">
                        <select class="form-control" id="hammadde" name="hammadde">
                           <option value="0">Hammadde Seç</option>
                           <?php
                              foreach ($hammadde as $row){
                           ?>
                           <option value="<?php echo $row->Id; ?>">
                           <?php echo $row->name; ?>
                           </option>
                           <?php
                              }?>
                        </select>
                        <br/>
                        <input class="btn btn-primary btn-block" type="submit" value="Hammaddeyi Ürüne Ekle"> 
                     </div>
                  </div>
               </form>
            </div>
         </div>

         
         <?php
         foreach ($urun as $row){
            echo $row->Id;

            echo $row->name;
         }
     ?>
      </div>
   
   

     
   </body>
</html>