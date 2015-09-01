<?php

/*
 * This file is part of the RzSearchBundle package.
 *
 * (c) mell m. zamora <mell@rzproject.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rz\SearchBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;

interface SearchIndexListenerInterface
{
    public function postPersist(LifecycleEventArgs $args);

    public function postUpdate(LifecycleEventArgs $args);
}
