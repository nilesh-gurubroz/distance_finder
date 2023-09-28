<?php

declare(strict_types=1);

namespace Guru\DistanceFinder\Domain\Model;


/**
 * This file is part of the "Distance Finder" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Nilesh Malankiya <nilesh.malankiya37@gmail.com>
 */

/**
 * Addresses
 */
class Addresses extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * company
     *
     * @var string
     */
    protected $company = null;

    /**
     * streetNumber
     *
     * @var string
     */
    protected $streetNumber = null;

    /**
     * street
     *
     * @var string
     */
    protected $street = null;

    /**
     * zipcode
     *
     * @var string
     */
    protected $zipcode = null;

    /**
     * city
     *
     * @var string
     */
    protected $city = null;

    /**
     * Returns the company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets the company
     *
     * @param string $company
     * @return void
     */
    public function setCompany(string $company)
    {
        $this->company = $company;
    }

    /**
     * Returns the streetNumber
     *
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Sets the streetNumber
     *
     * @param string $streetNumber
     * @return void
     */
    public function setStreetNumber(string $streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * Returns the street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    /**
     * Returns the zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Sets the zipcode
     *
     * @param string $zipcode
     * @return void
     */
    public function setZipcode(string $zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Returns the city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }
}
