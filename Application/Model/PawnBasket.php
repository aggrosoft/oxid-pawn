<?php


namespace Aggrosoft\Pawn\Application\Model;

class PawnBasket extends PawnBasket_parent
{

    public function getPawnCosts(){
        return $this->getCosts('agpawn');
    }

    protected function _calcTotalPrice() // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        parent::_calcTotalPrice();
        $oPawnPrice = $this->_calcPawnCost();
        $this->setCost('agpawn', $oPawnPrice);
        $oTotalPrice = $this->getPrice();
        $oTotalPrice->add($oPawnPrice->getBruttoPrice());
        $this->setPrice($oTotalPrice);
    }

    protected function _calcPawnCost() // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        $oPawnPrice = oxNew(\OxidEsales\Eshop\Core\Price::class);
        $oPawnPrice->setBruttoPriceMode();

        $fPawnVATPercent = $this->getAdditionalServicesVatPercent();
        $oPawnPrice->setVat($fPawnVATPercent);

        foreach ($this->_aBasketContents as $oBasketItem) {
            if ($oBasketItem->getTotalPawn()){
                $oPawnPrice->add($oBasketItem->getTotalPawn());
            }
        }

        if ($this->isCalculationModeNetto() && \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('blPawnVatOnTop', null, 'module:agpawn')) {
            $oPawnPrice->setPrice(\OxidEsales\Eshop\Core\Price::netto2brutto($oPawnPrice->getPrice(),$fPawnVATPercent));
        }

        return $oPawnPrice;
    }

}