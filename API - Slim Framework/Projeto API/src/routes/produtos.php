<?php
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;


$app->group('/api-produtos', function() {
    $this->get('/produtos', function(Request $request, Response $response) {
        $produtos = Produto::get();
        return $response->withJson($produtos);
    });

    $this->post('/adicionar', function(Request $request, Response $response) {
        $dados = $request->getParsedBody();
        $produto = Produto::create($dados);
        return $response->withJson($produto);
    });
});