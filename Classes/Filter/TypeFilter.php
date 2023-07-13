<?php

namespace Bb\Standards\Filter;

class TypeFilter
{
    /**
     * @param $params
     * @return void
     */
    public function itemsProcFunc(&$params): void
    {
        $newItems = [];
        if(!empty($params['config']['itemsProcFuncParams']) && is_array($params['config']['itemsProcFuncParams'])) {
            foreach ($params['items'] as $item) {
                if (in_array($item->getValue(), $params['config']['itemsProcFuncParams'], true)) {
                    $newItems[] = ['label' => $item->getLabel(), 'value' => $item->getValue(), 'icon' => $item->getIcon(), 'group' => 'default'];
                }
            }
            $params['items'] = $newItems;
        }
    }
}
