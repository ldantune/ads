<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cookie language settings
return [
    'invalidExpiresTime'    => 'Tipo "{0}" ÃƒÂ© invÃƒÂ¡lido para o atributo "Expires". Esperado: string, integer, objeto de DateTimeInterface.',
    'invalidExpiresValue'   => 'O tempo de expiraÃƒÂ§ÃƒÂ£o do cookie nÃƒÂ£o ÃƒÂ© vÃƒÂ¡lido.',
    'invalidCookieName'     => 'O nome do cookie "{0}" contÃƒÂ©m caracteres invÃƒÂ¡lidos.',
    'emptyCookieName'       => 'O nome do cookie nÃƒÂ£o pode ser vazio.',
    'invalidSecurePrefix'   => 'Usando o prefixo "__Secure-" requer que seja setado o atributo "Secure".',
    'invalidHostPrefix'     => 'Usando o prefixo "__Host-" deve ser setado com a flag "Secure", nÃƒÂ£o deve possuir o atributo "Domain", e "Path" deve ser "/".',
    'invalidSameSite'       => 'O valor de SameSite deve ser None, Lax, Strict ou uma string vazia, {0} foi passado.',
    'invalidSameSiteNone'   => 'Usando o atributo "SameSite=None" requer que seja setado o atributo "Secure".',
    'invalidCookieInstance' => 'Classe "{0}" espera array de cookies serem instÃƒÂ¢ncias de "{1}" mas recebeu "{2}" no ÃƒÂ­ndice {3}.',
    'unknownCookieInstance' => 'Objeto Cookie com o nome "{0}" e prefixo "{1}" nÃƒÂ£o foi encontrado na coleÃƒÂ§ÃƒÂ£o.',
];