<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'Tabela de migraÃƒÂ§ÃƒÂµes deve ser definida.',
    'disabled'      => 'As migraÃƒÂ§ÃƒÂµes foram carregadas, mas estÃƒÂ£o desativadas ou estÃƒÂ£o configuradas incorretamente.',
    'notFound'      => 'Arquivo de migraÃƒÂ§ÃƒÂ£o nÃƒÂ£o encontrado: ',
    'batchNotFound' => 'Alvo batch nÃƒÂ£o encontrado: ',
    'empty'         => 'Nenhum arquivo de migraÃƒÂ§ÃƒÂ£o encontrado',
    'gap'           => 'HÃƒÂ¡ uma diferenÃƒÂ§a na sequÃƒÂªncia de migraÃƒÂ§ÃƒÂ£o perto do nÃƒÂºmero de versÃƒÂ£o: ',
    'classNotFound' => 'A classe de migraÃƒÂ§ÃƒÂ£o "%s" nÃƒÂ£o foi encontrada.',
    'missingMethod' => 'A classe de migraÃƒÂ§ÃƒÂ£o estÃƒÂ¡ sem um mÃƒÂ©todo "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tMigra o banco de dados para a ÃƒÂºltima migraÃƒÂ§ÃƒÂ£o disponÃƒÂ­vel.",
    'migHelpCurrent'  => "\t\tMigra o banco de dados para a versÃƒÂ£o configurada como 'current' na configuraÃƒÂ§ÃƒÂ£o.",
    'migHelpVersion'  => "\tMigra o banco de dados para versÃƒÂ£o {v}.",
    'migHelpRollback' => "\tExecuta todas as migraÃƒÂ§ÃƒÂµes 'down' atÃƒÂ© a versÃƒÂ£o 0.",
    'migHelpRefresh'  => "\t\tDesinstala e executa novamente todas as migraÃƒÂ§ÃƒÂµes para renovar o banco de dados..",
    'migHelpSeed'     => "\tRoda o seeder nomeado [name].",
    'migCreate'       => "\tCria uma nova migraÃƒÂ§ÃƒÂ£o nomeada [name]",
    'nameMigration'   => 'Nomeie o arquivo de migraÃƒÂ§ÃƒÂ£o',
    'migNumberError'  => 'O nÃƒÂºmero da migraÃƒÂ§ÃƒÂ£o deve ter trÃƒÂªs dÃƒÂ­gitos e nÃƒÂ£o deve haver lacunas na sequÃƒÂªncia.',
    'rollBackConfirm' => 'VocÃƒÂª tem certeza que deseja reverter?',
    'refreshConfirm'  => 'VocÃƒÂª tem certeza que deseja atualizar?',

    'latest'            => 'Executando todas as novas migraÃƒÂ§ÃƒÂµes...',
    'generalFault'      => 'MigraÃƒÂ§ÃƒÂ£o falhou!',
    'migInvalidVersion' => 'NÃƒÂºmero da versÃƒÂ£o fornecida ÃƒÂ© invÃƒÂ¡lido.',
    'toVersionPH'       => 'Migrando para a versÃƒÂ£o %s...',
    'toVersion'         => 'Migrando para a versÃƒÂ£o atual...',
    'rollingBack'       => 'Revertendo todas as migraÃƒÂ§ÃƒÂµes...',
    'noneFound'         => 'Nenhuma migraÃƒÂ§ÃƒÂ£o foi encontrada.',
    'migSeeder'         => 'Nome do seeder',
    'migMissingSeeder'  => 'VocÃƒÂª deve fornecer o nome de um seeder.',
    'nameSeeder'        => 'Nomeie o arquivo seeder',
    'removed'           => 'Revertendo: ',
    'added'             => 'Rodando: ',

    // Migrate Status
    'namespace' => 'Namespace',
    'filename'  => 'Nome do arquivo',
    'version'   => 'VersÃƒÂ£o',
    'group'     => 'Grupo',
    'on'        => 'Migrado em: ',
    'batch'     => 'Lote',
];