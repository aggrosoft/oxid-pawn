[{$smarty.block.parent}]
[{if $oDetailsProduct->getPawn()}]
[{assign var="oPawnPrice" value=$oDetailsProduct->getPawnPrice()}]
<div id="productPawn_[{$testid}]" class="pawnPrice small text-muted">
    [{oxmultilang ident="PLUS_PAWN"}] [{oxprice price=$oPawnPrice currency=$currency}]
</div>
[{/if}]
