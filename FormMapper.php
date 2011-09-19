<?php
/*
 * This file is part of the Form Metadata library
 *
 * (c) Cameron Manderson <camm@flintinteractive.com.au>
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace FlintLabs\Bundle\FormMetadataBundle;

use Symfony\Component\Form\FormFactory;
/**
 * Obtains any metadata from the entity and adds it's configuration
 * to the form
 * @author camm (camm@flintinteractive.com.au)
 */
class FormMapper
{
    /**
     * Readers that will be used to obtaining metadata
     * @var array
     */
    private $readers = array();

    /**
     * @var \Symfony\Component\Form\FormFactory
     */
    protected $factory;

    /**
     * @param \Symfony\Component\Form\FormFactory $factory
     */
    public function __construct(FormFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * Obtains any form metadata from the entity and adds itself to the form
     * @param $entity
     * @param $form
     * @return
     */
    public function createFormBuilder($entity, $data = null, array $options = array())
    {
        // Build the $form
        $formBuilder = $this->factory->createBuilder('form', $data, $options);
        
        // Read the entity meta data and add to the form
        if(empty($this->readers)) return;

        // Look to the readers to find metadata
        foreach ($this->readers as $reader) {
            $metadata = $reader->getMetadata($entity);
            if(!empty($metadata)) break;
        }

        // Configure the form
        $fields = $metadata->getFields();
        foreach($fields as $field) {
            $formBuilder->add($field->name, $field->type);
        }

        return $formBuilder;
    }

    /**
     * Add an entity metadata reader to the readers
     * @param EntityMetadataReaderInterface $reader
     * @return void
     */
    public function addReader(EntityMetadataReaderInterface $reader)
    {
        $this->readers[] = $reader;
    }
}
