<?php
declare(strict_types = 1);
namespace Bb\Standards\Utility;

/**
 * Class TcaUtility
 */
class TcaUtility
{
    /**
     * @param string $fieldName
     * @param string $tableName
     * @return array
     */
    public static function getTcaOfField(string $fieldName, string $tableName): array
    {
        if (empty($GLOBALS['TCA'][$tableName]['columns'][$fieldName])) {
            throw new \LogicException('No TCA to field ' . $fieldName . ' and table ' . $tableName, 1570026984);
        }
        return (array)$GLOBALS['TCA'][$tableName]['columns'][$fieldName];
    }
}