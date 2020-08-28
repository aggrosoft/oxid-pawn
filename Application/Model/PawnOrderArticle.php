<?php


namespace Aggrosoft\Pawn\Application\Model;


class PawnOrderArticle extends PawnOrderArticle_parent
{
    public function getPawn() {
        $article = $this->getArticle();
        return $article ? $article->getPawn() : 0;
    }
}