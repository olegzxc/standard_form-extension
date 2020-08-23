<?php namespace Anomaly\StandardFormExtension;

use Anomaly\FormsModule\Form\Contract\FormInterface;
use Anomaly\FormsModule\Form\Handler\Contract\FormHandlerExtensionInterface;
use Anomaly\StandardFormExtension\Handler\Command\GetStandardFormBuilder;
use Anomaly\Streams\Platform\Addon\Extension\Extension;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class StandardFormExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\StandardFormExtension
 */
class StandardFormExtension extends Extension implements FormHandlerExtensionInterface
{

    /**
     * This extension provides the standard
     * form handler for the Forms module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.forms::form_handler.standard';

    /**
     * Return the form's builder instance.
     *
     * @param FormInterface $form
     * @return FormBuilder
     */
    public function builder(FormInterface $form)
    {
        return $this->dispatch(new GetStandardFormBuilder($form));
    }

    /**
     * Integrate the form handler's services
     * with the primary form's builder instance.
     *
     * @param FormBuilder $builder
     */
    public function integrate(FormBuilder $builder)
    {
        return $builder;
    }
}
