{extends 'file:templates/layout.tpl'}

{block 'main'}
<div class="main">
    {include 'file:chunks/base/breadcrumbs.tpl'}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="checkout-section">
                [[!msCart? &tpl=`custom.msCart.Order` &includeThumbs=`medium`]]
                [[!msOrder?tpl=`custom.msOrder` &userFields=`address`]]
                [[!msGetOrder? &tpl=`custom.msGetOrder`]]
                </div>
                <div class="mb140 mb100-sm mb80-xs"></div>
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