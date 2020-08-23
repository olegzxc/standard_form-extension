<?php namespace Anomaly\StandardFormExtension\Handler;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class StandardFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\StandardFormExtension\Handler
 */
class StandardFormBuilder extends FormBuilder
{

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [
        'breadcrumb' => false,
    ];

}
