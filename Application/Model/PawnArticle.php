<?php


namespace Aggrosoft\Pawn\Application\Model;

class PawnArticle extends PawnArticle_parent
{

    /**
     * Get pawn value
     */
    public function getPawn()
    {
        if ($this->oxarticles__agispawn->value){
            return $this->oxarticles__agpawn->value > 0 ? $this->oxarticles__agpawn->value : \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('fDefaultPawn', null, 'module:agpawn');
        }
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
        if (\OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('blPawnVatOnTop', null, 'module:agpawn')) {
            $oPrice->setNettoPriceMode();
        } else {
            $oPrice->setBruttoPriceMode();
        }

        $fPawnVATPercent = $this->getArticleVat();
        $oPrice->setVat($fPawnVATPercent);
        $oPrice->setPrice($dPrice);
        $this->_calculatePrice($oPrice);
        return $oPrice;
    }

}