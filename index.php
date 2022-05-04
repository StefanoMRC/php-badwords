<?php
 $parametro=(isset($_GET['parametro'])) ? $_GET['parametro']:'';
 $paragrafo='Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic fugit commodi molestias tempora ex, praesentium placeat modi laudantium quis odio exercitationem explicabo magni, nisi necessitatibus ad expedita ab eius voluptate?';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Paragrafo di partenza</h1>
    <p> 
       <?php
       echo $paragrafo
       ?>   
    </p>
    <p>
        La lunghezza del paragrafo senza censura è: <?php echo strlen($paragrafo)?>
    </p>
    <h1>Paragrafo con censura</h1>
    <form method="get">
        <input  type="text" name='parametro' placeholder='Inserisci censura'>
        
        <button type="submit">Invia</button>
    </form>
    <p>
        <?php
            $paragrafo_censurato= str_ireplace($parametro,'***',$paragrafo);
            echo $paragrafo_censurato;
        ?>
    </p>
    <p>
    La lunghezza del paragrafo censurato è: <?php echo strlen($paragrafo_censurato)?>
    </p>

</body>
</html>