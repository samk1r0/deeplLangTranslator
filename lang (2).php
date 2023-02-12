<?php
return [
    'plugin' => [
        'name' => 'Mall',
        'description' => 'E-commerce solution for October CMS',
    ],
    'titles' => [
        'products' => [
            'create' => 'Create product',
            'update' => 'Edit product',
            'preview' => 'Preview product',
        ],
        'categories' => [
            'create' => 'Create category',
            'update' => 'Edit category',
            'preview' => 'Category preview',
        ],
        'orders' => [
            'show' => 'Order details',
            'export' => 'Export orders',
        ],
        'discounts' => [
            'create' => 'Create discount',
            'update' => 'Edit discount',
            'preview' => 'Preview discount',
        ],
        'taxes' => [
            'create' => 'Create tax',
            'update' => 'Edit tax',
        ],
        'reviews' => [
            'create' => 'Create review',
            'update' => 'Edit review',
        ],
    ],
    'payment_gateway_settings' => [
        'label' => 'Payment gateways',
        'description' => 'Configure your payment gateways',
        'stripe' => [
            'api_key' => 'Stripe API Key',
            'api_key_comment' => 'You can find this key in your Stripe Dashboard',
            'publishable_key' => 'Stripe Publishable Key',
            'publishable_key_comment' => 'You can find this key in your Stripe Dashboard',
        ],
        'paypal' => [
            'client_id' => 'PayPal Client ID',
            'secret' => 'PayPal Secret',
            'test_mode' => 'Test mode',
            'test_mode_comment' => 'Run all payments in the PayPal Sandbox.',
        ],
        'postfinance' => [
            'test_mode' => 'Test mode',
            'test_mode_comment' => 'Run all payments against the test environment',
            'pspid' => 'PSPID (Username)',
            'hashing_method' => 'Hash algorithm',
            'hashing_method_comment' => 'Configuration -> Technical information -> Global security parameters',
            'sha_in' => 'SHA-IN Signature',
            'sha_in_comment' => 'Configuration -> Technical information -> Data and origin verification',
            'sha_out' => 'SHA-OUT Signature',
            'sha_out_comment' => 'Configuration -> Technical information -> Transaction feedback',
        ],
    ],
    'notification_settings' => [
        'label' => 'Notifications',
        'description' => 'Configure store notifications',
    ],
    'price_category_settings' => [
        'label' => 'Price categories',
        'description' => 'Configure additional price categories',
    ],
    'properties' => [
        'use_for_variants' => 'Use for variants',
        'use_for_variants_comment' => 'This property is different for different variants of this product',
        'filter_type' => 'Filter type',
        'filter_types' => [
            'none' => 'Without filter',
            'set' => 'Set',
            'range' => [
                'float' => 'Float',
                'textarea' => 'Multi-line textfield',
                'richeditor' => 'Richtext',
                'dropdown' => 'Dropdown',
                'checkbox' => 'Checkbox',
                'color' => 'Color',
                'image' => 'Image',
                'switch' => 'Switch',
                'add' => 'Add option',
                'name' => 'Name',
                'price' => 'Price',
                'attributes' => 'Attribute',
                'option' => 'Option',
                'date' => [
                    'float' => 'Float',
                    'textarea' => 'Multi-line textfield',
                    'richeditor' => 'Richtext',
                    'dropdown' => 'Dropdown',
                    'checkbox' => 'Checkbox',
                    'color' => 'Color',
                    'image' => 'Image',
                    'switch' => 'Switch',
                    'add' => 'Add option',
                ]
            ]
        ],
    ]
];
