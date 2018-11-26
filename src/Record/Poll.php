<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Resource\Record;

/**
 * Class Poll
 * @package MSBios\Voting\Resource\Record
 */
class Poll
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string SUM(Vote::$total)|SUM(Option::$total)
     */
    private $total = 0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdat", type="datetime")
     */
    private $createdAt = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifiedat", type="datetime")
     */
    private $modifiedAt = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rowstatus", type="boolean")
     */
    private $rowstatus = true;
}
