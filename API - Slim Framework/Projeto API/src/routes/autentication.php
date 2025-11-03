<?php
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;
use App\Models\Usuario;

$app->post('/api/token', function(Request $request, Response $response) {
    $dados = $request->getParsedBody();
    $email = isset($dados['email']) ? $dados['email'] : null;
    $senha = isset($dados['senha']) ? $dados['senha'] : null;

    $usuario = Usuario::where('email', $email)->first();


    if (!is_null($email) && (md5($senha) == $usuario->senha)) {

        $secretKey = $this->get('settings')['SecretKey'];
}});