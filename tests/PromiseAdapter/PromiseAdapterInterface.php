<?php

namespace KryuuCommon\PromiseTest\PromiseAdapter;

interface PromiseAdapterInterface
{
    public function promise();
    public function resolve();
    public function reject();
    public function settle();
}
