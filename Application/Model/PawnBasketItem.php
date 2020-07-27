<?php


namespace Aggrosoft\Pawn\Application\Model;


class PawnBasketItem
{
    /**
     * Get pawn value
     */
    public function getPawn()
    {
        $oArticle = $this->getArticle();
        return $oArticle->getPawn();
    }

    /**
     * Get formatted pawn
     */
    public function getFPawn()
    {
        $oArticle = $this->getArticle();
        return $oArticle->getFPawn();
    }

    /**
     * Get total pawn
     */
    public function getTotalPawn()
    {
        return ($this->getPawn() * $this->getAmount());
    }

    /**
     * Get formatted total pawn
     */
    public function getFTotalPawn()
    {
        oxRegistry::getLang()->formatCurrency($this->getTotalPawn());
    }
}