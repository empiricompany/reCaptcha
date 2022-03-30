<?php

/**
 * Captcha image type models
 *
 * @category   ProxiBlue
 * @package    ProxiBlue_reCaptcha
 * @author     Lucas van Staden (sales@proxiblue.com.au)
 */
class ProxiBlue_ReCaptcha_Model_Config_Type
{

    private $type = array(
        array('value' => 'zend', 'label' => 'Zend Default'),
        array('value' => 'recaptcha', 'label' => 'Google ReCaptcha')
    );


    public function toOptionArray()
    {
        return $this->type;
    }
}
