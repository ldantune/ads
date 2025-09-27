<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cast language settings
return [
    'baseCastMissing'        => 'La clase "{0}" debe heredar la clase "CodeIgniter\Entity\Cast\BaseCast".', // ' The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.'
    'invalidCastMethod'      => 'El mÃƒÂ©todo de transmisiÃƒÂ³n "{0}" es invÃƒÂ¡lido, los mÃƒÂ©todos vÃƒÂ¡lidos son: ["get", "set"].',
    'invalidTimestamp'       => 'El tipo de transmisiÃƒÂ³n "timestamp" espera un timestamp correcto.', // 'Type casting "timestamp" expects a correct timestamp.'
    'jsonErrorCtrlChar'      => 'Se ha encontrado un carÃƒÂ¡cter de control inesperado', // 'Unexpected control character found.',
    'jsonErrorDepth'         => 'Se ha excedido el nivel mÃƒÂ¡ximo de profundidad', // 'Maximum stack depth exceeded',
    'jsonErrorStateMismatch' => 'Desbordamiento o desajuste de modo', // 'Underflow or the modes mismatch',
    'jsonErrorSyntax'        => 'Error de sintaxis, JSON mal formado', // 'Syntax error, malformed JSON',
    'jsonErrorUnknown'       => 'Error desconocido', // 'Unknown error',
    'jsonErrorUtf8'          => 'CarÃƒÂ¡cter UTF-8 mal formado, posible codificaciÃƒÂ³n incorrecta', // 'Malformed UTF-8 characters, possibly incorrectly encoded',
];