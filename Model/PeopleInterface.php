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
interface PeopleInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Set people
     *
     * @param string $people
     */
    public function setPeople($people);

    /**
     * Get people
     *
     * @return string
     */
    public function getPeople();

    /**
     * Set creation
     *
     * @param datetime $creation
     */
    public function setCreation($creation);

    /**
     * Get creation
     *
     * @return datetime
     */
    public function getCreation();
}
