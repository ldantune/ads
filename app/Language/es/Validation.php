<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'No se han establecido reglas en la configuraciÃƒÂ³n de validaciÃƒÂ³n.',
    'ruleNotFound'    => '{0} no es una regla de validaciÃƒÂ³n vÃƒÂ¡lida.',
    'groupNotFound'   => '{0} no es un grupo de reglas de validaciÃƒÂ³n.',
    'groupNotArray'   => '{0} el grupo de validaciÃƒÂ³n debe ser un array.',
    'invalidTemplate' => '{0} no es un modelo de validaciÃƒÂ³n vÃƒÂ¡lido.',

    // Rule Messages
    'alpha'                 => 'El campo {field} solo puede contener caracteres alfabÃƒÂ©ticos.',
    'alpha_dash'            => 'El campo {field} solo puede contener caracteres alfanumÃƒÂ©ricos, subrayados, y guiones.',
    'alpha_numeric'         => 'El campo {field} solo puede contener caracteres alfanumÃƒÂ©ricos.',
    'alpha_numeric_punct'   => 'El campo {field} solo puede contener caracteres alfanumÃƒÂ©ricos, espacios, y los caracteres ~ ! # $ % & * - _ + = | : . .',
    'alpha_numeric_space'   => 'El campo {field} solo puede contener caracteres alfanumÃƒÂ©ricos y espacios.',
    'alpha_space'           => 'El campo {field} solo puede contener caracteres alfabÃƒÂ©ticos y espacios.',
    'decimal'               => 'El campo {field} debe contener un nÃƒÂºmero decimal.',
    'differs'               => 'El campo {field} debe diferir del campo {param}.',
    'equals'                => 'El campo {field} debe ser exactamente: {param}.',
    'exact_length'          => 'El campo {field} debe tener exactamente {param} caractÃƒÂ©res de longitud.',
    'greater_than'          => 'El campo {field} debe contener un nÃƒÂºmero mayor que {param}.',
    'greater_than_equal_to' => 'El campo {field} debe contener un nÃƒÂºmero mayor o igual a {param}.',
    'hex'                   => 'El campo {field} solo puede contener caracteres hexadecimales.',
    'in_list'               => 'El campo {field} debe ser uno de: {param}.',
    'integer'               => 'El campo {field} debe contener un entero.',
    'is_natural'            => 'El campo {field} debe contener solo dÃƒÂ­gitos.',
    'is_natural_no_zero'    => 'El campo {field} debe solo contener dÃƒÂ­gitos y ser mayor que cero.',
    'is_not_unique'         => 'El campo {field} debe contener un valor previamente existente en la base de datos.',
    'is_unique'             => 'El campo {field} debe contener un valor ÃƒÂºnico.',
    'less_than'             => 'El campo {field} debe contener un nÃƒÂºmero menor que {param}.',
    'less_than_equal_to'    => 'El campo {field} debe contener un nÃƒÂºmero menor o igual a {param}.',
    'matches'               => 'El campo {field} no coincide con el campo {param}.',
    'max_length'            => 'El campo {field} no pude exceder los {param} caracteres de longitud.',
    'min_length'            => 'El campo {field} debe tener al menos {param} caracteres de longitud.',
    'not_equals'            => 'El campo {field} no puede ser: {param}.',
    'not_in_list'           => 'El campo {field} no debe ser uno de: {param}.',
    'numeric'               => 'El campo {field} debe contener solo nÃƒÂºmeros.',
    'regex_match'           => 'El campo {field} no estÃƒÂ¡ en el formato correcto.',
    'required'              => 'El campo {field} es obligatorio.',
    'required_with'         => 'El campo {field} es obligatorio cuando {param} estÃƒÂ¡ presente.',
    'required_without'      => 'El campo {field} es obligatorio cuando {param} no estÃƒÂ¡ presente.',
    'string'                => 'El campo {field} debe ser una cadena vÃƒÂ¡lida.',
    'timezone'              => 'El campo {field} debe ser una zona horaria vÃƒÂ¡lida.',
    'valid_base64'          => 'El campo {field} debe ser una cadena base64 vÃƒÂ¡lida.',
    'valid_email'           => 'El campo {field} debe contener una direcciÃƒÂ³n de email vÃƒÂ¡lida.',
    'valid_emails'          => 'El campo {field} debe contener todas las direcciones de email vÃƒÂ¡lidas.',
    'valid_ip'              => 'El campo {field} debe contener una IP vÃƒÂ¡lida.',
    'valid_url'             => 'El campo {field} debe contener una URL vÃƒÂ¡lida.',
    'valid_date'            => 'El campo {field} debe contener una fecha vÃƒÂ¡lida.',

    // Credit Cards
    'valid_cc_num' => '{field} no parece ser un nÃƒÂºmero de tarjeta de crÃƒÂ©dito vÃƒÂ¡lida.',

    // Files
    'uploaded' => '{field} no es un campo de subida de archivo vÃƒÂ¡lido.',
    'max_size' => '{field} es demasiado grande para un archivo.',
    'is_image' => '{field} no es vÃƒÂ¡lido, subido archivo de imagen.',
    'mime_in'  => '{field} no tiene un tipo vÃƒÂ¡lido de mime.',
    'ext_in'   => '{field} no tiene una extensiÃƒÂ³n de archivo vÃƒÂ¡lida.',
    'max_dims' => '{field} no es una imagen o tiene demasiado alto o ancho.',
];