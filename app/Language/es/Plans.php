<?php



return [
    'title_index' => 'Listado de planes',
    'title_archived' => 'Listado de planes archivados',
    'title_new' => 'Creando un nuevo plan',
    'title_edit' => 'Editando el Plan',
    'text_monthly' => 'Mensual',
    'text_quarterly' => 'Trimestral',
    'text_semester' => 'Semestre',
    'text_yearly' => 'Anual',
    'table_header_code' => 'CÃƒÂ³digo',
    'table_header_plan' => 'Plan',
    'table_header_details' => 'Detalles',
    'text_info_adverts' => 'NÃƒÂºmero de anuncios que el usuario puede registrar. Dejar en blanco para que sea ilimitado',
    'text_is_highlighted' => 'Destacado para comprar',
    'text_no_highlighted' => 'No resaltado para la compra',

    // Labels
    'label_name' => 'Nombre del plan',
    'label_code' => 'CÃƒÂ³digo del plan',
    'label_recorrence' => 'Tipo de recurrencia',
    'label_adverts' => 'NÃƒÂºmero de anuncios permitidos',
    'label_value' => 'Valor del plan',
    'label_description' => 'DescripciÃƒÂ³n del plan',
    'label_view' => 'Ver',
    'label_details' => 'Detalles',
    'label_is_highlighted' => 'Resaltar plan en Inicio',
    'label_free' => 'Publicado',
    'label_archived' => 'Archivado',


    // Validation messages
    'name'        => [
        'required' => 'El nombre del plan es obligatorio',
        'min_length' => 'Ingrese al menos 3 caracteres en la longitud',
        'max_length' => 'Ingrese un mÃƒÂ¡ximo de 90 caracteres de longitud',
        'is_unique' => 'Este plan ya existe',
    ],
    'recorrence'        => [
        'required' => 'Se requiere recurrencia del plan',
        'in_list' => 'Elija una de las opciones: mensual, trimestral, semestral o anual',
    ],
    'value'        => [
        'required' => 'El valor del plan es obligatorio',
    ],
    'description'        => [
        'required' => 'Se requiere la descripciÃƒÂ³n del plan',
    ],
];