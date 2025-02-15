<?php

use CodeIgniter\Email\Email;

function enviar_email_first_access($email, $token)
{
    $emailService = \Config\Services::email();
    
    $emailService->setFrom('sig@correio-sistemas.uerj.br', 'Sistema Integrado de Gestão');
    $emailService->setTo($email);
    $emailService->setSubject('Informe SIG - Primeiro Acesso');

    $url = base_url("first_access/$token");

    $message = "
        <html>
        <body>
            <h2>SIG - Sistema Integrado de Gestão</h2>
            <p><strong>Data:</strong> " . date('d/m/Y') . " <strong>Hora:</strong> " . date('H:i') . "</p>
            <p>Informe SIG</p>
            <p>Utilize o link: <a href='$url'>$url</a></p>
            <p>Para validar seu email e continuar o processo de primeiro acesso ao SIG.</p>
            <p>Atenciosamente,</p>
            <p>Diretoria-Geral de Tecnologia da Informação (DGTI)</p>
        </body>
        </html>
    ";

    $emailService->setMessage($message);
    $emailService->setMailType('html');

    return $emailService->send();
}
