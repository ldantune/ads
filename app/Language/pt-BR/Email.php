<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
    'mustBeArray'          => 'O mÃƒÂ©todo de validaÃƒÂ§ÃƒÂ£o de email deve receber uma array.',
    'invalidAddress'       => 'EndereÃƒÂ§o de e-mail invÃƒÂ¡lido: {0}',
    'attachmentMissing'    => 'NÃƒÂ£o foi possÃƒÂ­vel localizar o seguinte anexo de e-mail: {0}',
    'attachmentUnreadable' => 'NÃƒÂ£o foi possÃƒÂ­vel abrir este anexo: {0}',
    'noFrom'               => 'NÃƒÂ£o ÃƒÂ© possÃƒÂ­vel enviar email sem o cabeÃƒÂ§alho "From".',
    'noRecipients'         => 'VocÃƒÂª deve incluir destinatÃƒÂ¡rios: To, Cc, ou Bcc',
    'sendFailurePHPMail'   => 'NÃƒÂ£o foi possÃƒÂ­vel enviar e-mail usando PHP mail(). Seu servidor pode nÃƒÂ£o estar configurado para enviar e-mail usando este mÃƒÂ©todo.',
    'sendFailureSendmail'  => 'NÃƒÂ£o foi possÃƒÂ­vel enviar e-mail usando PHP Sendmail. Seu servidor pode nÃƒÂ£o estar configurado para enviar e-mail usando este mÃƒÂ©todo.',
    'sendFailureSmtp'      => 'NÃƒÂ£o foi possÃƒÂ­vel enviar e-mail usando PHP SMTP. Seu servidor pode nÃƒÂ£o estar configurado para enviar e-mail usando este mÃƒÂ©todo.',
    'sent'                 => 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: {0}',
    'noSocket'             => 'NÃƒÂ£o foi possÃƒÂ­vel abrir um soquete para o Sendmail. Por favor, verifique as configuraÃƒÂ§ÃƒÂµes.',
    'noHostname'           => 'VocÃƒÂª nÃƒÂ£o especificou um hostname SMTP.',
    'SMTPError'            => 'O seguinte erro SMTP foi encontrado: {0}',
    'noSMTPAuth'           => 'Erro: vocÃƒÂª deve atribuir um nome de usuÃƒÂ¡rio e senha SMTP.',
    'failedSMTPLogin'      => 'Falha ao enviar o comando AUTH LOGIN. Erro: {0}',
    'SMTPAuthUsername'     => 'Falha ao autenticar o nome de usuÃƒÂ¡rio. Erro: {0}',
    'SMTPAuthPassword'     => 'Falha ao autenticar a senha. Erro: {0}',
    'SMTPDataFailure'      => 'NÃƒÂ£o foi possÃƒÂ­vel enviar dados: {0}',
    'exitStatus'           => 'CÃƒÂ³digo de status de saÃƒÂ­da: {0}',
];