<?php
/*
 * This file is part of the Form Metadata library
 *
 * (c) Cameron Manderson <camm@flintinteractive.com.au>
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace FlintLabs\Bundle\FormMetadataBundle\Driver;
use \FlintLabs\Bundle\FormMetadataBundle\FormMetadata;
/**
 *
 * @author camm (camm@flintinteractive.com.au)
 */
class AnnotationsDriver implements MetadataDriverInterface
{
    /**
     * Read the entity and create an associated metadata
     * @param $entity
     * @return null|FormMetadata
     */
    public function getMetadata($entity)
    {
        $metadata = new FormMetadata();

        $reader = new \Doctrine\Common\Annotations\AnnotationReader();

        $reflectionClass = new \ReflectionClass(get_class($entity));

        while (is_object($reflectionClass)) {
            $properties = $reflectionClass->getProperties();
            foreach($properties as $property) {
                $field = $reader->getPropertyAnnotation($property, 'FlintLabs\Bundle\FormMetadataBundle\Configuration\Field');
                if(!empty($field)) {
                    if(empty($field->name)) {
                        $field->name = $property->getName();
                    }
                    $metadata->addField($field);
                }
            }
            $reflectionClass = $reflectionClass->getParentClass();
        }

        return $metadata;
    }
}
