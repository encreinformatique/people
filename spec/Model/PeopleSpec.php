<?php

/*
 * This file is part of the People component.
 *
 * (c) Julien Devergnies
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\EncreInformatique\Component\People\Model;

use PhpSpec\ObjectBehavior;
use Sylius\Component\People\Model\People;
use Sylius\Component\People\Model\PeopleInterface;

/**
 * @author Julien Devergnies <j.devergnies@outlook.com>
 */
final class PeopleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(People::class);
    }

    function it_implements_customer_interface()
    {
        $this->shouldImplement(PeopleInterface::class);
    }

    function it_sets_people()
    {
        $this->setPeople('people.com');

        $this->getPeople()->shouldReturn('people.com');
    }
}
