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
 * @author camm (camm@flintinteractive.com.au)
 */
class Field extends \Doctrine\Common\Annotations\Annotation
{
    public $type;
    public $name;
    public $options = array();
}
