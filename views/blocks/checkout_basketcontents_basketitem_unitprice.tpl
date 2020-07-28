[{$smarty.block.parent}]
[{if $basketitem->getPawn()}]
|
<span class="unitPawn">
    <small>[{oxmultilang ident="UNIT_PAWN"}]: [{oxprice price=$basketitem->getPawnPrice() currency=$currency}]</small>
</span>
[{/if}]