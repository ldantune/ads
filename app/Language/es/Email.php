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
    'mustBeArray'          => 'El mÃƒÂ©todo de validaciÃƒÂ³n del email debe ser pasado en array.',
    'invalidAddress'       => 'DirecciÃƒÂ³n de email invÃƒÂ¡lida: {0}',
    'attachmentMissing'    => 'No se ha podido localizar el adjunto: {0}',
    'attachmentUnreadable' => 'No se ha podido abrir el adjunto: {0}',
    'noFrom'               => 'No se pude enviar un email sin cabecera "Para".',
    'noRecipients'         => 'Debe incluir destinatarios: Para, Cc, or Bcc',
    'sendFailurePHPMail'   => 'Incapaz de enviar email usando PHP mail(). Su servidor puede no estar configurado para enviar correos usando este mÃƒÂ©todo.',
    'sendFailureSendmail'  => 'Incapaz de enviar email usando PHP Sendmail. Su servidor puede no estar configurado para enviar correos usando este mÃƒÂ©todo.',
    'sendFailureSmtp'      => 'Incapaz de enviar email usando PHP SMTP. Su servidor puede no estar configurado para enviar correos usando este mÃƒÂ©todo.',
    'sent'                 => 'Su mensaje ha sido enviado correctamente utilizando el siguiente protocolo: {0}',
    'noSocket'             => 'Incapaz de abrir un socket a Sendmail. Compruebe la configuraciÃƒÂ³n.',
    'noHostname'           => 'No ha especificado un nombre de host SMTP.',
    'SMTPError'            => 'Se han encontrado los siguientes errores SMTP: {0}',
    'noSMTPAuth'           => 'Error: Debe especificar un usuario y contraseÃƒÂ±a SMTP.',
    'failedSMTPLogin'      => 'Ha fallado el envÃƒÂ­o del comando AUTH LOGIN. Error: {0}',
    'SMTPAuthUsername'     => 'Ha fallado la autentificaciÃƒÂ³n del usuario. Error: {0}',
    'SMTPAuthPassword'     => 'Ha fallado la autentificaciÃƒÂ³n de la contraseÃƒÂ±a. Error: {0}',
    'SMTPDataFailure'      => 'Incapaz de enviar datos: {0}',
    'exitStatus'           => 'CÃƒÂ³digo de estado de salida: {0}',
];