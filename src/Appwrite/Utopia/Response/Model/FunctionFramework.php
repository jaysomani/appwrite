<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model;

class FunctionFramework extends Model
{
    public function __construct()
    {
        $this
            ->addRule('key', [
                'type' => self::TYPE_STRING,
                'description' => 'Framework key.',
                'default' => '',
                'example' => 'express',
            ])
            ->addRule('name', [
                'type' => self::TYPE_STRING,
                'description' => 'Framework name.',
                'default' => '',
                'example' => 'Express',
            ])
            ->addRule('runtimes', [
                'type' => self::TYPE_STRING,
                'description' => 'List of supported runtime versions.',
                'default' => [],
                'example' => ['node-22'],
                'array' => true,
            ])
        ;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Function Framework';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_FUNCTION_FRAMEWORK;
    }
}
