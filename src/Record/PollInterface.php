<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Resource\Record;

/**
 * Interface PollInterface
 * @package MSBios\Voting\Resource\Record
 */
interface PollInterface
{
    /**
     * @return string
     */
    public function getCode();

    /**
     * @param $code
     * @return $this
     */
    public function setCode($code);
}
