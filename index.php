<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h5>CALCULADORA EM PHP</h5>
    <form method="post" action="" class="card">
        <label for="">Insira o valor 1</label>
        <input type="text" name="v1" placeholder="Valor 1" /> <!-- Input que receberá o primeiro valor a ser calculado -->
       
                  
            <select name="operacao"> <!-- Select com o tipo de operação (Somar, Diminuir, Multiplicar ou Dividir -->
                <option value="soma">+</option>
                <option value="subtrai">-</option>
                <option value="multiplica">*</option>
                <option value="divide">/</option>
            </select>
       
        <label for="">Insira o valor 2</label>   
        <input type="text" name="v2" placeholder="Valor 2" /> <!-- Input que receberá o segundo valor a ser calculado -->
       
               
        <input class="submit" type="submit" name="Calcula" value="Calcular" /> <!-- Input que enviará os valores para a função de cálculo -->
       </form>
       
               <?php

               # classe :: Calculadora
               class Calculadora {
       
                   # Função "Calcular" para executar o cálculo dos valores (v1 e v2)
                   public function Calcular() {
       
                       # Se for setado algum valor ào submit (Calcula), executa a operação
                       if (isset($_POST['Calcula'])) {
       
                           # Se a operação for soma (value = soma), então...
                           if ($_POST['operacao'] == "soma") {
       
                               # Armazena a soma de [v1 + v2] na variável $resultado
                               $resultado = $_POST['v1'] + $_POST['v2'];
       
                               # Exibe a variável $resultado com os valores já somados
                               return $resultado;
       
                               # Ou então, se a operação não for (value = soma), e sim (value = subtrai) então...
                           } elseif ($_POST['operacao'] == "subtrai") {
                               $resultado = $_POST['v1'] - $_POST['v2'];
                               return $resultado;
                           } elseif ($_POST['operacao'] == 'multiplica') {
                               $resultado = $_POST['v1'] * $_POST['v2'];
                               return $resultado;
                           } elseif ($_POST['operacao'] == 'divide') {
                               $resultado  = $_POST['v1'] / $_POST['v2'];
                               return $resultado ;
                           }
                       }
                   }
       
               }
       
               # Instancia a classe CALCULADORA()
               $calcular = new Calculadora();
       
               # Executa a função
               echo $calcular->Calcular();
               ?>

</div>
    
</body>
</html>
