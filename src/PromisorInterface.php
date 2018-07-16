<?php

namespace KryuuCommon\Promise;

interface PromisorInterface
{
    /**
     * @return PromiseInterface
     */
    public function promise();
}
