{extends 'file:templates/layout.tpl'}

{block 'main'}
<div class="main">
    {include 'file:chunks/base/breadcrumbs.tpl'}
    <div class="container">
    <div class="row">
        <div class="col-12">
        [[!SimpleSearch?
        &ids=`1,5,6,8`
        ]]
        </div>
    </div>
</div>
</div>
{/block}
