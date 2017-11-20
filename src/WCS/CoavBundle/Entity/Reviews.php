<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reviews
 *
 * @ORM\Table(name="reviews")
 * @ORM\Entity(repositoryClass="WCS\CoavBundle\Repository\ReviewsRepository")
 */

class Reviews
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @ORM\ManytoOne(targetEntity="WCS\CoavBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userRated;

    /**
     * @ORM\ManytoOne(targetEntity="WCS\CoavBundle\Entity\User", inversedBy="reviewAuthors")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reviewAuthor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationDate", type="datetime")
     */
    private $publicationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="smallint")
     */
    private $note;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Reviews
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set userRated
     *
     * @param integer $userRated
     *
     * @return Reviews
     */
    public function setUserRated($userRated)
    {
        $this->userRated = $userRated;

        return $this;
    }

    /**
     * Get userRated
     *
     * @return int
     */
    public function getUserRated()
    {
        return $this->userRated;
    }

    /**
     * Set reviewAuthor
     *
     * @param integer $reviewAuthor
     *
     * @return Reviews
     */
    public function setReviewAuthor($reviewAuthor)
    {
        $this->reviewAuthor = $reviewAuthor;

        return $this;
    }

    /**
     * Get reviewAuthor
     *
     * @return int
     */
    public function getReviewAuthor()
    {
        return $this->reviewAuthor;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Reviews
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Reviews
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }
}
