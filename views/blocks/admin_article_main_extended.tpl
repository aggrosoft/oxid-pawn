[{$smarty.block.parent}]
<tr>
    <td class="edittext" width="120">
        [{oxmultilang ident="ARTICLE_MAIN_HASPAWN"}]
    </td>
    <td class="edittext">
        <input type="hidden" name="editval[oxarticles__agispawn]" value="0">
        <input class="edittext" type="checkbox" name="editval[oxarticles__agispawn]" value='1' [{if $edit->oxarticles__agispawn->value == 1}]checked[{/if}] [{$readonly}]>
        [{oxmultilang ident="ARTICLE_MAIN_PAWN"}]&nbsp;&nbsp;&nbsp;
        <input type="text" class="editinput" size="8" maxlength="[{$edit->oxarticles__agpawn->fldmax_length}]" name="editval[oxarticles__agpawn]" value="[{$edit->oxarticles__agpawn->value}]">
    </td>
</tr>