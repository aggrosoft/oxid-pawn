[{$smarty.block.parent}]
[{if $oxcmp_basket->getPawnCosts()}]
    [{assign var=oPawnPrice value=$oxcmp_basket->getPawnCosts()}]
    [{if $oxcmp_basket->isPriceViewModeNetto()}]
    <tr>
        <th class="text-right">[{oxmultilang ident="TOTAL_NET_PAWN" suffix="COLON"}]</th>
        <td class="text-right" id="basketTotalPawnGross">[{oxprice price=$oPawnPrice->getNettoPrice() currency=$currency}]</td>
    </tr>
    [{else}]
    <tr>
        <th class="text-right">[{oxmultilang ident="TOTAL_BRUT_PAWN" suffix="COLON"}]</th>
        <td class="text-right" id="basketTotalPawnGross">[{oxprice price=$oPawnPrice->getBruttoPrice() currency=$currency}]</td>
    </tr>
    [{/if}]
[{/if}]