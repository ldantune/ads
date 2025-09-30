<?php

return [

    // texts
    'title_index'                   => 'Listando os Anúncios',
    'title_new'                     => 'Criar Anúncio',
    'title_edit'                    => 'Editar Anúncio',
    'text_is_published'             => 'Anúncio publicado',
    'text_under_analysis'           => 'Em análise',
    'text_new'                      => 'Item Novo',
    'text_used'                     => 'Item Usado',
    'text_edit_address'             => 'Localização do anúncio',
    'text_edit_questions'           => 'Perguntas e Respostas do anúncio {title}',
    'text_for_empty_address'        => 'Ainda não definido',
    'text_edit_images'              => 'Imagens do anúncio',
    'text_no_images'                => 'Esse anúncio ainda não possui imagens',
    'text_images_info_upload'       => 'Apenas arquivos jpg, jpeg, png, e webp. Tamanho máximo: 2048mb. Dimesões máximas: 1920 x 1080 pixels.',
    'text_rule_to_be_published'     => 'Para que seus anúncios sejam publicados, eles precisam ter um endereço definido, pois só assim eles serão exibidos nas pesquisas.',
    'cannot_be_published'           => 'Não pode ser publicado, pois não possui endereço definido',
    'text_total_user_advert'        => 'Total de anúncios',
    'text_total_advert_published'   => 'Anúncios Publicados',
    'text_total_waiting_approval'   => 'Aguardando Aprovação',
    'text_total_archived'           => 'Anúncios Arquivados',


    // Buttons
    'btn_edit_images'           => 'Imagens',
    'btn_edit_address'          => 'Endereço',
    'btn_send_for_approval'     => 'Enviar para aprovação',
    'btn_view_advert'           => 'Ver anúncio',
    'btn_view_questions'        => 'Perguntas e Respostas',



    // Labels
    'label_address'         => 'Onde',
    'label_image'           => 'Imagem',
    'label_form_images'     => 'Escolha uma ou mais imagens',
    'label_code'            => 'Código',
    'label_title'           => 'Título',
    'label_published'       => 'Publicado',
    'label_situation'       => 'Escolha a Situação do item...',
    'label_category'        => 'Categoria',
    'label_price'           => 'Valor do Item anunciado',
    'label_description'     => 'Descrição do anúncio',
    'label_status'          => 'Status',
    'label_zipcode'         => 'CEP do anúncio',
    'label_street'          => 'Endereço do anúncio',
    'label_neighborhood'    => 'Bairro do anúncio',
    'label_city'            => 'Cidade do anúncio',
    'label_state'           => 'Estado do anúncio',
    'label_number'          => 'Número do endereço',
    'label_complement'      => 'Complemento do endereço',



    // Validation messages
    'title'        => [
        'is_unique' => 'Esse Título já existe. Por favor escolha outro.',
        'required'  => 'O campo Título é obrigatório.',
        'min_length' => 'O campo Título deve ter no mínimo 5 caracteres.',
        'max_length' => 'O campo Título deve ter no máximo 255 caracteres.',
    ],
    'situation'   => [
        'required'  => 'O campo Situação é obrigatório.',
        'in_list'   => 'O campo Situação deve ser Novo ou Usado.',
    ],
    'category_id' => [
        'required'      => 'O campo Categoria é obrigatório.',
        'is_not_unique' => 'A Categoria selecionada não foi encontrada.',
    ],
    'price'       => [
        'required'  => 'O campo Valor é obrigatório.',
    ],
    'description' => [
        'required'  => 'O campo Descrição é obrigatório.',
        'min_length' => 'O campo Descrição deve ter no mínimo 10 caracteres.',
        'max_length' => 'O campo Descrição deve ter no máximo 5000 caracteres.',
    ],
    'zipcode'     => [
        'required'     => 'O campo CEP é obrigatório.',
        'exact_length' => 'O campo CEP deve ter 9 caracteres.',
    ],
    'street'      => [
        'required'   => 'O campo Endereço é obrigatório.',
        'min_length' => 'O campo Endereço deve ter no mínimo 3 caracteres.',
        'max_length' => 'O campo Endereço deve ter no máximo 120 caracteres.',
    ],
    'neighborhood' => [
        'required'   => 'O campo Bairro é obrigatório.',
        'min_length' => 'O campo Bairro deve ter no mínimo 3 caracteres.',
        'max_length' => 'O campo Bairro deve ter no máximo 140 caracteres.',
    ],
    'city'        => [
        'required'   => 'O campo Cidade é obrigatório.',
        'min_length' => 'O campo Cidade deve ter no mínimo 3 caracteres.',
        'max_length' => 'O campo Cidade deve ter no máximo 120 caracteres.',
    ],
    'state'       => [
        'required'     => 'O campo Estado é obrigatório.',
        'exact_length' => 'O campo Estado deve ter 2 caracteres.',
    ],

];
