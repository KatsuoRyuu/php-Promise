<?php

namespace KryuuCommon\PromiseTest;

class SimpleTestCancellable
{
    public $cancelCalled = false;

    public function cancel()
    {
        $this->cancelCalled = true;
    }
}
