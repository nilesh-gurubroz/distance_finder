<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses',
        'label' => 'company',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'company,street_number,street,zipcode,city',
        'iconfile' => 'EXT:distance_finder/Resources/Public/Icons/address-marker.svg'
    ],
    'types' => [
        '1' => ['showitem' => 'company, street_number, street, zipcode, city, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_distancefinder_domain_model_addresses',
                'foreign_table_where' => 'AND {#tx_distancefinder_domain_model_addresses}.{#pid}=###CURRENT_PID### AND {#tx_distancefinder_domain_model_addresses}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'company' => [
            'exclude' => true,
            'label' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses.company',
            'description' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses.company.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'street_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses.street_number',
            'description' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses.street_number.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'street' => [
            'exclude' => true,
            'label' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses.street',
            'description' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses.street.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'zipcode' => [
            'exclude' => true,
            'label' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses.zipcode',
            'description' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses.zipcode.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'city' => [
            'exclude' => true,
            'label' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses.city',
            'description' => 'LLL:EXT:distance_finder/Resources/Private/Language/locallang_db.xlf:tx_distancefinder_domain_model_addresses.city.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],

    ],
];
