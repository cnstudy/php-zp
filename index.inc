<?php
define("URL", "localhost/php_zp/index.php");

$variavel = [
  'nome' => 'Cícero',
  'sobrenome' => 'Neto',
  'idade' => 30,
  'sexo' => 'masculino',
  'nacionalidade' => 'Brasileiro'
];
//echo "Sexo: " . $variavel['sexo'];

$produtos = [
    'farinha' => [
        'quantidade' => 10,
        'validade' => 22/10/2022,
        'fabricante' => [
            1 => 'M Dias Branco',
            2 => 'Nestlê',
            3 => 'Dona benta'
        ]
    ],
    'biscoito' => [
        'fabricante' => 'Nestle',
        'quantidade' => 5
    ]
];
print_r($produtos['farinha']['fabricante'][3]);//Resultado: Dona benta
echo ' - Data de validade: ' . $produtos['farinha']['validade'];
//print_r($_SERVER);
?>
<html>
    <body style="background-color: #5a5959"></body>
</html>
