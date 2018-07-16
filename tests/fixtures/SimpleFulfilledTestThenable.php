<?php

namespace KryuuCommon\PromiseTest;

class SimpleFulfilledTestThenable
{
    public function then(callable $onFulfilled = null, callable $onRejected = null)
    {
        try {
            if ($onFulfilled) {
                $onFulfilled('foo');
            }

            return new self();
        } catch (\Throwable $exception) {
            return new RejectedPromise($exception);
        } catch (\Exception $exception) {
            return new RejectedPromise($exception);
        }
    }
}
