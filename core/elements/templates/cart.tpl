{extends 'file:templates/layout.tpl'}

{block 'main'}
<div class="main">
    {include 'file:chunks/base/breadcrumbs.tpl'}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                [[!msCart? 
                &includeThumbs=`medium`
                &tpl=`custom.msCart`]]
                <div class="mb80 mb60-sm mb50-xs"></div>
            </div>
            {include 'file:chunks/base/sidebar.tpl'}
        </div>
    </div>
</div>
{/block}
{block 'add_js'}
<script>
$( '#msCart input[name="count"]' ).change( function(){
        var id = '#' + $( this ).closest( 'tr' ).attr( 'id' );
        var count = parseInt($( this ).val()); 
        var price = $( id + ' .product-price').text().slice(1);
        $( id + ' .subtotal-col' ).html( count * price );
})
</script>
{/block}
