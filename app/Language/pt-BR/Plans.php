<?php

// Para a view show, o aluno poderá aplicar os conhecimentos.... fica o desafio
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
    'text_info_adverts'             => 'Nº de Anúncios que o usuário poderá cadastrar. Deixe em branco para ilimitado',
    'text_is_highlighted'           => 'Destacado para compra',
    'text_no_highlighted'           => 'Não destacado para compra',
    'text_unlimited_adverts'        => 'Ilimitado',


    // btn
    'btn_choice'    => 'Eu quero esse',


    // Table view
    'table_header_code'     => 'Código',
    'table_header_plan'     => 'Plano',
    'table_header_details'  => 'Detalhes',

    // Labels
    'label_name'            => 'Nome do Plano',
    'label_code'            => 'Códido do Plano',
    'label_recorrence'      => 'Tipo de recorrência',
    'label_adverts'         => 'Nº de Anúncios permitidos',
    'label_value'           => 'Valor do plano',
    'label_description'     => 'Descrição do plano',
    'label_view'            => 'Visualizar',
    'label_details'         => 'Detalhes',
    'label_is_highlighted'  => 'Plano Destacado para Compra',
    'label_archived'        => 'Arquivado',

    // Validation messages
    'name'        => [
        'required' => 'O nome do plano é obrigatório',
        'min_length' => 'Informe pelo menos 3 carectéres no tamanho',
        'max_length' => 'Informe no máximo 90 carectéres no tamanho',
        'is_unique' => 'Esse plano já existe',
    ],
    'recorrence'        => [
        'required' => 'A recorrência do plano é obrigatório',
        'in_list' => 'Por favor escolha uma das opções: Mensal, Trimestral, Semestral ou Anual',
    ],
    'value'        => [
        'required' => 'O valor do plano é obrigatório',
    ],
    'description'        => [
        'required' => 'A descrição do plano é obrigatório',
    ],
];
