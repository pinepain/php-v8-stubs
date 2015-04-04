<?php

/*
  +----------------------------------------------------------------------+
  | This file is part of the pinepain/php-v8 PHP extension.              |
  |                                                                      |
  | Copyright (c) 2015-2016 Bogdan Padalko <pinepain@gmail.com>          |
  |                                                                      |
  | Licensed under the MIT license: http://opensource.org/licenses/MIT   |
  |                                                                      |
  | For the full copyright and license information, please view the      |
  | LICENSE file that was distributed with this source or visit          |
  | http://opensource.org/licenses/MIT                                   |
  +----------------------------------------------------------------------+
*/


namespace v8;


class IndexedPropertyHandlerConfiguration
{
    /**
     * @param callable $getter
     * @param callable $setter
     * @param callable $query
     * @param callable $deleter
     * @param callable $enumerator
     * @param int $flags One of \v8\PropertyHandlerFlags constants
     */
    public function __construct(callable $getter,
                                callable $setter = null,
                                callable $query = null,
                                callable $deleter = null,
                                callable $enumerator = null,
                                $flags = PropertyHandlerFlags::kNone
    )
    {
    }
}
