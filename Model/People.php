<?php

/*
 * This file is part of the People component.
 *
 * (c) Julien Devergnies
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EncreInformatique\Component\People\Model;

/**
 * @author Julien Devergnies <j.devergnies@outlook.com>
 */
class People
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var datetime $creation
     */
    protected $creation;

    public function __construct()
    {
        $this->creation = new \DateTime('now');
    }

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
     * Set creation
     *
     * @param datetime $creation
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
    }

    /**
     * Get creation
     *
     * @return datetime
     */
    public function getCreation()
    {
        return $this->creation;
    }
}
