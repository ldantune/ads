<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    // --------------------------------------------------------------------
    // Categories
    // --------------------------------------------------------------------
    public $category = [
        'name'     => 'required|min_length[3]|max_length[90]|is_unique[categories.name,id,{id}]',
    ];

    public $category_errors = [
        'name' => [
            'required'      => 'Categories.name.required',
            'min_length'    => 'Categories.name.min_length',
            'max_length'    => 'Categories.name.max_length',
            'is_unique'     => 'Categories.name.is_unique',
        ]
    ];

    // --------------------------------------------------------------------
    // Plans
    // --------------------------------------------------------------------
    public $plan = [
        'name'     => 'required|min_length[3]|max_length[90]|is_unique[plans.name,id,{id}]',
        'recorrence'     => 'required|in_list[monthly,quarterly,semester,yearly]',
        'value'     => 'required',
        'description'     => 'required',
    ];

    public $plan_errors = [
        'name' => [
            'required'      => 'Plans.name.required',
            'min_length'    => 'Plans.name.min_length',
            'max_length'    => 'Plans.name.max_length',
            'is_unique'     => 'Plans.name.is_unique',
        ],
        'recorrence' => [
            'required'      => 'Plans.recorrence.required',
            'in_list'    => 'Plans.recorrence.min_length',
        ],
        'value' => [
            'required'      => 'Plans.recorrence.required',
        ],
        'description' => [
            'required'      => 'Plans.recorrence.required',
        ]
    ];

    // --------------------------------------------------------------------
    // Adverts
    // --------------------------------------------------------------------
    public $advert = [
        'title'         => 'required|min_length[5]|max_length[120]|is_unique[adverts.title,id,{id}]',
        'situation'     => 'required|in_list[new,used]',
        'category_id'   => 'required|is_not_unique[categories.id,id,{category_id}]',
        'price'         => 'required',
        'description'   => 'required|min_length[10]|max_length[5000]',
        'zipcode'       => 'required|exact_length[9]',
        'street'        => 'required|min_length[3]|max_length[120]',
        'neighborhood'   => 'required|min_length[3]|max_length[140]',
        'city'          => 'required|min_length[3]|max_length[120]',
        'state'         => 'required|exact_length[2]'
    ];

    public $advert_errors = [
        'title' => [
            'required'      => 'Adverts.title.required',
            'min_length'    => 'Adverts.title.min_length',
            'max_length'    => 'Adverts.title.max_length',
            'is_unique'     => 'Adverts.title.is_unique',
        ],
        'situation' => [
            'required'      => 'Adverts.situation.required',
            'in_list'    => 'Adverts.situation.in_list',
        ],
        'category_id' => [
            'required'      => 'Adverts.category_id.required',
            'is_not_unique'    => 'Adverts.category_id.is_not_unique',
        ],
        'price' => [
            'required'      => 'Adverts.price.required',
        ],
        'description' => [
            'required'      => 'Adverts.description.required',
            'min_length'    => 'Adverts.description.min_length',
            'max_length'    => 'Adverts.description.max_length',
        ],
        'zipcode' => [
            'required'      => 'Adverts.zipcode.required',
            'exact_length'  => 'Adverts.zipcode.exact_length',
        ],
        'street' => [
            'required'      => 'Adverts.street.required',
            'min_length'    => 'Adverts.street.min_length',
            'max_length'    => 'Adverts.street.max_length',
        ],
        'neighborhood' => [
            'required'      => 'Adverts.neighborhood.required',
            'min_length'    => 'Adverts.neighborhood.min_length',
            'max_length'    => 'Adverts.neighborhood.max_length',
        ],
        'city' => [
            'required'      => 'Adverts.city.required',
            'min_length'    => 'Adverts.city.min_length',
            'max_length'    => 'Adverts.city.max_length',
        ],
        'state' => [
            'required'      => 'Adverts.state.required',
            'exact_length'  => 'Adverts.state.exact_length',
        ],
    ];
}
