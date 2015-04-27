<?php

namespace CT\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Community
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="CT\ApplicationBundle\Entity\CommunityRepository")
*/
class Community
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
  * @ORM\ManyToOne(targetEntity="CT\UserBundle\Entity\User", inversedBy="communities")
  */
  private $admin;

  /**
  * @ORM\OneToMany(targetEntity="CT\ApplicationBundle\Entity\Post", mappedBy="community", cascade={"persist", "remove"})
  */
  private $posts; // Notez le « s », une annonce est liée à plusieurs candidatures

  /**
  *@ORM\OneToOne(targetEntity="CT\UserBundle\Entity\Image",cascade={"persist","remove"})
  */
  private $image;



  /**
  * @ORM\ManyToMany(targetEntity="CT\UserBundle\Entity\User", cascade={"persist"},inversedBy="followCommunities")
  */
  private $subscribers;

  /**
  * @var boolean
  *
  * @ORM\Column(name="private", type="boolean")
  */
  private $private;

  /**
  * @var string
  *
  * @ORM\Column(name="title", type="string" , length=255)
  */
  private $title;

  /**
  * @ORM\ManyToMany(targetEntity="CT\UserBundle\Entity\User", inversedBy="invitFile")
  * @ORM\JoinTable(name="users_groups")
  */
  private $invitUser;



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
  * Set adminId
  *
  * @param integer $adminId
  * @return Community
  */
  public function setAdminId($adminId)
  {
    $this->adminId = $adminId;

    return $this;
  }

  /**
  * Get adminId
  *
  * @return integer
  */
  public function getAdminId()
  {
    return $this->adminId;
  }

  /**
  * Set private
  *
  * @param boolean $private
  * @return Community
  */
  public function setPrivate($private)
  {
    $this->private = $private;

    return $this;
  }

  /**
  * Get private
  *
  * @return boolean
  */
  public function getPrivate()
  {
    return $this->private;
  }

  /**
  * Set admin
  *
  * @param \CT\UserBundle\Entity\User $admin
  * @return Community
  */
  public function setAdmin(\CT\UserBundle\Entity\User $admin = null)
  {
    $this->admin = $admin;

    return $this;
  }

  /**
  * Get admin
  *
  * @return \CT\UserBundle\Entity\User
  */
  public function getAdmin()
  {
    return $this->admin;
  }
  /**
  * Constructor
  */
  public function __construct()
  {
    $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
  }

  /**
  * Add posts
  *
  * @param \CT\ApplicationBundle\Entity\Post $posts
  * @return Community
  */
  public function addPost(\CT\ApplicationBundle\Entity\Post $posts)
  {
    $this->posts[] = $posts;

    return $this;
  }

  /**
  * Remove posts
  *
  * @param \CT\ApplicationBundle\Entity\Post $posts
  */
  public function removePost(\CT\ApplicationBundle\Entity\Post $posts)
  {
    $this->posts->removeElement($posts);
  }

  /**
  * Get posts
  *
  * @return \Doctrine\Common\Collections\Collection
  */
  public function getPosts()
  {
    return $this->posts;
  }

  /**
  * Set image
  *
  * @param \CT\UserBundle\Entity\Image $image
  * @return Community
  */
  public function setImage(\CT\UserBundle\Entity\Image $image = null)
  {
    $this->image = $image;

    return $this;
  }

  /**
  * Get image
  *
  * @return \CT\UserBundle\Entity\Image
  */
  public function getImage()
  {
    return $this->image;
  }

  /**
  * Set title
  *
  * @param string $title
  * @return Community
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
     * Add subscribers
     *
     * @param \CT\UserBundle\Entity\User $subscribers
     * @return Community
     */
    public function addSubscriber(\CT\UserBundle\Entity\User $subscribers)
    {
        $this->subscribers[] = $subscribers;

        return $this;
    }

    /**
     * Remove subscribers
     *
     * @param \CT\UserBundle\Entity\User $subscribers
     */
    public function removeSubscriber(\CT\UserBundle\Entity\User $subscribers)
    {
        $this->subscribers->removeElement($subscribers);
    }

    /**
     * Get subscribers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }

    /**
     * Set invitUser
     *
     * @param \CT\UserBundle\Entity\User $invitUser
     * @return Community
     */
    public function setInvitUser(\CT\UserBundle\Entity\User $invitUser = null)
    {
        $this->invitUser = $invitUser;

        return $this;
    }

    /**
     * Get invitUser
     *
     * @return \CT\UserBundle\Entity\User
     */
    public function getInvitUser()
    {
        return $this->invitUser;
    }

    /**
     * Add invitUser
     *
     * @param \CT\UserBundle\Entity\User $invitUser
     * @return Community
     */
    public function addInvitUser(\CT\UserBundle\Entity\User $invitUser)
    {
        $this->invitUser[] = $invitUser;

        return $this;
    }

    /**
     * Remove invitUser
     *
     * @param \CT\UserBundle\Entity\User $invitUser
     */
    public function removeInvitUser(\CT\UserBundle\Entity\User $invitUser)
    {
        $this->invitUser->removeElement($invitUser);
    }
}
