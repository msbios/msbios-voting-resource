<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Resource\Record;

/**
 * Interface VoteInterface
 * @package MSBios\Voting\Resource\Record
 */
interface VoteInterface
{
    /**
     * @return PollInterface
     */
    public function getPoll();

    /**
     * @param PollInterface $poll
     * @return $this
     */
    public function setPoll(PollInterface $poll);

    /**
     * @return OptionInterface
     */
    public function getOption();

    /**
     * @param OptionInterface $option
     * @return $this
     */
    public function setOption(OptionInterface $option);
}
