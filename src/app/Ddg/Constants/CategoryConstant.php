<?php

declare(strict_types=1);

namespace App\Ddg\Constants;

/**
 * カテゴリー定数クラス.
 */
class CategoryConstant
{
    /**
     * @var int カテゴリー：個人情報系
     */
    public const CATEGORY_INDIVIDUAL = 1;

    /**
     * @var int カテゴリー：Web系
     */
    public const CATEGORY_WEB = 2;

    /**
     * @var int カテゴリー：時間系
     */
    public const CATEGORY_TIME = 3;

    /**
     * @var int カテゴリー：未分類
     */
    public const CATEGORY_OTHER = 4;
}
