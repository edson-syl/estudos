<?php
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;
use App\Models\Usuario;
use Firebase\JWT\JWT;

$app->post('/api/token', function(Request $request, Response $response) {
    $dados = $request->getParsedBody();
    $email = isset($dados['email']) ? $dados['email'] : null;
    $senha = isset($dados['senha']) ? $dados['senha'] : null;

    $usuario = Usuario::where('email', $email)->first();
    if (!$usuario) {
    return $response->withJson(['status' => 'erro', 'mensagem' => 'Usuário não encontrado', 'email' => $email]);
}


    if (!is_null($email) && (md5($senha) == $usuario->senha)) {


        $secretKey = (string) $this->get('settings')['secretKey'];
        $keyAccess = JWT::encode($usuario, $secretKey, 'HS256');

        return $response->withJson(['chave' => $keyAccess]);
    }

    return $response->withJson(['status' => 'erro'], 401);

});