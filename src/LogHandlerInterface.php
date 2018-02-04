<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Log;

use miBadger\Observer\ObserverInterface;

/**
 * The log handler interface.
 *
 * @see http://tools.ietf.org/html/rfc5424
 * @since 1.0.0
 */
interface LogHandlerInterface extends ObserverInterface
{

}
