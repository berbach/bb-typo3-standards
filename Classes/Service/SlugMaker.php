<?php
declare(strict_types = 1);

namespace Bb\Standards\Service;

use Bb\Standards\Utility\TcaUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\DataHandling\SlugHelper;
use TYPO3\CMS\Core\DataHandling\Model\RecordState;
use TYPO3\CMS\Core\Exception\SiteNotFoundException;
use TYPO3\CMS\Core\DataHandling\Model\RecordStateFactory;

/**
 * Class CreateSlug
 */
class SlugMaker
{
    const SLUG_FIELDNAME = 'slug';

    /**
     * @param array $row tx_extension_domain_model_anything.*
     * @param string $tableName tx_extension_domain_model_anything
     * @return void
     * @throws SiteNotFoundException
     */
    public function recreateSlug(array $row, string $tableName): void
    {
        $slugHelper = GeneralUtility::makeInstance(
            SlugHelper::class,
            $tableName,
            self::SLUG_FIELDNAME,
            TcaUtility::getTcaOfField(self::SLUG_FIELDNAME, $tableName)['config']
        );
        $slug = $slugHelper->generate($row, $row['pid']);
        $slugValue = $slugHelper->buildSlugForUniqueInSite($slug, $this->getRecordState($row, $tableName));
        $this->persistSlug($row, $tableName, $slugValue);
    }

    /**
     * @param array $row tx_extension_domain_model_anything.*
     * @param string $tableName tx_extension_domain_model_anything
     * @return RecordState
     */
    protected function getRecordState(array $row, string $tableName): RecordState
    {
        return GeneralUtility::makeInstance(RecordStateFactory::class, $tableName)
            ->fromArray($row);
    }

    /**
     * @param array $row tx_extension_domain_model_anything.*
     * @param string $tableName tx_extension_domain_model_anything
     * @param string $slugValue
     * @return void
     */
    protected function persistSlug(array $row, string $tableName, string $slugValue)
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($tableName);
        $queryBuilder
            ->update($tableName)
            ->where('uid=' . (int)$row['uid'])
            ->set(self::SLUG_FIELDNAME, $slugValue)
            ->execute();
    }
}
