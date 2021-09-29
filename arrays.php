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

<!-- Lendo array com forEach -->

$frutas = [
  1 => "Abacaxi",
  2 => "Atemoia",
  3 => "Abacate",
  4 => "Caqui",
  5 => "Maracujá"];

  foreach($frutas as $v) {
    echo $v . "\n";
  }

  <!-- Pegando a chave e valor do array associativo -->

  $roupas = [
  1 => "Calça",
  2 => "Camisa",
  3 => "Saia",
  4 => "Vestido",
  5 => "Macacão"];

  foreach($roupas as $key => $v) {
    echo "Key: {$key} => Value {$v} \n";
  }

  <!-- Um forEach dentro do outro -->

$Arrfaltas = [
  "aluno1" => [
    "nome" => "Ana",
    "faltas" => "2",
    ],
    "aluno2" => [
    "nome" => "Diogenes",
    "faltas" => "5",
    ],
    "aluno3" => [
    "nome" => "Mateus",
    "faltas" => "1",
    ],
    "aluno4" => [
    "nome" => "Antonia",
    "faltas" => "6",
    ],
  ];

  foreach ($Arrfaltas as $aluno) {
    foreach ($aluno as $chave => $valor) {
      echo "{$chave} = {$valor}  \n";
    };
    echo "\n";
  };