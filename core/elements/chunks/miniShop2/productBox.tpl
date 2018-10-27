
<div class="product-column">
    <div class="product product1">
        {if $new?}
            <span class="product-label">New</span>
        {/if}
        {if $popular?}
            <span class="product-label discount">Popular</span>
        {/if}
        <div class="product-top">
            {if $thumb?}
                 <a href="{$uri}"><img src="{$thumb}" alt="Product Image"></a>
            {else}
            <a href="{$uri}">
                <img src="{'assets_url' | option}components/minishop2/img/web/ms2_small.png"
                srcset="{'assets_url' | option}components/minishop2/img/web/ms2_small@2x.png 2x"
                alt="{$pagetitle}" title="{$pagetitle}"/>
            </a>
            {/if}
        </div>
        <div class="product-meta">
            <div class="product-brand"><a href="#">[[+vendor.name]]</a></div>
            <div class="ratings-container">
                <div class="ratings" style="width:0"></div>
            </div>
        </div>
        <h3 class="product-title"><a href="{$uri}">{$pagetitle}</a></h3>
        <div class="product-price-container">
            {if $old_price?}
            <span class="product-old-price">${$old_price}</span>
            {/if}
            <span class="product-price">${$price}</span>
        </div>
        
        <div class="product-action">
            <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart"></i> <span>Add To Cart</span></a>
            <a href="#" class="icon btn-product-like" title="Like"><span class="sr-only">Like</span></a>
            <a href="#" class="icon btn-product-compare" title="Compare"><span class="sr-only">Compare</span></a>
        </div>
    </div>
</div>