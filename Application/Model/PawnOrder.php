<?php


namespace Aggrosoft\Pawn\Application\Model;


class PawnOrder extends PawnOrder_parent
{
    protected function _loadFromBasket(\OxidEsales\Eshop\Application\Model\Basket $oBasket) // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        parent::_loadFromBasket($oBasket);

        $oPawnPrice = $oBasket->getCosts('agpawn');
        if($oPawnPrice){
            $this->oxorder__agtotalnetpawn = new \OxidEsales\Eshop\Core\Field($oPawnPrice->getNettoPrice());
            $this->oxorder__agtotalbrutpawn = new \OxidEsales\Eshop\Core\Field($oPawnPrice->getBruttoPrice());
            $this->oxorder__agtotalorderpawn = new \OxidEsales\Eshop\Core\Field($oPawnPrice->getBruttoPrice(), \OxidEsales\Eshop\Core\Field::T_RAW);
        }
    }
}