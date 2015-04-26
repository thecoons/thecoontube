<?php

namespace CT\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
* User
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="CT\UserBundle\Entity\UserRepository")
* @ExclusionPolicy("all")
*/
class User extends BaseUser
{
  /**
  * @var integer
  *
  * @ORM\Column(name="id", type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;

  /**
  * @ORM\OneToMany(targetEntity="CT\VideoBundle\Entity\Video", mappedBy="user",cascade={"persist", "remove"})
  */
  private $videos; // Notez le « s », une annonce est liée à plusieurs candidatures

  /**
  * @ORM\OneToMany(targetEntity="CT\ApplicationBundle\Entity\Community", mappedBy="admin", cascade={"persist", "remove"})
  */
  private $communities; // Notez le « s », une annonce est liée à plusieurs candidatures

  /**
   * @ORM\ManyToMany(targetEntity="CT\ApplicationBundle\Entity\Community", mappedBy="subscribers")
   */
  private $followCommunities;

  /**
  * @ORM\ManyToMany(targetEntity="CT\UserBundle\Entity\User", mappedBy="myFriends")
  * @Expose
  * @Groups({"Me"})
  **/
  private $friendsWithMe;

  /**
  * @ORM\ManyToMany(targetEntity="CT\UserBundle\Entity\User", inversedBy="friendsWithMe")
  * @ORM\JoinTable(name="friends",
  *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
  *      inverseJoinColumns={@ORM\JoinColumn(name="friend_user_id", referencedColumnName="id")}
  *      )
  **/
  private $myFriends;

  /**
  *@ORM\OneToOne(targetEntity="CT\UserBundle\Entity\Image",cascade={"persist","remove"})
  *@Assert\NotBlank(message="Choisir une photo:", groups={"Registration", "Profile"})
  *@Assert\Valid()
  */
  private $image;

  public function __construct() {
    parent::__construct();
    $this->friendsWithMe = new \Doctrine\Common\Collections\ArrayCollection();
    $this->myFriends = new \Doctrine\Common\Collections\ArrayCollection();
  }


  /**
  * Get id
  *
  * @return integer
  *
  */
  public function getId()
  {
    return $this->id;
  }

  /**
  * Add friendsWithMe
  *
  * @param \CT\UserBundle\Entity\User $friendsWithMe
  * @return User
  */
  public function addFriendsWithMe(\CT\UserBundle\Entity\User $friendsWithMe)
  {
    $this->friendsWithMe[] = $friendsWithMe;

    return $this;
  }

  /**
  * Remove friendsWithMe
  *
  * @param \CT\UserBundle\Entity\User $friendsWithMe
  */
  public function removeFriendsWithMe(\CT\UserBundle\Entity\User $friendsWithMe)
  {
    $this->friendsWithMe->removeElement($friendsWithMe);
  }

  /**
  * Get friendsWithMe
  *
  * @return \Doctrine\Common\Collections\Collection
  */
  public function getFriendsWithMe()
  {
    return $this->friendsWithMe;
  }

  /**
  * Add myFriends
  *
  * @param \CT\UserBundle\Entity\User $myFriends
  * @return User
  */
  public function addMyFriend(\CT\UserBundle\Entity\User $myFriends)
  {
    $this->myFriends[] = $myFriends;

    return $this;
  }

  /**
  * Remove myFriends
  *
  * @param \CT\UserBundle\Entity\User $myFriends
  */
  public function removeMyFriend(\CT\UserBundle\Entity\User $myFriends)
  {
    $this->myFriends->removeElement($myFriends);
  }

  /**
  * Get myFriends
  *
  * @return \Doctrine\Common\Collections\Collection
  */
  public function getMyFriends()
  {
    return $this->myFriends;
  }

    /**
     * Add id_videos
     *
     * @param \CT\VideoBundle\Entity\Video $idVideos
     * @return User
     */
    public function addIdVideo(\CT\VideoBundle\Entity\Video $idVideos)
    {
        $this->id_videos[] = $idVideos;

        return $this;
    }

    /**
     * Remove id_videos
     *
     * @param \CT\VideoBundle\Entity\Video $idVideos
     */
    public function removeIdVideo(\CT\VideoBundle\Entity\Video $idVideos)
    {
        $this->id_videos->removeElement($idVideos);
    }

    /**
     * Get id_videos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdVideos()
    {
        return $this->id_videos;
    }

    /**
     * Add videos
     *
     * @param \CT\VideoBundle\Entity\Video $videos
     * @return User
     */
    public function addVideo(\CT\VideoBundle\Entity\Video $videos)
    {
        $this->videos[] = $videos;

        return $this;
    }

    /**
     * Remove videos
     *
     * @param \CT\VideoBundle\Entity\Video $videos
     */
    public function removeVideo(\CT\VideoBundle\Entity\Video $videos)
    {
        $this->videos->removeElement($videos);
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Set image
     *
     * @param \CT\UserBundle\Entity\Image $image
     * @return User
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
     * Add communities
     *
     * @param \CT\ApplicationBundle\Entity\Community $communities
     * @return User
     */
    public function addCommunity(\CT\ApplicationBundle\Entity\Community $communities)
    {
        $this->communities[] = $communities;

        return $this;
    }

    /**
     * Remove communities
     *
     * @param \CT\ApplicationBundle\Entity\Community $communities
     */
    public function removeCommunity(\CT\ApplicationBundle\Entity\Community $communities)
    {
        $this->communities->removeElement($communities);
    }

    /**
     * Get communities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommunities()
    {
        return $this->communities;
    }

    /**
     * Add followCommunities
     *
     * @param \CT\ApplicationBundle\Entity\Community $followCommunities
     * @return User
     */
    public function addFollowCommunity(\CT\ApplicationBundle\Entity\Community $followCommunities)
    {
        $this->followCommunities[] = $followCommunities;

        return $this;
    }

    /**
     * Remove followCommunities
     *
     * @param \CT\ApplicationBundle\Entity\Community $followCommunities
     */
    public function removeFollowCommunity(\CT\ApplicationBundle\Entity\Community $followCommunities)
    {
        $this->followCommunities->removeElement($followCommunities);
    }

    /**
     * Get followCommunities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFollowCommunities()
    {
        return $this->followCommunities;
    }
}
