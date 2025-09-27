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
    'missingTable'  => 'Debe establecer la tabla de migrado.',
    'disabled'      => 'Las migraciones se han cargado pero estÃƒÂ¡n deshabilitadas o configuradas incorrectamente.',
    'notFound'      => 'Archivo de migraciÃƒÂ³n no encontrado: ',
    'batchNotFound' => 'Lote objetivo no encontrado: ',
    'empty'         => 'No se han encontrado archivos de migraciÃƒÂ³n',
    'gap'           => 'Hay un hueco en la secuencia de migraciÃƒÂ³n cerca del nÃƒÂºmero de versiÃƒÂ³n: ',
    'classNotFound' => 'La clase de migraciÃƒÂ³n "%s" no se ha encontrado.',
    'missingMethod' => 'La clase de migraciÃƒÂ³n no ha encontrado el mÃƒÂ©todo "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tMigra la base de datos a la ÃƒÂºltima versiÃƒÂ³n disponible.",
    'migHelpCurrent'  => "\t\tMigra la base de datos a la versiÃƒÂ³n marcado como 'current' en configuraciÃƒÂ³n.",
    'migHelpVersion'  => "\tMigra la base de datos a la versiÃƒÂ³n {v}.",
    'migHelpRollback' => "\tEjecuta todas las migraciones 'down' a la versiÃƒÂ³n 0.",
    'migHelpRefresh'  => "\t\tDesinstala y reejecuta todas las migraciones para refrescar la base de datos.",
    'migHelpSeed'     => "\tEjecuta la semilla de nombre [name].",
    'migCreate'       => "\tCrea una nueva migraciÃƒÂ³n llamada [name]",
    'nameMigration'   => 'Nombre el archivo de migraciÃƒÂ³n',
    'migNumberError'  => 'El nÃƒÂºmero de migraciÃƒÂ³n debe tener tres dÃƒÂ­gitos y no debe haber espacios en la secuencia.',
    'rollBackConfirm' => 'Ã‚Â¿EstÃƒÂ¡s seguro de que quieres retrotraer?', // 'Are you sure you want to rollback?',
    'refreshConfirm'  => 'Ã‚Â¿EstÃƒÂ¡s seguro de que quieres actualizar?', // 'Are you sure you want to refresh?',

    'latest'            => 'Migrando a la ÃƒÂºltima versiÃƒÂ³n...',
    'generalFault'      => 'Ã‚Â¡La migraciÃƒÂ³n fallÃƒÂ³!',
    'migInvalidVersion' => 'NÃƒÂºmero de versiÃƒÂ³n incorrecta.',
    'toVersionPH'       => 'Migrando a la versiÃƒÂ³n %s...',
    'toVersion'         => 'Migrando a la versiÃƒÂ³n actual...',
    'rollingBack'       => 'Deshaciendo todas las migraciones...',
    'noneFound'         => 'No se han encontrado migraciones.',
    'migSeeder'         => 'Nombre de semilla',
    'migMissingSeeder'  => 'Debe indicar un nombre de semilla.',
    'nameSeeder'        => 'Nombra el archivo de la sembradora', // 'Name the seeder file',
    'removed'           => 'Desinstalando: ',
    'added'             => 'Ejecutando: ',

    // Migrate Status
    'namespace' => 'Espacio de nombres',
    'filename'  => 'Nombre de archivo',
    'version'   => 'VersiÃƒÂ³n',
    'group'     => 'Grupo',
    'on'        => 'Migrado el: ',
    'batch'     => 'Lote',
];