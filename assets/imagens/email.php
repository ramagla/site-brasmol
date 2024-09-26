<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o email foi enviado e não está vazio
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        // Escapa as variáveis para prevenir injeções e outros problemas
        $nome = htmlspecialchars(trim($_POST['nome']));
        $email = htmlspecialchars(trim($_POST['email']));
        $whatsapp = htmlspecialchars(trim($_POST['whatsapp']));
        $mensagem = htmlspecialchars(trim($_POST['mensagem']));

        // Verifica se o email tem um formato válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Redireciona para a página de erro se o email for inválido
            header("Location: https://brasmol.com.br/leads-erro.php");
            exit();
        }

        // Configura os detalhes do email
        $to = "vendas@brasmol.com.br";
        $subject = "Contato - Site Bras-Mol";
        $body = "Nome: " . $nome . "\r\n" .
                "Email: " . $email . "\r\n" .
                "Whatsapp: " . $whatsapp . "\r\n" .
                "Mensagem: " . $mensagem;
        $headers = "From: vendas@brasmol.com.br\r\n" .
                   "Reply-To: " . $email . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Envia o email e verifica o resultado
        if (mail($to, $subject, $body, $headers)) {
            // Redireciona para a página de sucesso
            header("Location: https://brasmol.com.br/leads.php");
            exit();
        } else {
            // Redireciona para a página de erro se o envio falhar
            header("Location: https://brasmol.com.br/leads-erro.php");
            exit();
        }
    } else {
        // Redireciona para a página de erro se o email não estiver definido ou estiver vazio
        header("Location: https://brasmol.com.br/leads-erro.php");
        exit();
    }
} else {
    // Redireciona para a página de erro se a requisição não for POST
    header("Location: https://brasmol.com.br/leads-erro.php");
    exit();
}
?>
