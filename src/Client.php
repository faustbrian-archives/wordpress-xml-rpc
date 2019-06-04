<?php

declare(strict_types=1);

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\WordPressXmlRpc;

use Plients\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $password;

    /**
     * Create a new client instance.
     *
     * @param string $url
     * @param string $username
     * @param string $password
     */
    public function __construct(string $url, string $username, string $password)
    {
        $this->url = $url;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\WordPressXmlRpc\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $class = "Plients\\WordPressXmlRpc\\API\\{$name}";

        return new $class(Http::new(), [
            'url'      => $this->url,
            'username' => $this->username,
            'password' => $this->password,
        ]);
    }
}
