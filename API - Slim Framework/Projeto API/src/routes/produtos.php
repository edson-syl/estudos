<?php
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;


$app->group('/api-produtos', function() {
    $this->get('/lista-produtos', function(Request $request, Response $response) {
        $produtos = Produto::get();
        return $response->withJson($produtos);
    });

    $this->post('/adicionar-produto', function(Request $request, Response $response) {
        $dados = $request->getParsedBody();
        $produto = Produto::create($dados);
        return $response->withJson($produto);
    });

    $this->get('/lista-produtos/{id}', function(Request $request, Response $response, $args) {
        $produto = Produto::findOrFail($args['id']);
        return $response->withJson($produto);
    });
    
    $this->put("/atualizar-produto/{id}", function(Request $request, Response $response, $args) {
        $dados = $request->getParsedBody();
        $produto = Produto::findOrFail($args['id']);
        $produto->update($dados);
        return $response->withJson($produto);
    });

    $this->delete("/deletar-produto/{id}", function(Request $request, Response $response, $args) {
        $produto = Produto::findOrFail($args['id']);
        $produto->delete();
        return $response->withJson($produto);
    });
});