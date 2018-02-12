<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Resource\Record;

/**
 * Interface OptionInterface
 * @package MSBios\Voting\Resource\Record
 */
interface OptionInterface
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
     * @return string
     */
    public function getName();

    /**
     * @param $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return int
     */
    public function getPonderability(): int;

    /**
     * @param int $ponderability
     * @return $this
     */
    public function setPonderability(int $ponderability);

    /**
     * @return mixed
     */
    public function getPriority();

    /**
     * @param $priority
     * @return $this
     */
    public function setPriority($priority);

    /**
     * @return VoteInterface
     */
    public function getVote();

    /**
     * @param VoteInterface $vote
     * @return $this
     */
    public function setVote(VoteInterface $vote);
}
