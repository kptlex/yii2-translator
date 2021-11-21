<?php

declare(strict_types=1);

namespace Lex\Yii2\Translator;

use Yii;
use yii\base\NotSupportedException;
use Yiisoft\Translator\CategorySource;
use Yiisoft\Translator\TranslatorInterface;

final class Translator implements TranslatorInterface
{
    /**
     * @param CategorySource $category
     * @return void
     * @throws NotSupportedException
     */
    public function addCategorySource(CategorySource $category): void
    {
        throw new NotSupportedException('Add category is not supported.');
    }

    /**
     * @param array $categories
     * @return void
     * @throws NotSupportedException
     */
    public function addCategorySources(array $categories): void
    {
        throw new NotSupportedException('Add category is not supported.');
    }

    /**
     * @param string $locale
     * @return void
     */
    public function setLocale(string $locale): void
    {
        Yii::$app->language = $locale;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return Yii::$app->language;
    }

    /**
     * @param string $id
     * @param array $parameters
     * @param string|null $category
     * @param string|null $locale
     * @return string
     */
    public function translate(string $id, array $parameters = [], string $category = null, string $locale = null): string
    {
        return Yii::t($category, $id, $parameters, $locale);
    }

    /**
     * @param string $category
     * @return TranslatorInterface
     * @throws NotSupportedException
     */
    public function withCategory(string $category): TranslatorInterface
    {
        throw new NotSupportedException('Add category is not supported.');
    }

    /**
     * @param string $locale
     * @return TranslatorInterface
     * @throws NotSupportedException
     */
    public function withLocale(string $locale): TranslatorInterface
    {
        throw new NotSupportedException('Add locale is not supported.');
    }
}