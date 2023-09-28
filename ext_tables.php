<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

(static function() {
    ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:distance_finder/Configuration/PageTsConfig/wizard.tsconfig">'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_distancefinder_domain_model_addresses', 'EXT:distance_finder/Resources/Private/Language/locallang_csh_tx_distancefinder_domain_model_addresses.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_distancefinder_domain_model_addresses');
})();
