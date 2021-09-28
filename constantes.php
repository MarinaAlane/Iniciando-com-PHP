<?
// Varivel
$idade = "2";
echo $nome;

// Constante
 define("min", 17);
 define("max", 45);
 
 echo "MIN: ". min. "\n";
 echo "MAX: ". max. "\n";

 echo "Idade: ". $idade . "\n\n";

 if($idade >= min && $idade <= max) {
   echo "Acesso Liberado!";
 } else {
   echo "Acesso Negado!";
 }
 ?>