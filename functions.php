function Ola($nome, $email) {
  return "Olá, eu sou a {$nome} e meu email é {$email}";
}

$v = Ola("Marina", "marina.alane@outlook.com");

echo $v;

<!-- Função com valor do parâmetro padrão pra caso não tenha aquele parâmetro -->

function Ola($nome, $email = "") {
  return "Olá, eu sou a {$nome} e meu email é {$email}";
}

$v = Ola("Marina");

echo $v;

<!-- Função com parâmetro por referencia -->
<!-- Passar uma variável em uma funçao que vai ter o valor alterado sem o return -->
<!-- Ex: Imagine que você tenha uma função que calcule o ajuste salarial e retorne o valor
ajustado, porém, você também precisa saber qual foi o valor do ajuste.Para este problema
podemos retornar o valor do ajuste em uma variável que dentro da função tem o seu valor
alterado na memoria. 
Pra isso é usado o & no parâmetro da função, e dentro dela especificar um novo valor.  -->

$salario = 1500.00;
$valorAjuste = 0;

function AjustaSalario($sal, &$valorAjuste) {
  $valorAjuste = 300.00;

  return ($sal + $valorAjuste);
}

$valorFinal = AjustaSalario($salario, $valorAjuste);
echo "O valor ajustado é de : R$ {$valorFinal}, com aumento de: R$ {$valorAjuste}";
