<?php

declare(strict_types=1);

namespace Lex\Yii2\Translator;

use Lex\Yii2\Web\ContentParametersInjectionInterface;
use Yiisoft\Translator\TranslatorInterface;

final class TranslatorViewInjection implements ContentParametersInjectionInterface
{
    private TranslatorInterface $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function getContentParameters(): array
    {
        return [
            'translator' => $this->translator
        ];
    }
}