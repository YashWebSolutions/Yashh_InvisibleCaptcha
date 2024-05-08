<?php
/**
 * @author Yashh Team
 * @email yashhcode@gmail.com
 * @package Yashh_InvisibleCaptcha
 */

namespace Yashh\InvisibleCaptcha\Block;

class Captcha extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * Captcha model instance
     *
     * @var \Yashh\InvisibleCaptcha\Model\Captcha
     */
    private $captchaModel;

    /**
     * Captcha constructor.
     *
     * @param \Magento\Framework\View\Element\Template\Context      $context
     * @param \Yashh\InvisibleCaptcha\Model\Captcha                $captchaModel
     * @param array                                                 $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Yashh\InvisibleCaptcha\Model\Captcha $captchaModel,
        array $data = []
    ) {
        $this->captchaModel = $captchaModel;
        parent::__construct($context, $data);
    }

    /**
     * Return Captcha model
     *
     * @return \Yashh\InvisibleCaptcha\Model\Captcha
     */
    public function getCaptcha()
    {
        return $this->captchaModel;
    }

    /**
     * Produce and return block's html output
     *
     * @return string
     */
    public function toHtml()
    {
        if (!$this->getCaptcha()->isEnabled()) {
            return '';
        }
        return parent::toHtml();
    }
}
