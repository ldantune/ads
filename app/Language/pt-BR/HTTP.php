<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'CURL deve estar ativado para usar a classe CURLRequest.',
    'invalidSSLKey'   => 'NÃƒÂ£o ÃƒÂ© possÃƒÂ­vel definir a Chave SSL. {0} nÃƒÂ£o ÃƒÂ© um arquivo vÃƒÂ¡lido.',
    'sslCertNotFound' => 'Certificado SSL nÃƒÂ£o encontrado em: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} nÃƒÂ£o ÃƒÂ© um tipo de negociaÃƒÂ§ÃƒÂ£o vÃƒÂ¡lido. Deve ser um dos seguintes: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol' => 'VersÃƒÂ£o invÃƒÂ¡lida do Protocolo HTTP. Deve ser uma dessas: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'VocÃƒÂª deve fornecer uma array de valores suportados para todas as NegociaÃƒÂ§ÃƒÂµes.',

    // RedirectResponse
    'invalidRoute' => 'Rota {0} nÃƒÂ£o foi encontrada ao fazer o roteamento-reverso.',

    // DownloadResponse
    'cannotSetBinary'        => 'Ao definir o caminho do arquivo nÃƒÂ£o foi possÃƒÂ­vel definir como binÃƒÂ¡rio.',
    'cannotSetFilepath'      => 'Ao definir como binÃƒÂ¡rio nÃƒÂ£o ÃƒÂ© possÃƒÂ­vel definir o caminho do arquivo: {0}',
    'notFoundDownloadSource' => 'Fonte do corpo do download nÃƒÂ£o encontrado.',
    'cannotSetCache'         => 'NÃƒÂ£o suporta armazenamento em cache para download.',
    'cannotSetStatusCode'    => 'NÃƒÂ£o suporta o cÃƒÂ³digo de status de alteraÃƒÂ§ÃƒÂ£o para download. CÃƒÂ³digo: {0}, RazÃƒÂ£o: {1}',

    // Response
    'missingResponseStatus' => 'Resposta HTTP estÃƒÂ¡ faltando um cÃƒÂ³digo de status',
    'invalidStatusCode'     => '{0} nÃƒÂ£o ÃƒÂ© um cÃƒÂ³digo de status de retorno HTTP vÃƒÂ¡lido',
    'unknownStatusCode'     => 'CÃƒÂ³digo de status HTTP desconhecido fornecido sem nenhuma mensagem: {0}',

    // URI
    'cannotParseURI'       => 'NÃƒÂ£o ÃƒÂ© possÃƒÂ­vel analisar o URI: {0}',
    'segmentOutOfRange'    => 'Segmento do URI da RequisiÃƒÂ§ÃƒÂ£o estÃƒÂ¡ fora do intervalo: {0}',
    'invalidPort'          => 'Portas devem estar entre 0 e 65535. Dado: {0}',
    'malformedQueryString' => 'As strings de consulta nÃƒÂ£o podem incluir fragmentos de URI.',

    // Page Not Found
    'pageNotFound'       => 'PÃƒÂ¡gina NÃƒÂ£o Encontrada',
    'emptyController'    => 'Nenhum Controller especificado.',
    'controllerNotFound' => 'Controller ou seu mÃƒÂ©todo nÃƒÂ£o foi encontrado: {0}::{1}',
    'methodNotFound'     => 'MÃƒÂ©todo do Controller nÃƒÂ£o foi encontrado: {0}',

    // CSRF
    'disallowedAction' => 'A aÃƒÂ§ÃƒÂ£o que vocÃƒÂª solicitou nÃƒÂ£o ÃƒÂ© permitida.',

    // Uploaded file moving
    'alreadyMoved' => 'O arquivo enviado jÃƒÂ¡ foi movido.',
    'invalidFile'  => 'O arquivo original nÃƒÂ£o ÃƒÂ© um arquivo vÃƒÂ¡lido.',
    'moveFailed'   => 'NÃƒÂ£o foi possÃƒÂ­vel mover o arquivo {0} para {1} ({2})',

    'uploadErrOk'        => 'O upload do arquivo foi realizado com sucesso.',
    'uploadErrIniSize'   => 'O arquivo "%s" excede a diretiva ini upload_max_filesize.',
    'uploadErrFormSize'  => 'O arquivo "%s" excede o limite de upload definido em seu formulÃƒÂ¡rio.',
    'uploadErrPartial'   => 'O upload do arquivo "%s" foi realizado apenas parcialmente.',
    'uploadErrNoFile'    => 'Nenhum upload de arquivo foi realizado.',
    'uploadErrCantWrite' => 'O arquivo "%s" nÃƒÂ£o pode ser escrito no disco.',
    'uploadErrNoTmpDir'  => 'Upload de arquivo nÃƒÂ£o pode ser realizado: faltando diretÃƒÂ³rio temporÃƒÂ¡rio.',
    'uploadErrExtension' => 'Upload de arquivo foi parado por uma extensÃƒÂ£o PHP.',
    'uploadErrUnknown'   => 'O upload do arquivo "%s" nÃƒÂ£o foi realizado devido a um erro desconhecido.',

    // SameSite setting
    'invalidSameSiteSetting' => 'A configuraÃƒÂ§ÃƒÂ£o SameSite deve ser None, Lax, Strict ou uma string vazia. Dado: {0}',
];