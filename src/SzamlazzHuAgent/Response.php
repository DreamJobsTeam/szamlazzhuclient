<?php
/**
 * Created by PhpStorm.
 * User: Creev
 * Date: 2016.03.18.
 * Time: 12:53
 */

namespace SzamlazzHuAgent;

use SzamlazzHuAgent\Invoice\Pdf;

class Response
{

    private $body = [];

    public function setParam($name, $value) {
        $this->body[$name] = $value;

        return $this;
    }

    public function toArray() {
        return $this->body;
    }
}