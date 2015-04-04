<?php

namespace CT\VideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Ijanki\Bundle\FtpBundle\Exception\FtpException;


/**
* Video
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="CT\VideoBundle\Entity\VideoRepository")
* @ORM\HasLifecycleCallbacks
*/
class Video
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
  * @ORM\ManyToOne(targetEntity="CT\UserBundle\Entity\User", inversedBy="videos")
  */
  private $user;


  /**
  * @var string
  *
  * @ORM\Column(name="video_name", type="string", length=255)
  */
  private $videoName;

  /**
  * @var string
  *
  * @ORM\Column(name="video_ext", type="string", length=255)
  */
  private $videoExt;

  /**
  * @var string
  *
  * @ORM\Column(name="video_path", type="string", length=255)
  */
  private $videoPath;

  /**
  * @var integer
  *
  * @ORM\Column(name="video_idbm", type="string", length=255)
  */
  private $videoIdbm;

  /**
  * @Assert\File(maxSize="6000000000000")
  */
  private $video;

  private $tempVideoname;

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
  * Set videoName
  *
  * @param string $videoName
  * @return Video
  */
  public function setVideoName($videoName)
  {
    $this->videoName = $videoName;

    return $this;
  }

  /**
  * Get videoName
  *
  * @return string
  */
  public function getVideoName()
  {
    return $this->videoName;
  }

  /**
  * Set videoExt
  *
  * @param string $videoExt
  * @return Video
  */
  public function setVideoExt($videoExt)
  {
    $this->videoExt = $videoExt;

    return $this;
  }

  /**
  * Get videoExt
  *
  * @return string
  */
  public function getVideoExt()
  {
    return $this->videoExt;
  }

  /**
  * Set videoPath
  *
  * @param string $videoPath
  * @return Video
  */
  public function setVideoPath($videoPath)
  {
    $this->videoPath = $videoPath;

    return $this;
  }

  /**
  * Get videoPath
  *
  * @return string
  */
  public function getVideoPath()
  {
    return $this->videoPath;
  }

  public function setVideo(UploadedFile $video=null)
  {
    $this->video = $video;
    if(null !== $this->videoName)
    {
      $this->tempVideoname = $this->video_name;

      $this->videoName = null;
      $this->videoPath = null;
      $this->videoExt = null;
    }

  }

  public function getVideo()
  {
    return $this->video;
  }
  /**
  * @ORM\PrePersist()
  * @ORM\PreUpdate()
  */
  public function preUpload()
  {
    if (null === $this->video || $this->videoIdbm === null) {
      return;
    }
    $this->videoExt = $this->video->guessExtension();
    $this->videoName = $this->video->getClientOriginalName();
    $this->videoPath = $this->getUploadRootDir();

    global $kernel;

    if ('AppCache' == get_class($kernel)) {
      $kernel = $kernel->getKernel();
    }


    try {
      $ftp = $kernel->getContainer()->get('ijanki_ftp');
      $ftp->connect("127.0.0.1");
      $ftp->login("thecoon", "yodalapute123");
      $ftp->put("/var/www/html/Symfony/web/video/",$this->videoPath.$this->videoName.$this->videoExt, FTP_BINARY);

    } catch (FtpException $e) {
      echo 'Error: ', $e->getMessage();
    }


  }
  /**
  * @ORM\PostPersist()
  * @ORM\PostUpdate()
  */
  public function upload()
  {
    if (null === $this->video) {
      return;
    }

    if (null !== $this->tempVideoname) {
      $oldVideo = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempVideoname;
      if(file_exists($oldVideo))
      {
        unlink($oldfile);
      }
    }

    $this->video->move(
    $this->getUploadRootDir(),
    $this->id.'.'.$this->videoExt
  );

  $name = $this->video->getClientOriginalName();
  $this->videoName = $name;
}

/**
* @ORM\PreRemove()
*/
public function preRemoveUpload()
{
  $this->tempVideoname = $this->getUploadRootDir().'/'.$this->id.'.'.$this->videoExt;
}


/**
* @ORM\PostRemove()
*/
public function removeUpload()
{
  if (file_exists($this->tempVideoname)) {
    unlink($this->tempVideoname);
  }
}

public function getUploadDir()
{
  return 'video/';
}

public function getUploadRootDir()
{
  return __DIR__.'/../../../../web/'.$this->getUploadDir();
}

/**
* Set videoIdbm
*
* @param integer $videoIdbm
* @return Video
*/
public function setVideoIdbm($videoIdbm)
{
  $this->videoIdbm = $videoIdbm;

  return $this;
}

/**
* Get videoIdbm
*
* @return integer
*/
public function getVideoIdbm()
{
  return $this->videoIdbm;
}

    /**
     * Set user
     *
     * @param \CT\UserBundle\Entity\User $user
     * @return Video
     */
    public function setUser(\CT\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CT\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
