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
    'noRuleSets'      => 'Nenhum conjunto de regras especificado na configuraÃƒÂ§ÃƒÂ£o de ValidaÃƒÂ§ÃƒÂ£o.',
    'ruleNotFound'    => '{0} nÃƒÂ£o ÃƒÂ© uma regra vÃƒÂ¡lida.',
    'groupNotFound'   => '{0} nÃƒÂ£o ÃƒÂ© um grupo de regras de validaÃƒÂ§ÃƒÂ£o.',
    'groupNotArray'   => 'O grupo de regras {0} deve ser um array.',
    'invalidTemplate' => '{0} nÃƒÂ£o ÃƒÂ© um template de Validation vÃƒÂ¡lido.',

    // Rule Messages
    'alpha'                 => 'O campo {field} pode conter apenas caracteres alfabÃƒÂ©ticos.',
    'alpha_dash'            => 'O campo {field} pode conter apenas caracteres alfa-numÃƒÂ©ricos, sublinhados, e traÃƒÂ§os.',
    'alpha_numeric'         => 'O campo {field} pode conter apenas caracteres alfa-numÃƒÂ©ricos.',
    'alpha_numeric_punct'   => 'O campo {field} pode conter apenas caracteres alfa-numÃƒÂ©ricos, espaÃƒÂ§os, e  ~ ! # $ % & * - _ + = | : . caracteres.',
    'alpha_numeric_space'   => 'O campo {field} pode conter apenas caracteres alfa-numÃƒÂ©ricos e espaÃƒÂ§os.',
    'alpha_space'           => 'O campo {field} pode conter apenas caracteres alfabÃƒÂ©ticos e espaÃƒÂ§os.',
    'decimal'               => 'O campo {field} deve conter um nÃƒÂºmero decimal.',
    'differs'               => 'O campo {field} deve ser diferente do campo {param}.',
    'equals'                => 'O campo {field} deve ser exatamente: {param}.',
    'exact_length'          => 'O campo {field} deve conter exatamente {param} caracteres no tamanho.',
    'greater_than'          => 'O campo {field} deve conter um nÃƒÂºmero maior que {param}.',
    'greater_than_equal_to' => 'O campo {field} deve conter um nÃƒÂºmero maior ou igual a {param}.',
    'hex'                   => 'O campo {field} pode conter apenas caracteres hexadecimais.',
    'in_list'               => 'O campo {field} deve ser um desses: {param}.',
    'integer'               => 'O campo {field} deve conter um nÃƒÂºmero inteiro.',
    'is_natural'            => 'O campo {field} deve conter apenas dÃƒÂ­gitos.',
    'is_natural_no_zero'    => 'O campo {field} deve conter apenas dÃƒÂ­gitos e deve ser maior que zero.',
    'is_not_unique'         => 'O campo {field} deve conter um valor jÃƒÂ¡ existente no banco de dados.',
    'is_unique'             => 'O campo {field} deve conter um valor ÃƒÂºnico.',
    'less_than'             => 'O campo {field} deve conter um nÃƒÂºmero menor que {param}.',
    'less_than_equal_to'    => 'O campo {field} deve conter um nÃƒÂºmero menor ou igual a {param}.',
    'matches'               => 'O campo {field} nÃƒÂ£o ÃƒÂ© igual ao campo {param}.',
    'max_length'            => 'O campo {field} nÃƒÂ£o pode exceder {param} caracteres no tamanho.',
    'min_length'            => 'O campo {field} deve conter pelo menos {param} caracteres no tamanho.',
    'not_equals'            => 'O campo {field} nÃƒÂ£o pode ser: {param}.',
    'not_in_list'           => 'O campo {field} nÃƒÂ£o deve ser um desses: {param}.',
    'numeric'               => 'O campo {field} deve conter apenas nÃƒÂºmeros.',
    'regex_match'           => 'O campo {field} nÃƒÂ£o estÃƒÂ¡ no formato correto.',
    'required'              => 'O campo {field} ÃƒÂ© requerido.',
    'required_with'         => 'O campo {field} ÃƒÂ© requerido quando {param} estÃƒÂ¡ presente.',
    'required_without'      => 'O campo {field} ÃƒÂ© requerido quando {param} nÃƒÂ£o estÃƒÂ¡ presente.',
    'string'                => 'O campo {field} deve ser uma string vÃƒÂ¡lida.',
    'timezone'              => 'O campo {field} deve ser uma timezone vÃƒÂ¡lida.',
    'valid_base64'          => 'O campo {field} deve ser uma string base64 vÃƒÂ¡lida.',
    'valid_email'           => 'O campo {field} deve conter um endereÃƒÂ§o de e-mail vÃƒÂ¡lido.',
    'valid_emails'          => 'O campo {field} deve conter todos os endereÃƒÂ§os de e-mails vÃƒÂ¡lidos.',
    'valid_ip'              => 'O campo {field} deve conter um IP vÃƒÂ¡lido.',
    'valid_url'             => 'O campo {field} deve conter uma URL vÃƒÂ¡lida.',
    'valid_date'            => 'O campo {field} deve conter uma data vÃƒÂ¡lida.',

    // Credit Cards
    'valid_cc_num' => '{field} nÃƒÂ£o parece ser um nÃƒÂºmero de cartÃƒÂ£o de crÃƒÂ©dito vÃƒÂ¡lido.',

    // Files
    'uploaded' => '{field} nÃƒÂ£o ÃƒÂ© um arquivo de upload vÃƒÂ¡lido.',
    'max_size' => '{field} ÃƒÂ© um arquivo muito grande.',
    'is_image' => '{field} nÃƒÂ£o ÃƒÂ© um arquivo de imagem vÃƒÂ¡lida do upload.',
    'mime_in'  => '{field} nÃƒÂ£o tem um tipo mime vÃƒÂ¡lido.',
    'ext_in'   => '{field} nÃƒÂ£o tem uma extensÃƒÂ£o de arquivo vÃƒÂ¡lida.',
    'max_dims' => '{field} nÃƒÂ£o ÃƒÂ© uma imagem, ou ela ÃƒÂ© muito larga ou muito grande.',
];