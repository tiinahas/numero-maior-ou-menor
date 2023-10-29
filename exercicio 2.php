// faça um programa que receba 3 números e informe qual o maior e o menor [if/else]

<?php
// Receba os três números do usuário (supondo que o usuário já tenha inserido os números)
$numero1 = 10; // Substitua pelos números fornecidos pelo usuário
$numero2 = 5;
$numero3 = 8;

// Inicialize as variáveis $maior e $menor com o primeiro número
$maior = $numero1;
$menor = $numero1;

// Verifique se $numero2 é maior ou menor que $maior e $menor
if ($numero2 > $maior) {
    $maior = $numero2;
} elseif ($numero2 < $menor) {
    $menor = $numero2;
}

// Verifique se $numero3 é maior ou menor que $maior e $menor
if ($numero3 > $maior) {
    $maior = $numero3;
} elseif ($numero3 < $menor) {
    $menor = $numero3;
}

// Exiba o resultado
echo "O maior número é: $maior<br>";
echo "O menor número é: $menor";
?>