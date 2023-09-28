<?php

declare(strict_types=1);

namespace Guru\DistanceFinder\Controller;


use Guru\DistanceFinder\Domain\Repository\AddressesRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * This file is part of the "Distance Finder" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Nilesh Malankiya <nilesh.malankiya37@gmail.com>
 */

/**
 * AddressesController
 */
class AddressesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * addressesRepository
     *
     * @var AddressesRepository
     */
    protected $addressesRepository = null;

    /**
     * @param AddressesRepository $addressesRepository
     */
    public function injectAddressesRepository(AddressesRepository $addressesRepository)
    {
        $this->addressesRepository = $addressesRepository;
    }

    /**
     * action index
     *
     * @return ResponseInterface
     */
    public function indexAction(): ResponseInterface
    {
        $allAddresses = $this->addressesRepository->findAll()->toArray();
        $addresses = [];
        if ($allAddresses) {
            foreach ($allAddresses as $address) {
                $addresses[] = $address->getCompany().', '
                    .$address->getStreetNumber().', '
                    .$address->getStreet().', '
                    .$address->getZipcode().' '
                    .$address->getCity();
            }
        }
        $addressesJson = GeneralUtility::jsonEncodeForJavaScript($addresses);
        $this->view->assign('addressString', $addressesJson);
        return $this->htmlResponse();
    }
}
