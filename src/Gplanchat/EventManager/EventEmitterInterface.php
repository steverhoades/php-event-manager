<?php
/**
 * This file is part of php-event-manager.
 *
 * php-event-manager is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * php-event-manager is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU Lesser General Public License
 * along with php-event-manager.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author  Grégory PLANCHAT<g.planchat@gmail.com>
 * @licence GNU Lesser General Public Licence (http://www.gnu.org/licenses/lgpl-3.0.txt)
 */

namespace Gplanchat\EventManager;

/**
 *
 */
interface EventEmitterInterface
{
    const DEFAULT_PRIORITY = 1;

    /**
     * @abstract
     * @param string|array $eventName
     * @param callable $listener
     * @return CallbackHandler
     */
    public function on($eventName, callable $listener);

    /**
     * @abstract
     * @param string|array $eventName
     * @param callable $listener
     * @return CallbackHandler
     */
    public function once($eventName, callable $listener);

    /**
     * @abstract
     * @param string|array $eventName
     * @param callable $listener
     * @return EventEmitterInterface
     */
    public function removeListener($eventName, callable $callback);

    /**
     * @abstract
     * @param string|array $eventName
     * @return EventEmitterInterface
     */
    public function removeAllListeners($eventName);

    /**
     * @abstract
     * @param string|array $eventName
     * @return array
     */
    public function getListeners($eventName);

    /**
     * @abstract
     * @param EventInterface $event
     * @param array $params
     * @return EventEmitterInterface
     */
    public function emit(EventInterface $event, Array $params = []);
}