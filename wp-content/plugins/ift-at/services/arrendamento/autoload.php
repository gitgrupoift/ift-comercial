<?php


 function autoload_c43dc70c577cc2f2082c4c979054c7cb($class)
{
    $classes = array(
        'ArrendamentoService' => __DIR__ .'/ArrendamentoService.php',
        'registarDadosContratoRequest' => __DIR__ .'/registarDadosContratoRequest.php',
        'imoveis' => __DIR__ .'/imoveis.php',
        'imovel' => __DIR__ .'/imovel.php',
        'locadores' => __DIR__ .'/locadores.php',
        'locador' => __DIR__ .'/locador.php',
        'locatarios' => __DIR__ .'/locatarios.php',
        'locatario' => __DIR__ .'/locatario.php',
        'locadoresPrevios' => __DIR__ .'/locadoresPrevios.php',
        'locadorPrevio' => __DIR__ .'/locadorPrevio.php',
        'registarDadosContratoResponse' => __DIR__ .'/registarDadosContratoResponse.php',
        'erros' => __DIR__ .'/erros.php',
        'erro' => __DIR__ .'/erro.php',
        'emitirReciboRequest' => __DIR__ .'/emitirReciboRequest.php',
        'herdeiros' => __DIR__ .'/herdeiros.php',
        'herdeiro' => __DIR__ .'/herdeiro.php',
        'emitirReciboResponse' => __DIR__ .'/emitirReciboResponse.php',
        'obterReciboRequest' => __DIR__ .'/obterReciboRequest.php',
        'obterReciboResponse' => __DIR__ .'/obterReciboResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c43dc70c577cc2f2082c4c979054c7cb');

// Do nothing. The rest is just leftovers from the code generation.
{
}
