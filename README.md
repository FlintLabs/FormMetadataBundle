# Form Metadata reader for Symfony2

Facilitates the basic configuration of form fields from metadata that is defined elsewhere, such as through annotations
in the entity or with an external yaml file (TODO). Allows for more generic handling of form types through controllers,
making them able to deal with dynamic entity/forms (such as for use with CMS sites).

See the [annotations reference](https://github.com/FlintLabs/FormMetadataBundle/blob/master/Resources/docs/annotations.md)

Note: People may want to consider the use of Symfony2 Abstract Forms to configure their forms external to the controller
as a best practice.

## Annotations Example

**Standard form builder**

    ->add('dueDate', 'date', array('widget' => 'single_text'))

**Using annotations in your entity**

    /**
     * @Form\Field(type="date", widget="single_text")
     */

### Entity with some basic form annotations

    use FlintLabs\Bundle\FormMetadataBundle\Configuration as Form;
    use Symfony\Bundle\Validator\Constraints as Assert;

    class Contact
    {
        /**
         * @Form\Field("text")
         * @Assert\NotBlank()
         */
        public $name;

        /**
         * @Form\Field("textarea")
         */
        public $message;
    }

### Simple controller

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
