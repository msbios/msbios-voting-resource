<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting\Resource\Form;

use Zend\Form\Element\Text;
use Zend\Form\Form;

/**
 * Class PollForm
 * @package MSBios\Voting\Resource\Form
 */
class PollForm extends Form
{
    public function init()
    {
        $this->add([
            'type' => Text::class,
            'name' => 'code'
        ])->add([
            'type' => Text::class,
            'name' => 'subject'
        ]);
    }
}
