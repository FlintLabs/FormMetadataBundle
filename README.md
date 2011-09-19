# Form Metadata reader for Symfony2 *Warning! Very experimental!*

Facilitates the configuration of form fields from metadata that is defined elsewhere, such as through annotations
in the entity or with an external yaml file.

## Example

### Simple Entity

    use FlintLabs\Bundle\FormMetadata\Configuration as Form;
    use Symfony\Bundle\Validator\Constraints as Assert;

    class Contact
    {
        /**
         * @Form\Field(type='text', min_length='3')
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
            $form = $this->get('form_metadata.mapper')->createFormBuilder($contact)->getForm();

            if ($request->getMethod() == 'POST') {
                $form->bindRequest($request);

                if ($form->isValid()) {
                    // perform some action, such as saving the task to the database
                    return $this->redirect($this->generateUrl('task_success'));
                }
            }
        }
    }

## Installation

### Update your deps file

    [Form-Metadata]
        git=git@github.com:FlintLabs/Form-Metadata.git
        target=/bundles/FlintLabs/Bundle/FormMetadataBundle

### Update your vendors

    php bin/vendors update

### Update your autoloader

    // app/autoload.php
    $loader->registerNamespaces(array(
        // ...
        'FlintLabs\\Bundle\\FormMetadataBundle' => __DIR__.'/../vendor/bundles/',
        // ...
    ));

### Register the bundle references

    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new FlintLabs\Bundle\FormMetadataBundle\FlintLabsFormMetadataBundle(),
            // ...
        );
    }