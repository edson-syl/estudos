<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
if (PHP_SAPI != 'cli') {
   
}

require __DIR__ . '/vendor/autoload.php';

$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

$dependencies = require __DIR__ . '/src/dependencies.php';
$dependencies($app);
$container = $app->getContainer();
$db = $container->get('db');

$tabela = 'produtos';

$db->schema()->dropIfExists($tabela);
$db->schema()->create($tabela, function($table) {
    $table->increments('id');
    $table->string('titulo', 100);
    $table->text('descricao');
    $table->decimal('preco', 10, 2);
    $table->string('fabricante', 60);
    $table->timestamps();
});

$db->table($tabela)->insert([
    'titulo' => 'Guitarra Stratocaster',
    'descricao' => 'Guitarra elétrica estilo Stratocaster com corpo em alder e 3 captadores single coil.',
    'preco' => 2999,
    'fabricante' => 'Fender',
    'created_at' => '2025-10-31',
    'updated_at' => '2025-10-31'
]);
$db->table($tabela)->insert([
    'titulo' => 'Fone de Ouvido Studio Pro',
    'descricao' => 'Fone de ouvido profissional com cancelamento de ruído e som balanceado.',
    'preco' => 279,
    'fabricante' => 'Audio-Technica',
    'created_at' => '2025-10-21',
    'updated_at' => '2025-10-21'
]);
