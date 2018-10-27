{extends 'file:templates/layout.tpl'}

{block 'main'}
<div class="main">
    {include 'file:chunks/base/breadcrumbs.tpl'}
    <div class="error-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <div class="error-page-text"><img src="assets/sconto/assets/images/dude.png" class="hidden-sm hidden-xs" alt="Error Dude">
                        <h1>4<span class="text-custom">0</span>4</h1>
                        <h2>[[++title404]]</h2>
                        <p>[[++text404]]</p>
                        <div class="action-container"><a href="[[+site_url]]" class="btn btn-custom">Go Home</a> <a href="[[~5]]" class="btn btn-custom3">Contact Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{/block}
