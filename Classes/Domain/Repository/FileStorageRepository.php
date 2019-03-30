<?php
namespace Schmitzal\Way2Enjoy\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class FileStorageRepository
 * @package Schmitzal\Way2Enjoy\Domain\Repository
 */
class FileStorageRepository extends Repository
{
    /**
     * Do not respect storage pid for domain records
     */
    public function createQuery()
    {
        $query = parent::createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);

        return $query;
    }
}
