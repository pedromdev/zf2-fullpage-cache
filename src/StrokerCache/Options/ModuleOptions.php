<?php
/**
 * @author        Bram Gerritsen bgerritsen@gmail.com
 * @author        Aeneas Rekkas
 * @copyright (c) Bram Gerritsen 2013
 * @license       http://opensource.org/licenses/mit-license.php
 */

namespace StrokerCache\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * @var array
     */
    protected $idGenerators;
    /**
     * @var array
     */
    protected $strategies;
    /**
     * @var array
     */
    protected $storageAdapter;
    /**
     * @var bool
     */
    protected $cacheResponse = true;
    /**
     * @var string
     */
    protected $idGenerator = 'requesturi';

    /**
     * @return boolean
     */
    public function getCacheResponse()
    {
        return $this->cacheResponse;
    }

    /**
     * @param boolean $cacheResponse
     */
    public function setCacheResponse($cacheResponse)
    {
        $this->cacheResponse = $cacheResponse;
    }

    /**
     * @return string
     */
    public function getIdGenerator()
    {
        return $this->idGenerator;
    }

    /**
     * @param string $idGenerator
     */
    public function setIdGenerator($idGenerator)
    {
        $this->idGenerator = $idGenerator;
    }

    /**
     * @return array
     */
    public function getIdGenerators()
    {
        return $this->idGenerators;
    }

    /**
     * @param array $idGenerators
     */
    public function setIdGenerators($idGenerators)
    {
        $this->idGenerators = $idGenerators;
    }

    /**
     * @return array
     */
    public function getStorageAdapter()
    {
        return $this->storageAdapter;
    }

    /**
     * @param array $storageAdapter
     */
    public function setStorageAdapter(array $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    /**
     * @return array
     */
    public function getStrategies()
    {
        return $this->strategies;
    }

    /**
     * @param array $strategies
     */
    public function setStrategies(array $strategies)
    {
        $this->strategies = $strategies;
    }
}
