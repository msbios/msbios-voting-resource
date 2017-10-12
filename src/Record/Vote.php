<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Resource\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Vote
 * @package MSBios\Voting\Resource\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="vot_t_votes",
 *     indexes={
 *          @ORM\Index(name="rowstatus", columns={"rowstatus"})}
 *     )
 */
class Vote
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Poll
     *
     * @ORM\ManyToOne(targetEntity="Poll")
     * @ORM\JoinColumn(name="pollid", referencedColumnName="id")
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
