<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting\Resource\Form;

use Zend\Form\Element\Text;
use Zend\Form\Form;

/**
 * Class OptionForm
 * @package MSBios\Voting\Resource\Form
 */
class OptionForm extends Form
{
    public function init()
    {
        $this->add([
            'type' => Text::class,
            'name' => 'name'
        ])->add([
            'type' => Text::class,
            'name' => 'poll'
        ])->add([
            'type' => Text::class,
            'name' => 'ponderability'
        ])->add([
            'type' => Text::class,
            'name' => 'priority'
        ]);
    }
}
