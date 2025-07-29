<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Média Simples  e Ponderada </title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
  

        <div class="container-fluid w-25 mt-5">
             <h4>Cálcula da média</h4>
   <form  action="<?=$_SERVER['PHP_SELF']?>" method="post"> 
        <label>Valor 1 </label> <br> 
        <input type="number" name="val1" value="<?=$val1?>" step="0.01">  <br> 
         <label>Peso 1</label>
         <select class="form-select mt-2 mb-2 pt-1 pb-1" name="peso1" value="<?=$p1?>" aria-label="Small select example">
  <option selected>Selecione</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
</select><br>
<label>Valor 2</label>
          <input type="number" name="val2" value="<?=$val2?>" step="0.01">  <br> 
            <label>Peso 2 </label>
<select class="form-select mt-2 mb-2 pt-1 pb-1" name="peso2" value="<?=$p2?>" aria-label="Small select example">
  <option selected>Selecione</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
</select><br>
<input type="submit" class="btn btn-warning text-dark mt-2 mb-4"> 
</form> 

<?php 
   
$val1 = $_REQUEST['val1'] ?? 0; 
$val2= $_REQUEST['val2']?? 0;
$p1 = $_REQUEST['peso1'] ?? 0; 
$p2 = $_REQUEST['peso2'] ?? 0; 

$media=($val1 + $val2) / 2;
$mp= ($val1 * $peso1 + $val2 * $peso2)/($peso1 + $peso2);
                                        
print "A média simples entre $val1 e $val2 é $media e a média ponderada entre eles é $mp";
?>
</div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
