[{$smarty.block.parent}]
[{if $oxcmp_basket->getPawnCosts()}]
<tr>
    <th class="text-right">[{oxmultilang ident="TOTAL_PAWN" suffix="COLON"}]</th>
    <td class="text-right" id="basketTotalPawnGross">[{oxprice price=$oxcmp_basket->getPawnCosts() currency=$currency}]</td>
</tr>
[{/if}]