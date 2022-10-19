<?php

use Project\Blog\Interface\IPlay;

class Player implements IPlay
{

    /**
     * メンバ変数
     * プロパティ
     */

    // HP
    private int $health;

    // 自動回復レシオ
    protected int $regenerateRatio;

    // ユーザー名
    public string $username;

    public function __construct(int $health, string $username)
    {
        $this->health = $health;
        $this->username = $username;
    }

    /**
     * メソッド
     */

    // 回復するということ
    public function regenerate(int $health)
    {
        $this->health += $health * $this->regenerateRatio;
    }

    public function play(int $number): array
    {
        return [];
    }
}

$TENCHARU = new Player(100, "TENCHARU");
$TENCHARU->regenerate(10);
