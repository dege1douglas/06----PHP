<?php
//01
// function maiorCinq(){
//     $numero1 = $_POST['numero1'];
//     if ($numero1 > 50) {
//         echo $numero1." = ".$numero1**2;
//     } else{
//         echo "Este valor não se enquadra no requisito.";
//     }}
// maiorCinq();

//02
// function repita(){
//     $range = $_POST['numero2'];
//     for ($i = 0; $i < $range; $i++){
//         print("PROZ <br />");
//     }
// }
// repita();

//03
// function parImpar(){
//     $valor = $_POST['numero3'];
//     if($valor%2== 0){
//         echo $valor." é PAR";
// } else{
//     echo $valor." é ÍMPAR";
// }}
// parImpar();

//04
// function media(){
//     $valor1 = $_POST['value1'];
//     $valor2 = $_POST['value2'];
//     $valor3 = $_POST['value3'];
//     $valor4 = $_POST['value4'];
//     $valor5 = $_POST['value5'];

//     echo $valor1.", ".$valor2.", ".$valor3.", ".$valor4.", ".$valor5." = ".($valor1+$valor2+$valor3+$valor4+$valor5)/5;
// }
// media();

//05
// function maior(){
//     $maior1 = [
//         "maior1" => $_POST['valor1'],
//         "maior2" => $_POST['valor2'],
//         "maior3" => $_POST['valor3']
//     ];
// echo "maior: ".max($maior1);
// }
// maior();

//06
// function notas(){
//     $notas = [
//         "notas1" => $_POST['valor1'],
//         "notas2" => $_POST['valor2'],
//         "notas3" => $_POST['valor3']
//     ];
//     if(array_sum( $notas )>=60){
//         echo "APROVADO";
//     } else{
//         echo "REPROVADO";
// }
// }
// notas();

// //07
// function mes(){
//     $mes = $_POST['value'];
//     if($mes==1){
//         echo 'JANEIRO';
//     }
//     if($mes==2){
//         echo 'FEVEREIRO';
//     }
//     if($mes==3){
//         echo 'MARÇO';
//     }
//     if($mes==4){
//         echo 'ABRIL';
//     }
//     if($mes==5){
//         echo 'MAIO';
//     }
//     if($mes==6){
//         echo 'JUNHO';
//     }
//     if($mes==7){
//         echo 'JULHO';
//     }
//     if($mes==8){
//         echo 'AGOSTO';
//     }
//     if($mes==9){
//         echo 'SETEMBRO';
//     }
//     if($mes==10){
//         echo 'OUTUBRO';
//     }
//     if($mes==11){
//         echo 'NOVEMBRO';
//     }
//     if($mes==12){
//         echo 'DEZEMBRO';
//     }
// }
// mes();

//08
// function matematica(){
//     $num1 = $_POST['valueA'];
//     $num2 = $_POST['valueB'];
//     echo $num1.'and'.$num2;
//     echo $num1 + $num2;
//     echo $num1 - $num2;
//     echo $num1 / $num2;
//     echo $num1 * $num2;
// }
// matematica();

//09
function vinteNumeros(){
    $numbers = explode(",", $_POST["numbers"]);
    $sumPositive = 0;
    $sumNegative = 0;
    foreach ($numbers as $number) {
        if ($number > 0) {
            $sumPositive += $number;
        } elseif ($number < 0) {
            $sumNegative += $number;
        }
    }
    echo "<h3>Resultados:</h3>";
    echo "Soma dos numeros positivos: $sumPositive <br>";
    echo "Soma dos numeros negativos: $sumNegative";
}
vinteNumeros();

//10
// function casoVinte(){
//     $num1 = $_POST['valueA'];
//     $num2 = $_POST['valueB'];
//     echo $num1.'and'.$num2;
//     if($num1+$num2>20){
//         echo ($num1 + $num2)+8;
//     } else{
//         echo ($num1 + $num2)-5;
//     }
    
// }
// casoVInte();

?>
