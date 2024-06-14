<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Rifa</title>
</head>
<body>
   
 

<div class="container">
    <form action="rifa.php" method="POST">
        <h1> RIFA COLÉGIO SÃO LUCAS</h1>
        <P>AÇÃO ENTRE AMIGOS</P>
        
        
        <label for="valor">Valor:</label>
        <input type="text" name="valor">
        
        <label for="quantNum">Quantidade:</label>
        <input type="text" name="quantNum">
         <br>
         <br>
        <input type="submit" value="Criar">
        <input type="reset" value="Limpar"><br>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['valor']) || isset($_POST['quantNum'])){
            $premio = 'JBL';
            $valor = $_POST['valor'];
            $quantNum = $_POST['quantNum'];
            
            $erro = ( empty($valor) || empty($quantNum)) ?
            "O campo é obrigatórios" : (($valor < 0 || $quantNum < 0) ?
            "Por favor, insira valores válidos" : "");
            if($erro){
                echo $erro;
            } else {
                for($i=1; $i<=$quantNum; $i++){
                    echo"<center><table>
                        <tr class='esquerdo'>
                            <td class='esq'>
                                <p>Número: $i<br></p>
                                <p>Valor: R$$valor<br></p>
                                <p>Nome:_________________<br></p>
                                <p>Telefone:_______________<br></p>
                            </td>
                            <td class='mei'>
                                <p>Número: $i<br></p>
                                <p>Ação CSL<br></p>
                                
                                <p>Prêmio: $premio<br></p>
                            </td>
                            <td class='dir'>
                                <img class = 'img' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwF9tG8YZFoGri5-AFyRFwlo4Q8XaBSpdd5w&s'>
                            </td>
                        </tr>
                    </table></center>";
                }
            }
        } else{
            echo "Formulário não enviado corretamente!";
        }
    }   
    ?>
    </div>
   
   
    


<!-- echo"<h1>Ação entre amigos (Ulbra:São Lucas)</h1>";
    echo "<br>Nome";
    echo "<br>Telefone";
    echo "<br>Valor";
    echo "<br>Email"; -->
</body>
</html>