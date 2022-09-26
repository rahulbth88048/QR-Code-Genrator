<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .containe{
        margin: 10px auto;
        width: 25%;
        height: 400px;
        /* display: flex; */
        /* justify-content: center; */
        /* align-items: center; */
        border: 1px solid gray;
        border-radius: 4px;
        
        background-color:lightgrey;
      }
      div{
        padding: 5px;
      }
      .display{
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>
  <body>
    <div class="containe" >
      <form class="col-12" action="index.php"  method="get">
        <div class="col-12">
          <label for="exampleInputEmail1" class="form-label">Enter text to genrate QR code</label>
          <input type="text" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter text" name="data">
          
        </div>
        
       <div>
        <button type="submit" class="btn btn-primary">Genrate</button>
       </div>
        
      </form>
      <div class="display">
        <?php 
        $a=$_GET['data'];
        
        ?>
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=<?php echo $a; ?>" alt="">
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>