<?php


namespace Aggrosoft\Pawn\Application\Model;

class PawnArticle extends PawnArticle_parent
{

    /**
     * Get pawn value
     */
    public function getPawn()
    {
        return 0.08;
        return $this->oxarticles__agpawn->value;
    }

    /**
     * Get formatted pawn
     */
    public function getFPawn()
    {
        return \OxidEsales\Eshop\Core\Registry::getLang()->formatCurrency( $this->getPawn() );
    }

    public function getPawnPrice()
    {
        $dPrice = $this->getPawn();
        $oPrice = $this->_getPriceObject();
        $oPrice->setPrice($dPrice);
        $this->_calculatePrice($oPrice);
        return $oPrice;
    }

}