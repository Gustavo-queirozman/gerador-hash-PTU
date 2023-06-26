<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['arquivo'])) {
  $file_path = $_FILES['arquivo']['tmp_name'];

$extension = pathinfo($file_path, PATHINFO_EXTENSION);
// Insira o caminho completo para o arquivo aqui
echo $extension;
$file_content = file_get_contents($file_path); // Leitura do arquivo
$file_content = str_replace(array("\r", "\n"), '', $file_content); // Remoção de quebras de linha

$hash = md5(mb_convert_encoding(substr($file_content, 0, -43), 'ISO-8859-1')); // Criação do hash utilizando a codificação ISO-8859-1


echo "Seu novo hash é: $hash\nAltere o registro 998 (Posição 12 a 43) e valide o arquivo.\n\n";
fgets(STDIN); // Espera a entrada do usuário para sair
}
#Transformado sistema desktop do paulozip/calculo-de-hash-arquivo-ptu para versão web
#Analista de TI Gustavo Queiroz - Unimed Noroeste de Minas
