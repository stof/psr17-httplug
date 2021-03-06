<?php

namespace Mjelamanov\Psr17Httplug;

use Http\Message\UriFactory as HttplugUriFactory;
use Http\Message\UriFactory\GuzzleUriFactory;
use Interop\Http\Factory\UriFactoryTestCase;

/**
 * Class UriFactoryTest.
 *
 * @author Mirlan Jelamanov <mirlan.jelamanov@gmail.com>
 */
class UriFactoryTest extends UriFactoryTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function createUriFactory()
    {
        return new UriFactory($this->getHttplugUriFactory());
    }

    /**
     * @return \Http\Message\UriFactory
     */
    protected function getHttplugUriFactory(): HttplugUriFactory
    {
        return new GuzzleUriFactory();
    }
}
