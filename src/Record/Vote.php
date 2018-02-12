<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Resource\Record;

/**
 * Class Vote
 * @package MSBios\Voting\Resource\Record
 */
class Vote
{
    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var Poll
     *
     */
    private $poll;

    /**
     * @var Option
     *
     * @ORM\ManyToOne(targetEntity="Option")
     * @ORM\JoinColumn(name="optionid", referencedColumnName="id")
     */
    private $option;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", length=255)
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
     * @var int
     *
     * @ORM\Column(name="rowstatus", type="boolean")
     */
    private $rowstatus = true;
}
