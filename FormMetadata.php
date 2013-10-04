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
use FlintLabs\Bundle\FormMetadataBundle\Configuration\Field;
/**
 * The meta data containing the configuration of the form
 * @author camm (camm@flintinteractive.com.au), european(info@nils-werner.com)
 */
class FormMetadata
{
    /**
     * @var array
     */
    protected $fields = array();

    /**
     * @var array
     */
    protected $groups = array();

    /**
     * Add a field configuration
     * @param Mapping\Field $field
     * @return void
     */
    public function addField(Field $field)
    {
        $this->fields[] = $field;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }
	
	/**
     * 
     * @param FieldGroup $fieldGroup
	 * @param Field $field
     */
    public function addGroup(FieldGroup $fieldGroup, Field $field)
    {
        if(!empty($this->groups[$fieldGroup->value])) {
            $this->groups[$fieldGroup->value][] = $field;
        } else {
            $this->groups[$fieldGroup->value][] = $field;
        }
    }

    /**
     * 
     * @return array
     */
    public function getGroups()
    {
        return $this->groups;
    }

}
