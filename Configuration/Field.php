<?php
/*
 * This file is part of the Form Metadata library
 *
 * (c) Cameron Manderson <camm@flintinteractive.com.au>
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace FlintLabs\Bundle\FormMetadataBundle\Configuration;

/**
 * Contains the configuration elements for the field
 *
 * e.g. @Form\Field("text", foo="bar")
 *
 * @author camm (camm@flintinteractive.com.au)
 */
class Field extends \Doctrine\Common\Annotations\Annotation
{

    /**
     * Default for when a type is not specified
     * @var string
     */
    public $value;

    /**
     * The type of form type to add
     * @var string
     */
    public $type;

    /**
     * The parameter name
     * @var string
     */
    public $name;

    /**
     * The options to pass through
     * @var array
     */
    public $options = array();

    /**
     * Magic method for passing options through the annotation that are undefined
     * @param $name
     * @param $value
     * @return void
     */
    public function __set($name, $value)
    {
        $this->options[$name] = $value;
    }
}
