<?php

namespace cmsadmin\base;

use Exception;

class BlockVar extends \cmsadmin\base\BlockConfigElement
{
    public function toArray()
    {
        return [
            'var' => $this->item['var'],
            'label' => $this->item['label'],
            'type' => $this->item['type'],
            'placeholder' => $this->get('placeholder'),
            'options' => $this->get('options'),
            'initvalue' => $this->get('initvalue'),
        ];
    }    
}