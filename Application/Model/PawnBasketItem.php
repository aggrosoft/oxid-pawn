<?php


namespace Aggrosoft\Pawn\Application\Model;


class PawnBasketItem extends PawnBasketItem_parent
{
    /**
     * Get pawn value
     */
    public function getPawnPrice()
    {
        $oArticle = $this->getArticle();
        return $oArticle->getPawnPrice();
    }

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
    public function getTotalPawnPrice()
    {
        $oPawnPrice = $this->getPawnPrice();
        $oTotalPawnPrice = clone $oPawnPrice;
        $oTotalPawnPrice->multiply($this->getAmount());
        return $oTotalPawnPrice;
    }


    /**
     * Get total pawn
     */
    public function getTotalPawn()
    {
        return $this->getPawn() * $this->getAmount();
    }

    /**
     * Get formatted total pawn
     */
    public function getFTotalPawn()
    {
        \OxidEsales\Eshop\Core\Registry::getLang()->formatCurrency($this->getTotalPawn());
    }
}