[{$smarty.block.parent}]
[{if $basketitem->getPawn()}]
<div class="totalPawn text-right text-muted">
    <small>[{oxmultilang ident="PLUS_PAWN"}] [{oxprice price=$basketitem->getTotalPawnPrice() currency=$currency}]</small>
</div>
[{/if}]