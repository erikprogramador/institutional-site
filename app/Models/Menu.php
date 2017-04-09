<?php
declare(strict_types=1);

namespace App\Models;

/**
 * @Entity
 * @Table(name="menus")
 */
class Menu
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", length=50)
     */
    protected $title;
    /**
     * @Column(type="string", length=50)
     */
    protected $link;

    /**
     * @Column(name="is_branding", type="boolean")
     */
    protected $isBranding = false;

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of link.
     *
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the value of link.
     *
     * @param mixed $link the link
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Gets the value of isBranding.
     *
     * @return mixed
     */
    public function getIsBranding()
    {
        return $this->isBranding;
    }

    /**
     * Sets the value of isBranding.
     *
     * @param mixed $isBranding the is branding
     *
     * @return self
     */
    public function setIsBranding($isBranding)
    {
        $this->isBranding = $isBranding;

        return $this;
    }
}
