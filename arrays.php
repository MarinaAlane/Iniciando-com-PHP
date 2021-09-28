// Arrays

<!-- Vendo arrays de forma estática -->
 $nomesArr = ["Ana", "Catarina", "Jorel", "irmão do Jorel", "Nico"];

 for ($i = 0; $i < 5; $i++) {
   echo $nomesArr[$i] . " ";
 };
 <!-- // Listando arrays de forma dinâmica -->
 $nomes = ["Maria", "Joana", "João", "Gilson", "Nicolas"];

for ($i = 0; $i < count($nomes); $i++) {
  echo $nomes[$i] . " ";
}

<!-- Arrays associativos, como chave a valor, como um objeto -->
$arrNotas = array(
  "aluno1" => 6,
  "aluno2" => 8,
  "aluno3" => 5,
  "aluno4" => 2,
  "aluno5" => 0,
);
echo $arrNotas["aluno2"];

<!-- Um array dentro de outro -->
$arrNotas = array(
  "aluno1" => array(
    "nome" => "Ana",
    "nota" => 10
  ),
);
echo $arrNotas["aluno1"]["nome"];