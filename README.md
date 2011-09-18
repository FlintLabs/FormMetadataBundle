# Form Metadata reader for Symfony2 *Experimental!*

Facilitates the configuration of form fields from metadata that is defined elsewhere, such as through annotations
in the entity.

## Example

### Simple Entity

    use FlintLabs\Component\FormMetadata\Mapping as Form;
    use Symfony\Component\Validator\Constraints as Assert;

    class Contact
    {
        /**
         * @Form\Field(type='text')
         * @Assert\NotBlank()
         */
        public $name;

        /**
         * @Form\Field(type='textarea')
         */
        public $message;
    }

### Updated controller

    class MyController
    {
        public function contactAction()
        {
            $contact = new Contact();
            $form = $this->get('form_metadata.mapper')->createFormBuilder($contact);

            if ($request->getMethod() == 'POST') {
                $form->bindRequest($request);

                if ($form->isValid()) {
                    // perform some action, such as saving the task to the database
                    return $this->redirect($this->generateUrl('task_success'));
                }
            }
        }
    }