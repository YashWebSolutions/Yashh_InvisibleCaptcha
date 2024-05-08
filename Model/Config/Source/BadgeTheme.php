<?php
/**
 * @author Yashh Team
 * @copyright Copyright (c) 2018 Yashh yashhcode@gmail.com
 * @package Yashh_InvisibleCaptcha
 */


namespace Yashh\InvisibleCaptcha\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class BadgeTheme implements OptionSourceInterface
{
    const BADGE_THEME_LIGHT = 'light';
    const BADGE_THEME_DARK = 'dark';

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::BADGE_THEME_LIGHT, 'label'=> __('Light')],
            ['value' => self::BADGE_THEME_DARK, 'label'=> __('Dark')]
        ];
    }
}
