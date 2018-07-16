<?php

namespace KryuuCommon\PromiseTest\PromiseTest;

trait FullTestTrait
{
    use PromisePendingTestTrait,
        PromiseSettledTestTrait,
        PromiseFulfilledTestTrait,
        PromiseRejectedTestTrait,
        ResolveTestTrait,
        RejectTestTrait,
        CancelTestTrait;
}
