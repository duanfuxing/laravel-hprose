<?php

namespace duan617\LaravelHprose\Parameters;

class Base
{
    /**
     * 验证规则
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }

    /**
     * 错误提示信息
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }

    /**
     * 格式化错误信息
     *
     * @param \Illuminate\Support\MessageBag $errorMessage
     *
     * @throws duan617\LaravelHprose\Exceptions\BadRequestParameterException
     *
     * @return void
     */
    public function formatErrors(\Illuminate\Support\MessageBag $errorMessage)
    {
        throw new \duan617\LaravelHprose\Exceptions\BadRequestParameterException(
            $errorMessage->first(),
            400
        );
    }
}
