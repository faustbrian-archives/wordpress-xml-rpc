<?php

declare(strict_types=1);

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordPressXmlRpc\API;

use BrianFaust\Http\HttpResponse;

class Demo extends AbstractAPI
{
    public function sayHello(): HttpResponse
    {
        return $this->post('demo.sayHello');
    }

    public function addTwoNumbers($numberOne, $numberTwo): HttpResponse
    {
        return $this->post('demo.addTwoNumbers', [$numberOne, $numberTwo]);
    }
}
