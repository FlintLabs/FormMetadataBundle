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
 * @author camm (camm@flintinteractive.com.au), european(info@nils-werner.com)
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
				$fieldGroup = $reader->getPropertyAnnotation($property, 'FlintLabs\Bundle\FormMetadataBundle\Configuration\FieldGroup');
                if (!empty($fieldGroup) && !empty($field)) {
                    if (empty($field->name)) {
                        $field->name = $property->getName();
                    }
                    $metadata->addGroup($fieldGroup, $field);
                } elseif(!empty($field)) {
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
