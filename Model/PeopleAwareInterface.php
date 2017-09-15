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
interface PeopleAwareInterface
{
    /**
     * @return PeopleInterface
     */
    public function getPeople();

    /**
     * @param PeopleInterface $customer
     */
    public function setPeople(PeopleInterface $people = null);
}
