<?php
/*
 * Copyright Cameron Manderson (c) 2011 All rights reserved.
 * Date: 21/09/11
 */
namespace FlintLabs\Bundle\FormMetadataBundle\Configuration;
use \Doctrine\Common\Annotations\Annotation;
/**
 * e.g. @Form\FieldGroup('example')
 * @author camm (camm@flintinteractive.com.au), european(info@nils-werner.com)
 * @Annotation
 */
class FieldGroup extends Annotation
{
    /**
     * @var
     */
    public $value;
}
