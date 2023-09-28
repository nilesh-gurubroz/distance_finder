<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'DistanceFinder',
        'Pi1',
        [
            \Guru\DistanceFinder\Controller\AddressesController::class => 'index'
        ],
        // non-cacheable actions
        [
            \Guru\DistanceFinder\Controller\AddressesController::class => 'index'
        ]
    );
})();
