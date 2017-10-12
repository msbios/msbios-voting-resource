<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting\Resource;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'form_elements' => [
        'factories' => [
            // Forms
            Form\PollForm::class => InvokableFactory::class,
            Form\OptionForm::class => InvokableFactory::class,
        ]
    ],
];
