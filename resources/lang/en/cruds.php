<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'clientManagement' => [
        'title'        => 'Client Actions',
        'outgoing'     => 'Outgoing',
        'incoming'     => 'Incoming',
        'contacts'     => 'Contacts',
        'settings'     => 'Settings',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'contact'        => [
        'title'      => 'Contact List',
        'add'        => 'Contact',
        'fields'     => [
            'id' => 'ID',
            'companyName' => 'Company Name (Bedrijfsnaam)',
            'companyName_helper' => '',
            'firstName' => 'First Name (Voornaam)',
            'firstName_helper' => '',
            'lastName' => 'Last Name (Achternaam)',
            'lastName_helper' => '',
            'street' => 'Street (Straat)',
            'street_helper' => '',
            'postalCode' => 'Postal Code',
            'postalCode_helper' => '',
            'city' => 'City (Stad)',
            'city_helper' => '',
            'country' => 'Country (Land)',
            'country_helper' => '',
            'vatNumber' => 'VAT number (BTW nummer)',
            'vatNumber_helper' => '',
            'bankNumber' => 'Bank number (Rekeningnummer)',
            'bankNumber_helper' => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'phone'                    => 'Phone (Telefoon)',
            'phone_helper' => '',

        ]
    ],

    'product'      => [
        'title_singular' => 'Product',
        'fields'   => [
            'id'   => 'ID',
            'id_helper' => '',
            'productName' => 'Product Name',
            'productName_helper' => '',
            'productDescription' => 'Product Description',
            'productDescription_helper' => '',
            'productUnitCost' => 'Product Unit Cost',
            'productUnitCost_helper' => '',
        ]
    ],

    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'companyLogo'              => 'Company Logo',
            'companyLogo_helper'       => '',
            'name'                     => 'Company name (Bedrijfsnaam)',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'phone'                    => 'Phone (Telefoonnummer)',
            'phone_helper' => '',
            'address' => 'Address (Adres)',
            'address_helper' => '',
            'zipCode' => 'ZIP (Postcode)',
            'zipCode_helper' => '',
            'city' => 'City (Stad)',
            'city_helper' => '',
            'kvkNumber' => 'KVK number (KVK nummer)',
            'kvkNumber_helper' => '',
            'vatNumber' => 'VAT number (BTW nummer)',
            'vatNumber_helper' => '',
            'bankNumber' => 'Bank number (Rekeningnummer)',
            'bankNumber_helper' => '',
            'invoiceFootnote' => 'Invoice footnote',
            'invoiceFootnote_helper' => '',
            'password'                 => 'Password (Wachtwoord)',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
];