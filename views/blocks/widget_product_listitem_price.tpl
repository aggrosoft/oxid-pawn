[{$smarty.block.parent}]
[{if $product->getPawn()}]
    [{assign var="oPawnPrice" value=$product->getPawnPrice()}]
    <span id="productPawn_[{$testid}]" class="pawnPrice pricePerUnit">
        [{oxprice price=$oPawnPrice currency=$currency}]
    </span>
[{/if}]
