<?php
/**
 * @author Yashh Team
 * @copyright Copyright (c) 2018 Yashh yashhcode@gmail.com
 * @package Yashh_InvisibleCaptcha
 */


namespace Yashh\InvisibleCaptcha\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class BadgePosition implements OptionSourceInterface
{
    const BADGE_POSITION_BOTTOMRIGHT = 'bottomright';
    const BADGE_POSITION_BOTTOMLEFT = 'bottomleft';

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::BADGE_POSITION_BOTTOMRIGHT, 'label'=> __('Bottom Right')],
            ['value' => self::BADGE_POSITION_BOTTOMLEFT, 'label'=> __('Bottom Left')]
        ];
    }
}
