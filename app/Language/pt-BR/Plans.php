<?php

// Para a view show, o aluno poderÃƒÂ¡ aplicar os conhecimentos.... fica o desafio
// Farei apenas para index e form

return [
    'title_index'                   => 'Listando os Planos',
    'title_archived'                => 'Listando os Planos Arquivados',
    'title_new'                     => 'Criando novo Plano',
    'title_edit'                    => 'Editando o Plano',
    'text_monthly'                  => 'Mensal',
    'text_quarterly'                => 'Trimestral',
    'text_semester'                 => 'Semestral',
    'text_yearly'                   => 'Anual',
    'text_info_adverts'             => 'NÃ‚Âº de AnÃƒÂºncios que o usuÃƒÂ¡rio poderÃƒÂ¡ cadastrar. Deixe em branco para ilimitado',
    'text_is_highlighted'           => 'Destacado para compra',
    'text_no_highlighted'           => 'NÃƒÂ£o destacado para compra',
    'text_unlimited_adverts'        => 'Ilimitado',


    // btn
    'btn_choice'    => 'Eu quero esse',


    // Table view
    'table_header_code'     => 'CÃƒÂ³digo',
    'table_header_plan'     => 'Plano',
    'table_header_details'  => 'Detalhes',

    // Labels
    'label_name'            => 'Nome do Plano',
    'label_code'            => 'CÃƒÂ³dido do Plano',
    'label_recorrence'      => 'Tipo de recorrÃƒÂªncia',
    'label_adverts'         => 'NÃ‚Âº de AnÃƒÂºncios permitidos',
    'label_value'           => 'Valor do plano',
    'label_description'     => 'DescriÃƒÂ§ÃƒÂ£o do plano',
    'label_view'            => 'Visualizar',
    'label_details'         => 'Detalhes',
    'label_is_highlighted'  => 'Plano Destacado para Compra',
    'label_archived'        => 'Arquivado',

    // Validation messages
    'name'        => [
        'required' => 'O nome do plano ÃƒÂ© obrigatÃƒÂ³rio',
        'min_length' => 'Informe pelo menos 3 carectÃƒÂ©res no tamanho',
        'max_length' => 'Informe no mÃƒÂ¡ximo 90 carectÃƒÂ©res no tamanho',
        'is_unique' => 'Esse plano jÃƒÂ¡ existe',
    ],
    'recorrence'        => [
        'required' => 'A recorrÃƒÂªncia do plano ÃƒÂ© obrigatÃƒÂ³rio',
        'in_list' => 'Por favor escolha uma das opÃƒÂ§ÃƒÂµes: Mensal, Trimestral, Semestral ou Anual',
    ],
    'value'        => [
        'required' => 'O valor do plano ÃƒÂ© obrigatÃƒÂ³rio',
    ],
    'description'        => [
        'required' => 'A descriÃƒÂ§ÃƒÂ£o do plano ÃƒÂ© obrigatÃƒÂ³rio',
    ],
];