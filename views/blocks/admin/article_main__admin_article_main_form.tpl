[{$smarty.block.parent}]
<tr>
    <td class="edittext">
        [{oxmultilang ident="OA_EXTPRODUCT_LABEL"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__oa_extproduct_url_label->fldmax_length}]" id="oLockTarget" name="editval[oxarticles__oa_extproduct_url_label]" value="[{$edit->oxarticles__oa_extproduct_url_label->value}]">
        [{oxinputhelp ident="HELP_OA_EXTERNAL_LABEL"}]
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="OA_EXTPRODUCT_URL"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__oa_extproduct_url->fldmax_length}]" id="oLockTarget" name="editval[oxarticles__oa_extproduct_url]" value="[{$edit->oxarticles__oa_extproduct_url->value}]">
        [{oxinputhelp ident="HELP_OA_EXTERNAL_URL"}]
    </td>
</tr>