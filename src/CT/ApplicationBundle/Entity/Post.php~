<?php

namespace CT\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CT\ApplicationBundle\Entity\PostRepository")
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\ManyToOne(targetEntity="CT\ApplicationBundle\Entity\Community", inversedBy="posts")
    */
    private $community;

    /**
    * @ORM\OneToMany(targetEntity="CT\ApplicationBundle\Entity\Comment", mappedBy="post", cascade={"persist", "remove"})
    */
    private $comments; // Notez le « s », une annonce est liée à plusieurs candidatures

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
    * @ORM\ManyToOne(targetEntity="CT\VideoBundle\Entity\Video")
    */
    private $video;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Post
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set community
     *
     * @param \CT\ApplicationBundle\Entity\Community $community
     * @return Post
     */
    public function setCommunity(\CT\ApplicationBundle\Entity\Community $community = null)
    {
        $this->community = $community;

        return $this;
    }

    /**
     * Get community
     *
     * @return \CT\ApplicationBundle\Entity\Community
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * Add comments
     *
     * @param \CT\ApplicationBundle\Entity\Comment $comments
     * @return Post
     */
    public function addComment(\CT\ApplicationBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \CT\ApplicationBundle\Entity\Comment $comments
     */
    public function removeComment(\CT\ApplicationBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set video
     *
     * @param \CT\VideoBundle\Entity\Video $video
     * @return Post
     */
    public function setVideo(\CT\VideoBundle\Entity\Video $video = null)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \CT\VideoBundle\Entity\Video
     */
    public function getVideo()
    {
        return $this->video;
    }
}
