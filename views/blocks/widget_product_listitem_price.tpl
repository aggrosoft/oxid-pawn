[{$smarty.block.parent}]
[{if $product->getPawn()}]
    [{assign var="oPawnPrice" value=$product->getPawnPrice()}]
    <div id="productPawn_[{$testid}]" class="pawnPrice small text-muted">
        [{oxmultilang ident="PLUS_PAWN"}] [{oxprice price=$oPawnPrice currency=$currency}]
    </div>
[{/if}]
