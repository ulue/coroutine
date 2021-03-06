<?php
/**
 * Created by PhpStorm.
 * User: huye
 * Date: 2017/9/18
 * Time: 上午11:43
 */

namespace ZanPHP\Coroutine\Tests\Task;

class Error extends Job {
    public function run() {
        try {
            $work = (yield $this->work());
            $this->context->set('work_response', $work);
        } catch (\Exception $e) {
            $this->context->set('exception_code', $e->getCode());
            $this->context->set('exception_msg', $e->getMessage());
            $this->context->set('exception', get_class($e));

            yield 'Error.catch.exception';
        }
    }

    private function work() {
        $step1 = (yield $this->step1());

        $this->context->set('step1_response', $step1);

        throw new ErrorException('ErrorException Msg',404);

        yield 'Error.work()';
    }

    private function step1() {
        yield 'step1';
    }
}