<?php
namespace Darsh\Expandmode\Model\Config\Source;

class ListMode extends \Magento\Catalog\Model\Config\Source\ListMode
{
    /**
     * {@inheritdoc}
     *
     * @codeCoverageIgnore
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'grid', 'label' => __('Grid Only')],
            ['value' => 'list', 'label' => __('List Only')],
            ['value' => 'grid-list', 'label' => __('Grid (default) / List')],
            ['value' => 'list-grid', 'label' => __('List (default) / Grid')],
            ['value' => 'list-grid-expand', 'label' => __('Expand (default) / List / Grid')]
        ];
    }

}
