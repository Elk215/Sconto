<?php  return array (
  'resourceClass' => 'msCategory',
  'resource' => 
  array (
    'id' => 8,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Catalog',
    'longtitle' => '',
    'description' => '',
    'alias' => 'catalog',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 10,
    'menuindex' => 7,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1536150104,
    'editedby' => 1,
    'editedon' => 1536778496,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1536160260,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'msCategory',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'catalog',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '{include "file:templates/categories.tpl"}',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[pdoMenu?
                    &parents=`0`
                    &level=`1`
                    &resources=`1,8,6,5`
                    &sortby=``
                    &tplOuter=`@INLINE <ul[[+classes]]>[[+wrapper]]</ul>`
                    &tpl=`@INLINE <li[[+classes]]><a href="[[+link]]">[[+menutitle]]</a></li>`
                    &hereClass=`open`
                    &outerClass=`menu`]]' => '<ul class="menu"><li class="first"><a href="/">Home</a></li><li class="open"><a href="catalog">Catalog</a></li><li><a href="about-us">About us</a></li><li class="last"><a href="contact">Contact Us</a></li></ul>',
    '[[pdoMenu?
                    &parents=`0`
                    &level=`1`
                    &resources=`1,8,6,5`
                    &sortby=``
                    &tplOuter=`@INLINE <ul[[+classes]]>[[+wrapper]]</ul>`
                    &tpl=`@INLINE <li[[+classes]]><a href="[[+link]]">[[+menutitle]]</a></li>`
                    &hereClass=`open`
                    &outerClass=`mobile-menu`]]' => '<ul class="mobile-menu"><li class="first"><a href="/">Home</a></li><li class="open"><a href="catalog">Catalog</a></li><li><a href="about-us">About us</a></li><li class="last"><a href="contact">Contact Us</a></li></ul>',
    '[[pdoCrumbs?
    &&tplWrapper=`@CODE:
        <ul class="breadcrumb">
        <li><a href="[[+site_url]]">Home</a></li>
        [[+output]]
        </ul>
    `]]' => '<ul class="breadcrumb">
        <li><a href="[[+site_url]]">Home</a></li>
        <li class="active">Catalog</li>
        </ul>',
    '[[getImageList?
            &tvname=`categorySlider`
            &tpl=`@CODE:
            <div class="swiper-slide banner top-banner v5"><img src="[[+categorySliderImage]]" class="banner-bg" alt="Banner">
                <div class="banner-content banner-contentbg right">
                    <h4>[[+categorySliderTitle]]</h4>
                    <h3>[[+categorySliderTitle2]]</h3>
                    <p>[[+categorySliderText]]</p>
                    <a href="[[+categorySliderButtonLink]]" class="btn btn-custom">Shop Now</a>
                </div>
            </div>
            `]]' => '
            <div class="swiper-slide banner top-banner v5"><img src="assets/sconto/assets/images/banners/category/banner1.jpg" class="banner-bg" alt="Banner">
                <div class="banner-content banner-contentbg right">
                    <h4>Laptops &amp; Tablets</h4>
                    <h3>Create Your<br>Signature Work</h3>
                    <p>The ultra-powerful, ultra-slim notebook takes performance and<br>design to a whole new level.</p>
                    <a href="" class="btn btn-custom">Shop Now</a>
                </div>
            </div>
            
            <div class="swiper-slide banner top-banner v5"><img src="assets/sconto/assets/images/banners/category/banner2.jpg" class="banner-bg" alt="Banner">
                <div class="banner-content banner-contentbg right">
                    <h4>Laptops &amp; Tablets</h4>
                    <h3>Create Your<br>Signature Work</h3>
                    <p>The ultra-powerful, ultra-slim notebook takes performance and<br>design to a whole new level.</p>
                    <a href="" class="btn btn-custom">Shop Now</a>
                </div>
            </div>
            
            <div class="swiper-slide banner top-banner v5"><img src="assets/sconto/assets/images/banners/category/banner3.jpg" class="banner-bg" alt="Banner">
                <div class="banner-content banner-contentbg right">
                    <h4>Laptops &amp; Tablets</h4>
                    <h3>Create Your<br>Signature Work</h3>
                    <p>The ultra-powerful, ultra-slim notebook takes performance and<br>design to a whole new level.</p>
                    <a href="" class="btn btn-custom">Shop Now</a>
                </div>
            </div>
            ',
    '[[msProducts?tpl=`custom.msProducts.row2`&limit=`3`&offset=`0`&depth=`10`&sortby=``Data`.`new` desc,`Data`.`popular` desc`&sortbyOptions=``&sortdir=``&toPlaceholder=``&toSeparatePlaceholders=``&showLog=``&parents=`0`&resources=`11,20,21`&includeContent=``&includeTVs=``&includeThumbs=`medium`&optionFilters=``&where=``&link=``&master=``&slave=``&tvPrefix=``&outputSeparator=`
`&returnIds=``&showUnpublished=``&showDeleted=``&showHidden=`1`&showZeroPrice=`1`&wrapIfEmpty=`1`&plPrefix=``&maxLimit=`100`&page=`1`&pageVarKey=`page`&totalVar=`page.total`&pageLimit=`5`&element=`msProducts`&pageNavVar=`page.nav`&pageCountVar=`pageCount`&pageLinkScheme=``&tplPage=`@INLINE <li><a href="[[+href]]">[[+pageNo]]</a></li>`&tplPageWrapper=`@INLINE <ul class="pagination">[[+prev]][[+pages]][[+next]]</ul>`&tplPageActive=`@INLINE <li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&tplPageFirst=`@INLINE <li class="control"><a href="[[+href]]">[[%pdopage_first]]</a></li>`&tplPageLast=`@INLINE <li class="control"><a href="[[+href]]">[[%pdopage_last]]</a></li>`&tplPagePrev=`@INLINE <li class="control"><a href="[[+href]]"><</a></li>`&tplPageNext=`@INLINE <li class="control"><a href="[[+href]]">></a></li>`&tplPageSkip=`@INLINE <li class="disabled"><span>...</span></li>`&tplPageFirstEmpty=`@INLINE <li class="disabled"><span>[[%pdopage_first]]</span></li>`&tplPageLastEmpty=`@INLINE <li class="disabled"><span>[[%pdopage_last]]</span></li>`&tplPagePrevEmpty=`@INLINE <li class="disabled"><span><</span></li>`&tplPageNextEmpty=`@INLINE <li class="disabled"><span>></span></li>`&cache=``&cacheTime=`0`&cacheAnonymous=``&ajax=`0`&ajaxMode=``&ajaxElemWrapper=`#pdopage`&ajaxElemRows=`#pdopage .rows`&ajaxElemPagination=`#pdopage .pagination`&ajaxElemLink=`#pdopage .pagination a`&ajaxElemMore=`#pdopage .btn-more`&ajaxTplMore=`@INLINE <button class="btn btn-default btn-more">[[%pdopage_more]]</button>`&ajaxHistory=``&frontend_js=``&frontend_css=``&setMeta=`1`&strictMode=`1`&paginator=`pdoPage`&sort=`ms|new:desc,ms|popular:desc`&filters=`
            msoption|color,
            ms|price:number
        `&aliases=``&showEmptyFilters=`1`&tplOuter=`custom.mFilter2.outer.tpl`&tplFilter.outer.default=`tpl.mFilter2.filter.outer`&tplFilter.row.default=`tpl.mFilter2.filter.checkbox`&hideContainers=``&fastMode=``&suggestions=`1`&suggestionsMaxFilters=`400`&suggestionsMaxResults=`2000`&suggestionsRadio=``&toPlaceholders=``&filter_delimeter=`|`&method_delimeter=`:`&values_delimeter=`,`&tpls=`443b20ca4c2aebf41b536ebdf8ee072d`&forceSearch=``&fields=``&onlyIndex=``&onlyAllWords=``&showSearchLog=``&filterOptions=``&suggestionsSliders=`1`&class=`msProduct`&tplFilter.outer.msoption|color=`custom.mFilter2.filter.outer`&tplFilter.row.msoption|color=`custom.mFilter2.filter.checkbox`&tplFilter.outer.ms|price=`custom.mFilter2.filter.slider`&tplFilter.row.ms|price=`custom.mFilter2.filter.number`&defaultSort=`ms|new:desc,ms|popular:desc`&tpl_idx=`0`&start_limit=`3`&request=`cfb425f91d04bba4902c6e4c8dc8c0cd`&setTotal=`1`]]' => '<div class="product-column ms2_product">
    <div class="product product1">
                    <span class="product-label">New</span>
                        <div class="product-top">
                        <figure>
                 <a href="catalog/smartphones/lenovo5"><img src="/assets/images/products/20/medium/product1.jpg" alt="Product Image"></a>
            </figure>
                    </div>
        <form method="post" class="ms2_form">
            <div class="product-meta">
                <div class="product-brand"><a href="#">Huawei</a></div>
            </div>
            <h3 class="product-title"><a href="catalog/smartphones/lenovo5">Lenovo5</a></h3>
            <div class="product-price-container">
                                <span class="product-old-price">$400</span>
                                <span class="product-price">$200</span>
            </div>
            
            <div class="product-action">
                <button class="btn-add-cart" type="submit" name="ms2_action" value="cart/add"><i class="icon icon-cart"></i> <span>Add to cart</span></button>
                <input type="hidden" name="id" value="20">
        		<input type="hidden" name="count" value="1">
        		<input type="hidden" name="options" value="[]">
            </div>
        </form>
    </div>
</div>
<div class="product-column ms2_product">
    <div class="product product1">
                            <span class="product-label discount">Popular</span>
                <div class="product-top">
                        <figure>
                 <a href="catalog/smartphones/thinkcentre-core-2-duo-win-7-professional-computer"><img src="/assets/images/products/11/medium/product1.jpg" alt="Product Image"></a>
            </figure>
                    </div>
        <form method="post" class="ms2_form">
            <div class="product-meta">
                <div class="product-brand"><a href="#">Huawei</a></div>
            </div>
            <h3 class="product-title"><a href="catalog/smartphones/thinkcentre-core-2-duo-win-7-professional-computer">ThinkCentre Core 2 Duo Win 7 Professional Computer</a></h3>
            <div class="product-price-container">
                                <span class="product-old-price">$400</span>
                                <span class="product-price">$200</span>
            </div>
            
            <div class="product-action">
                <button class="btn-add-cart" type="submit" name="ms2_action" value="cart/add"><i class="icon icon-cart"></i> <span>Add to cart</span></button>
                <input type="hidden" name="id" value="11">
        		<input type="hidden" name="count" value="1">
        		<input type="hidden" name="options" value="[]">
            </div>
        </form>
    </div>
</div>
<div class="product-column ms2_product">
    <div class="product product1">
                            <span class="product-label discount">Popular</span>
                <div class="product-top">
                        <figure>
                 <a href="catalog/smartphones/lg-smart-tv"><img src="/assets/images/products/21/medium/product13.jpg" alt="Product Image"></a>
            </figure>
                    </div>
        <form method="post" class="ms2_form">
            <div class="product-meta">
                <div class="product-brand"><a href="#">Toshiba</a></div>
            </div>
            <h3 class="product-title"><a href="catalog/smartphones/lg-smart-tv">Lg smart tv</a></h3>
            <div class="product-price-container">
                                <span class="product-old-price">$400</span>
                                <span class="product-price">$100</span>
            </div>
            
            <div class="product-action">
                <button class="btn-add-cart" type="submit" name="ms2_action" value="cart/add"><i class="icon icon-cart"></i> <span>Add to cart</span></button>
                <input type="hidden" name="id" value="21">
        		<input type="hidden" name="count" value="1">
        		<input type="hidden" name="options" value="[]">
            </div>
        </form>
    </div>
</div>',
    '[[*addTestimonials:is=`Yes`:then=`
        
        <div class="widget">
            <h3 class="widget-title">Testimonials</h3>
            <div class="widget-body">
                <div class="swiper-container testimonials-slider">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial">
            <blockquote>
                <p>Aenean mattis at nulla a varius. Integer luctus eu nisi sit amet facilisis. Sed elementum porttitor enim, at egestas orci. Ut sit amet metus nisl. Nullam ligula turpis, blandit nec tellus et, pretium ullamcorper lectus. Ut eu ligula nibh. Etiam sollicitudin odio augue, eu condimentum nunc mollis. </p>
            </blockquote>
            <div class="testimonial-owner">
                <figure><img src="assets/sconto/assets/images/testimonials/1.png" alt="Mark"></figure>
                <div class="owner-meta">Anna Ratallick,<br>12.04.2016</div>
            </div>
        </div><div class="swiper-slide testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam vitae provident in nemo placeat ullam nobis omnis, consequatur, quaerat cum eos aperiam optio, hic deserunt quas enim corporis, minima! Dolore eu ligula nibh. Etiam sollicitudin odio augue, eu condimentum nunc mollis strastus.</p>
            </blockquote>
            <div class="testimonial-owner">
                <figure><img src="assets/sconto/assets/images/testimonials/2.png" alt="Mark"></figure>
                <div class="owner-meta">Lamar Ratallick,<br>16.05.2016</div>
            </div>
        </div><div class="swiper-slide testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam vitae provident in nemo placeat ullam nobis omnis, consequatur, quaerat cum eos aperiam optio, hic deserunt quas enim corporis, minima! Dolore eu ligula nibh. Etiam sollicitudin odio augue, eu condimentum nunc mollis strastus.</p>
            </blockquote>
            <div class="testimonial-owner">
                <figure><img src="assets/sconto/assets/images/testimonials/3.png" alt="Mark"></figure>
                <div class="owner-meta">Lasdamar Ratallick,<br>16.05.2016</div>
            </div>
        </div><div class="swiper-slide testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam vitae provident in nemo placeat ullam nobis omnis, consequatur, quaerat cum eos aperiam optio, hic deserunt quas enim corporis, minima! Dolore eu ligula nibh. Etiam sollicitudin odio augue, eu condimentum nunc mollis strastus.</p>
            </blockquote>
            <div class="testimonial-owner">
                <figure><img src="assets/sconto/assets/images/testimonials/4.png" alt="Mark"></figure>
                <div class="owner-meta">Lasdamar Ratallick,<br>16.05.2018</div>
            </div>
        </div>
                    </div>
                    <div class="swiper-button-next icon"></div>
                    <div class="swiper-button-prev icon"></div>
                </div>
            </div>
        </div>
        `:else=``]]' => '<div class="widget">
            <h3 class="widget-title">Testimonials</h3>
            <div class="widget-body">
                <div class="swiper-container testimonials-slider">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial">
            <blockquote>
                <p>Aenean mattis at nulla a varius. Integer luctus eu nisi sit amet facilisis. Sed elementum porttitor enim, at egestas orci. Ut sit amet metus nisl. Nullam ligula turpis, blandit nec tellus et, pretium ullamcorper lectus. Ut eu ligula nibh. Etiam sollicitudin odio augue, eu condimentum nunc mollis. </p>
            </blockquote>
            <div class="testimonial-owner">
                <figure><img src="assets/sconto/assets/images/testimonials/1.png" alt="Mark"></figure>
                <div class="owner-meta">Anna Ratallick,<br>12.04.2016</div>
            </div>
        </div><div class="swiper-slide testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam vitae provident in nemo placeat ullam nobis omnis, consequatur, quaerat cum eos aperiam optio, hic deserunt quas enim corporis, minima! Dolore eu ligula nibh. Etiam sollicitudin odio augue, eu condimentum nunc mollis strastus.</p>
            </blockquote>
            <div class="testimonial-owner">
                <figure><img src="assets/sconto/assets/images/testimonials/2.png" alt="Mark"></figure>
                <div class="owner-meta">Lamar Ratallick,<br>16.05.2016</div>
            </div>
        </div><div class="swiper-slide testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam vitae provident in nemo placeat ullam nobis omnis, consequatur, quaerat cum eos aperiam optio, hic deserunt quas enim corporis, minima! Dolore eu ligula nibh. Etiam sollicitudin odio augue, eu condimentum nunc mollis strastus.</p>
            </blockquote>
            <div class="testimonial-owner">
                <figure><img src="assets/sconto/assets/images/testimonials/3.png" alt="Mark"></figure>
                <div class="owner-meta">Lasdamar Ratallick,<br>16.05.2016</div>
            </div>
        </div><div class="swiper-slide testimonial">
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam vitae provident in nemo placeat ullam nobis omnis, consequatur, quaerat cum eos aperiam optio, hic deserunt quas enim corporis, minima! Dolore eu ligula nibh. Etiam sollicitudin odio augue, eu condimentum nunc mollis strastus.</p>
            </blockquote>
            <div class="testimonial-owner">
                <figure><img src="assets/sconto/assets/images/testimonials/4.png" alt="Mark"></figure>
                <div class="owner-meta">Lasdamar Ratallick,<br>16.05.2018</div>
            </div>
        </div>
                    </div>
                    <div class="swiper-button-next icon"></div>
                    <div class="swiper-button-prev icon"></div>
                </div>
            </div>
        </div>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
      'SimpleSearchForm' => 
      array (
        'fields' => 
        array (
          'id' => 56,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SimpleSearchForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 25,
          'cache_type' => 0,
          'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'sisea.tpl_form_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchForm',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The chunk that will be used to display the search form.',
              'area_trans' => '',
            ),
            'landing' => 
            array (
              'name' => 'landing',
              'desc' => 'sisea.landing_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The Resource that the SimpleSearch snippet is called on, that will display the results of the search.',
              'area_trans' => '',
            ),
            'searchIndex' => 
            array (
              'name' => 'searchIndex',
              'desc' => 'sisea.searchindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'search',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'The name of the REQUEST parameter that the search will use.',
              'area_trans' => '',
            ),
            'method' => 
            array (
              'name' => 'method',
              'desc' => 'sisea.method_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.get',
                  'value' => 'get',
                  'name' => 'get',
                ),
                1 => 
                array (
                  'text' => 'sisea.post',
                  'value' => 'post',
                  'name' => 'post',
                ),
              ),
              'value' => 'get',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Whether to send the search over POST or GET.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'sisea.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Whether to set the output to directly return, or set to a placeholder with this propertys name.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'msMiniCart' => 
      array (
        'fields' => 
        array (
          'id' => 42,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'msMiniCart',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'miniShop2\');
$miniShop2->initialize($modx->context->key);

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.msMiniCart\');

$cart = $miniShop2->cart->status();
$cart[\'total_cost\'] = $miniShop2->formatPrice($cart[\'total_cost\']);
$cart[\'total_weight\'] = $miniShop2->formatWeight($cart[\'total_weight\']);

return $miniShop2->pdoTools->getChunk($tpl, $cart);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'ms2_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.msMiniCart',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'The chunk tpl to use for each row.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/minishop2/elements/snippets/snippet.ms_minicart.php',
          'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'miniShop2\');
$miniShop2->initialize($modx->context->key);

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.msMiniCart\');

$cart = $miniShop2->cart->status();
$cart[\'total_cost\'] = $miniShop2->formatPrice($cart[\'total_cost\']);
$cart[\'total_weight\'] = $miniShop2->formatWeight($cart[\'total_weight\']);

return $miniShop2->pdoTools->getChunk($tpl, $cart);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, snippet will add detailed log of query for developers.',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Fast chunks processing. If true, MODX parser will not be used and unprocessed tags will be cut.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-delimited list of ids serving as parents. Use "0" to ignore parents when specifying resources to include. Prefix an id of parent with a dash to exclude it and its children from the result.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-delimited list of ids to include in the results. Prefix an id with a dash to exclude the resource from the result.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-delimited list of templates to filter the results. Prefix an id of template with a dash to exclude the resource with it from the result.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Which Context should be searched in.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Caching the results of the snippet.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Time until the cache expires, in seconds.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Enable caching only for unauthorized visitors.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Prefix for output placeholders, by default is "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will show Resources regardless if they are hidden from the menus.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will also show Resources regardless if they are unpublished.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will show Resources regardless if they are deleted.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the script output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If WebLinks are used in the output, script will output the link specified in the WebLink instead of the normal MODX link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Order which to sort by: descending or ascending',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Any Resource Field (including Template Variables if they have been included) to sort by. Some common fields to sort on are publishedon, menuindex, pagetitle etc., but see the Resources documentation for all fields. Specify fields with the name only, not using the tag syntax. Note that when using fields like template, publishedby and the likes for sorting, it will be sorted on the raw values, so the template or user ID, and NOT their names. You can also sort randomly by specifying RAND().',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned.  Use "0" for unlimited results.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'An offset of resources returned by the criteria to skip.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If set, script will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class denoting each output row.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the outer template.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the inner template.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc. if you specified "level").',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the current item.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'CSS class for weblink items.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "&lt;ul&gt;[[+wrapper]]&lt;/ul&gt;" is assumed.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a resource template. If not provided, properties are dumped to output for each resource.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [[+wrapper]] placeholder to output the children documents.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [[+wf.wrapper]] placeholder to output the children documents.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [[+wf.wrapper]] placeholder to output the children documents.',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "&lt;ul&gt;[[+wf.wrapper]]&lt;/ul&gt;" is assumed.',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of permissions to check when building the menu.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'A JSON-style expression of criteria to build any additional where clauses from.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of columns for select from database. You can specify JSON string with array, for example {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Scheme of generation of links: "uri" for the substitution of document uri (very fast) or a parameter to modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Display the exact number of active descendants of the document in placeholder [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoCrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoCrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {
    $from = 0;
}
if (empty($to)) {
    $to = $modx->resource->id;
}
if (empty($direction)) {
    $direction = \'ltr\';
}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {
    $outputSeparator = \'&nbsp;&larr;&nbsp;\';
}
if ($limit == \'\') {
    $limit = 10;
}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {
    $limit = $maxCrumbs;
}
if (!empty($containerTpl)) {
    $tplWrapper = $containerTpl;
}
if (!empty($currentCrumbTpl)) {
    $tplCurrent = $currentCrumbTpl;
}
if (!empty($linkCrumbTpl)) {
    $scriptProperties[\'tpl\'] = $linkCrumbTpl;
}
if (!empty($maxCrumbTpl)) {
    $tplMax = $maxCrumbTpl;
}
if (isset($showBreadCrumbsAtHome)) {
    $showAtHome = $showBreadCrumbsAtHome;
}
if (isset($showHomeCrumb)) {
    $showHome = $showHomeCrumb;
}
if (isset($showCurrentCrumb)) {
    $showCurrent = $showCurrentCrumb;
}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
    return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {
    $where[\'published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}
if (!empty($hideContainers) && empty($showContainer)) {
    $where[\'isfolder\'] = 0;
}

$resource = ($to == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject($class, $to);

if (!$resource) {
    $message = \'Could not build breadcrumbs to resource "\' . $to . \'"\';

    return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
    $parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
    if (!empty($parent)) {
        $ids[] = $parent;
    }
    if (!empty($from) && $parent == $from) {
        break;
    }
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
    $where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\', $resourceColumns));

// Add custom parameters
foreach (array(\'where\', \'select\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'select\' => json_encode($select),
    \'groupby\' => $class . \'.id\',
    \'sortby\' => "find_in_set(`$class`.`id`,\'" . implode(\',\', $ids) . "\')",
    \'sortdir\' => \'\',
    \'return\' => \'data\',
    \'totalVar\' => \'pdocrumbs.total\',
    \'disableConditions\' => true,
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
    if (strtolower($direction) == \'ltr\') {
        $rows = array_reverse($rows);
    }

    foreach ($rows as $row) {
        if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
            $row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
                ? $pdoFetch->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row)
                : $row[\'content\'];
        } else {
            $row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
        }

        $row = array_merge(
            $scriptProperties,
            $row,
            array(\'idx\' => $pdoFetch->idx++)
        );
        if (empty($row[\'menutitle\'])) {
            $row[\'menutitle\'] = $row[\'pagetitle\'];
        }

        if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
            continue;
        } elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
            $tpl = $tplCurrent;
        } elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
            $tpl = $tplHome;
        } else {
            $tpl = $pdoFetch->defineChunk($row);
        }
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
    $pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
    $output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output = implode($outputSeparator, $output);
    if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
        $output = ($direction == \'ltr\')
            ? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
            : $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
    }
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, snippet will add detailed log of query for developers.',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Fast chunks processing. If true, MODX parser will not be used and unprocessed tags will be cut.',
              'area_trans' => '',
            ),
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'pdotools_prop_from',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Resource id from which breadcrumb is created. Usually it is root of site, e.g. "0".',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'pdotools_prop_to',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Resource id whose breadcrumb is created. By default it is id of the current resource.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned.  Use "0" for unlimited results.',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'pdotools_prop_exclude',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of resource ids that need to be excluded from the query.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'An optional string to separate each tpl instance.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'An optional comma-delimited list of TemplateVar names to include.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of TV names that need to be prepared. By default it is set to "1", so all TVs in "&includeTVs=``" will be prepared.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of TV names that need to be processed. If you set it to "1" - all TVs in "&includeTVs=``" will be processed. By default it is empty.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'The prefix for TemplateVar properties.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'A JSON-style expression of criteria to build any additional where clauses from.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will also show Resources regardless if they are unpublished.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will show Resources regardless if they are deleted.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will show Resources regardless if they are hidden from the menus.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If set, will not show any Resources marked as a container (isfolder).',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a resource template. If not provided, properties are dumped to output for each resource.',
              'area_trans' => '',
            ),
            'tplCurrent' => 
            array (
              'name' => 'tplCurrent',
              'desc' => 'pdotools_prop_tplCurrent',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="active">[[+menutitle]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Сhunk of the current document in navigation.',
              'area_trans' => '',
            ),
            'tplMax' => 
            array (
              'name' => 'tplMax',
              'desc' => 'pdotools_prop_tplMax',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="disabled">&nbsp;...&nbsp;</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Сhunk which is added to the beginning of the results if there are more items than allowed by "&limit".',
              'area_trans' => '',
            ),
            'tplHome' => 
            array (
              'name' => 'tplHome',
              'desc' => 'pdotools_prop_tplHome',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Сhunk of the link to the main page.',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul class="breadcrumb">[[+output]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a wrapper template for the output. This does not work with toSeparatePlaceholders.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If true, will output the wrapper specified in &tplWrapper even if the output is empty.',
              'area_trans' => '',
            ),
            'showCurrent' => 
            array (
              'name' => 'showCurrent',
              'desc' => 'pdotools_prop_showCurrent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Display the current document in the navigation.',
              'area_trans' => '',
            ),
            'showHome' => 
            array (
              'name' => 'showHome',
              'desc' => 'pdotools_prop_showHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Display a link to the main at the beginning of navigation.',
              'area_trans' => '',
            ),
            'showAtHome' => 
            array (
              'name' => 'showAtHome',
              'desc' => 'pdotools_prop_showAtHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Show bread crumbs on the main page.',
              'area_trans' => '',
            ),
            'hideSingle' => 
            array (
              'name' => 'hideSingle',
              'desc' => 'pdotools_prop_hideSingle',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Do not display the result if it consists of only one item.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'pdotools_prop_direction',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => 'Right To Left (rtl)',
                  'name' => 'Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Direction or breadcrumb: Left To Right (ltr) or Right To Left (rtl) for Arabic language for example.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Scheme of generation of links: "uri" for the substitution of document uri (very fast) or a parameter to modX::makeUrl().',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'If WebLinks are used in the output, script will output the link specified in the WebLink instead of the normal MODX link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdocrumbs.php',
          'content' => '/** @var array $scriptProperties */
/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {
    $from = 0;
}
if (empty($to)) {
    $to = $modx->resource->id;
}
if (empty($direction)) {
    $direction = \'ltr\';
}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {
    $outputSeparator = \'&nbsp;&larr;&nbsp;\';
}
if ($limit == \'\') {
    $limit = 10;
}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {
    $limit = $maxCrumbs;
}
if (!empty($containerTpl)) {
    $tplWrapper = $containerTpl;
}
if (!empty($currentCrumbTpl)) {
    $tplCurrent = $currentCrumbTpl;
}
if (!empty($linkCrumbTpl)) {
    $scriptProperties[\'tpl\'] = $linkCrumbTpl;
}
if (!empty($maxCrumbTpl)) {
    $tplMax = $maxCrumbTpl;
}
if (isset($showBreadCrumbsAtHome)) {
    $showAtHome = $showBreadCrumbsAtHome;
}
if (isset($showHomeCrumb)) {
    $showHome = $showHomeCrumb;
}
if (isset($showCurrentCrumb)) {
    $showCurrent = $showCurrentCrumb;
}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
    return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {
    $where[\'published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}
if (!empty($hideContainers) && empty($showContainer)) {
    $where[\'isfolder\'] = 0;
}

$resource = ($to == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject($class, $to);

if (!$resource) {
    $message = \'Could not build breadcrumbs to resource "\' . $to . \'"\';

    return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
    $parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
    if (!empty($parent)) {
        $ids[] = $parent;
    }
    if (!empty($from) && $parent == $from) {
        break;
    }
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
    $where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\', $resourceColumns));

// Add custom parameters
foreach (array(\'where\', \'select\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'select\' => json_encode($select),
    \'groupby\' => $class . \'.id\',
    \'sortby\' => "find_in_set(`$class`.`id`,\'" . implode(\',\', $ids) . "\')",
    \'sortdir\' => \'\',
    \'return\' => \'data\',
    \'totalVar\' => \'pdocrumbs.total\',
    \'disableConditions\' => true,
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
    if (strtolower($direction) == \'ltr\') {
        $rows = array_reverse($rows);
    }

    foreach ($rows as $row) {
        if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
            $row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
                ? $pdoFetch->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row)
                : $row[\'content\'];
        } else {
            $row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
        }

        $row = array_merge(
            $scriptProperties,
            $row,
            array(\'idx\' => $pdoFetch->idx++)
        );
        if (empty($row[\'menutitle\'])) {
            $row[\'menutitle\'] = $row[\'pagetitle\'];
        }

        if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
            continue;
        } elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
            $tpl = $tplCurrent;
        } elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
            $tpl = $tplHome;
        } else {
            $tpl = $pdoFetch->defineChunk($row);
        }
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
    $pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
    $output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output = implode($outputSeparator, $output);
    if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
        $output = ($direction == \'ltr\')
            ? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
            : $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
    }
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'getImageList' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getImageList',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$inherit_children_tvname = $modx->getOption(\'inherit_children_tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$emptyTpl = $modx->getOption(\'emptyTpl\', $scriptProperties, \'\'); 
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\', $inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }

        if (empty($outputvalue)) {
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)) {
                foreach ($inheritFrom as $from) {
                    if ($from == \'parents\') {
                        if (!empty($inherit_children_tvname)){
                            //try to get items from optional MIGX-TV for children
                            if ($inh_tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inherit_children_tvname))) {
                                $outputvalue = $inh_tv->processInheritBinding(\'\', $docid);    
                            }
                        }
                        $outputvalue = empty($outputvalue) ? $tv->processInheritBinding(\'\', $docid) : $outputvalue;
                    } else {
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)) {
                        break;
                    }
                }
            }
        }


        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)) {
            $migx->source->initialize();
        }

    }


}

if (empty($outputvalue)) {
    $modx->setPlaceholder($totalVar, 0);
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (empty($o) && !empty($emptyTpl)) {
    $template = $migx->getTemplate($emptyTpl);
    if ($template[$emptyTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$emptyTpl]);
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$inherit_children_tvname = $modx->getOption(\'inherit_children_tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$emptyTpl = $modx->getOption(\'emptyTpl\', $scriptProperties, \'\'); 
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\', $inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }

        if (empty($outputvalue)) {
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)) {
                foreach ($inheritFrom as $from) {
                    if ($from == \'parents\') {
                        if (!empty($inherit_children_tvname)){
                            //try to get items from optional MIGX-TV for children
                            if ($inh_tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inherit_children_tvname))) {
                                $outputvalue = $inh_tv->processInheritBinding(\'\', $docid);    
                            }
                        }
                        $outputvalue = empty($outputvalue) ? $tv->processInheritBinding(\'\', $docid) : $outputvalue;
                    } else {
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)) {
                        break;
                    }
                }
            }
        }


        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)) {
            $migx->source->initialize();
        }

    }


}

if (empty($outputvalue)) {
    $modx->setPlaceholder($totalVar, 0);
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (empty($o) && !empty($emptyTpl)) {
    $template = $migx->getTemplate($emptyTpl);
    if ($template[$emptyTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$emptyTpl]);
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'mFilter2' => 
      array (
        'fields' => 
        array (
          'id' => 51,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mFilter2',
          'description' => '',
          'editor_type' => 0,
          'category' => 13,
          'cache_type' => 0,
          'snippet' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var mSearch2 $mSearch2 */
if (!$modx->loadClass(\'msearch2\', MODX_CORE_PATH . \'components/msearch2/model/msearch2/\', false, true)) {return false;}
$mSearch2 = new mSearch2($modx, $scriptProperties);
$mSearch2->initialize($modx->context->key);
$mSearch2->pdoTools->setConfig($scriptProperties);
$mSearch2->pdoTools->addTime(\'pdoTools loaded.\');
$savedProperties = array();

if (empty($queryVar)) {$queryVar = \'query\';}
if (empty($parentsVar)) {$parentsVar = \'parents\';}
if (empty($minQuery)) {$minQuery = $modx->getOption(\'index_min_words_length\', null, 3, true);}
if (empty($classActive)) {$classActive = \'active\';}
if (isset($scriptProperties[\'disableSuggestions\'])) {$scriptProperties[\'suggestions\'] = empty($scriptProperties[\'disableSuggestions\']);}
if (empty($toPlaceholders) && !empty($toPlaceholder)) {$toPlaceholders = $toPlaceholder;}
if (empty($plPrefix)) {$plPrefix = \'mse2_\';}
if (isset($_REQUEST[\'limit\']) && is_numeric($_REQUEST[\'limit\']) && abs($_REQUEST[\'limit\']) > 0) {$limit = abs($_REQUEST[\'limit\']);}
elseif (!isset($limit) || $limit === \'\') {$limit = 10;}
if (!isset($outputSeparator)) {$outputSeparator = "\\n";}
$fastMode = !empty($fastMode);
// All templates of filters are converted to lowercase
foreach ($scriptProperties as $k => $v) {
	if (strpos($k, \'tplFilter\') === 0) {
		$tmp = \'tplFilter.\' . strtolower(substr($k, 10));
		if ($tmp != $k) {
			unset($scriptProperties[$k]);
			$scriptProperties[$tmp] = $v;
		}
	}
}

$class = \'modResource\';
$output = array(\'filters\' => array(), \'results\' => array(), \'total\' => 0, \'limit\' => $limit);
$ids = $found = $log = $where = array();

// ---------------------- Retrieving ids of resources for filter
$query = !empty($_REQUEST[$queryVar])
	? $mSearch2->getQuery(rawurldecode($_REQUEST[$queryVar]))
	: \'\';

// Filter by ids
if (!empty($resources)) {
	$ids = array_map(\'trim\', explode(\',\', $resources));
}
elseif (isset($_REQUEST[$queryVar]) && empty($query)) {
	$output[\'results\'] =  $modx->lexicon(\'mse2_err_no_query\');
}
elseif (empty($query) && !empty($forceSearch)) {
	$output[\'results\'] = $modx->lexicon(\'mse2_err_no_query_var\');
}
elseif (isset($_REQUEST[$queryVar]) && !preg_match(\'/^[0-9]{2,}$/\', $query) && mb_strlen($query,\'UTF-8\') < $minQuery) {
	$output[\'results\'] = $modx->lexicon(\'mse2_err_min_query\');
}
elseif (isset($_REQUEST[$queryVar])) {
	$modx->setPlaceholder($plPrefix.$queryVar, $query);

	$found = $mSearch2->Search($query);
	$ids = array_keys($found);
    /*
	if (!empty($ids)) {
		$tmp = $scriptProperties;
		$tmp[\'returnIds\'] = 1;
		$tmp[\'resources\'] = implode(\',\', $ids);
		$tmp[\'parents\'] = $scriptProperties[\'parents\'];
		$tmp[\'limit\'] = 0;
        $mSearch2->pdoTools->addTime(\'Pass ids to the snippet \'.$scriptProperties[\'element\'].\': "\'.$tmp[\'resources\'].\'"\');
		$ids = explode(\',\', $modx->runSnippet($scriptProperties[\'element\'], $tmp));
		$mSearch2->pdoTools->addTime($scriptProperties[\'element\'] . \' returned ids: "\'.implode(\',\',$ids).\'"\');
	}
	if (empty($ids[0])) {
		$output[\'results\'] = $modx->lexicon(\'mse2_err_no_results\');
	}
    */
}

$modx->setPlaceholder($plPrefix.$queryVar, $query);

// Has error message - exit
if (!empty($output[\'results\'])) {
	$log = \'\';
	if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
		$log = \'<pre class="mFilterLog">\' . print_r($mSearch2->pdoTools->getTime(), 1) . \'</pre>\';
	}
	if (!empty($toSeparatePlaceholders)) {
		$output[\'log\'] = $log;
		$modx->setPlaceholders($output, $toSeparatePlaceholders);
		return;
	}
	elseif (!empty($toPlaceholders)) {
		$output[\'log\'] = $log;
		$modx->setPlaceholders($output, $toPlaceholders);
		return;
	}
	else {
		$output = $mSearch2->pdoTools->getChunk($scriptProperties[\'tplOuter\'], $output, $fastMode);
		$output .= $log;
		return $output;
	}
}

// ---------------------- Checking resources by status and custom "where" parameter
// Support for specifying property set in the element name
$elementName = $scriptProperties[\'element\'];
$elementSet = array();
if (strpos($elementName, \'@\') !== false) {
	list($elementName, $elementSet) = explode(\'@\', $elementName);
}
/** @var modSnippet $snippet */
if (!empty($elementName) && $element = $modx->getObject(\'modSnippet\', array(\'name\' => $elementName))) {
	$elementProperties = $element->getProperties();
	$elementPropertySet = !empty($elementSet)
		? $element->getPropertySet($elementSet)
		: array();
	if (!is_array($elementPropertySet)) {$elementPropertySet = array();}
	$params = array_merge(
		$elementProperties,
		$elementPropertySet,
		$scriptProperties,
		array(
			\'parents\' => empty($scriptProperties[$parentsVar]) && !empty($_REQUEST[$parentsVar])
				? $_REQUEST[$parentsVar]
				: $scriptProperties[$parentsVar],
			\'returnIds\' => 1,
			\'limit\' => 0,
		)
	);
	if (!empty($ids)) {
		$params[\'resources\'] = implode(\',\', $ids);
	}
	$element->setCacheable(false);
	if ($tmp = $element->process($params)) {
        $ids = explode(\',\', $tmp);
	}
	$mSearch2->pdoTools->addTime(\'Fetched \'.count($ids).\' ids for building filters from element "\'.$elementName.\'"\');
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'[mSearch2] Could not find main snippet with name: "\'.$elementName.\'"\');
	return \'\';
}

// ---------------------- Nothing to filter, exit
if (empty($ids)) {
    $log = $modx->user->hasSessionContext(\'mgr\') && !empty($showLog)
		? \'<pre class="mFilterLog">\' . print_r($mSearch2->pdoTools->getTime(), 1) . \'</pre>\'
        : \'\';
	$output = array_merge($output, array(
		\'filters\' => $modx->lexicon(\'mse2_err_no_filters\'),
		\'results\' => $modx->lexicon(\'mse2_err_no_results\'),
		\'log\' => $log
	));

	if (!empty($toSeparatePlaceholders)) {
		$modx->setPlaceholders($output, $toSeparatePlaceholders);
		return;
	}
	elseif (!empty($toPlaceholders)) {
		$modx->setPlaceholders($output, $toPlaceholders);
		return;
	}
	else {
		$output[\'results\'] .= $log;
		return $mSearch2->pdoTools->getChunk($scriptProperties[\'tplOuter\'], $output, $fastMode);
	}
}

// ---------------------- Checking for suggestions processing
// Checking by results count
if (!empty($scriptProperties[\'suggestionsMaxResults\']) && count($ids) > $scriptProperties[\'suggestionsMaxResults\']) {
	$scriptProperties[\'suggestions\'] = false;
	$mSearch2->pdoTools->addTime(\'Suggestions disabled by "suggestionsMaxResults" parameter: results count is \'.count($ids).\', max allowed is \'.$scriptProperties[\'suggestionsMaxResults\']);
}
else {
	$mSearch2->pdoTools->addTime(\'Total number of results: \'.count($ids));
}

// Then get filters
$mSearch2->pdoTools->addTime(\'Getting filters for \'.count($ids).\' ids\');
$filters = $mSearch2->getFilters($ids);
// And checking by filters count
$count = 0;
if (!empty($filters) && $scriptProperties[\'suggestions\']) {
    foreach ($filters as $tmp) {
        if (!is_array($tmp)) {continue;}
        $count += count(array_values($tmp));
    }
    if (!empty($scriptProperties[\'suggestionsMaxFilters\']) && $count > $scriptProperties[\'suggestionsMaxFilters\']) {
        $scriptProperties[\'suggestions\'] = false;
        $mSearch2->pdoTools->addTime(\'Suggestions disabled by "suggestionsMaxFilters" parameter: filters count is \'.$count.\', max allowed is \'.$scriptProperties[\'suggestionsMaxFilters\']);
    }
    else {
        $mSearch2->pdoTools->addTime(\'Total number of filters: \'.$count);
    }
}
$modx->setPlaceholder($plPrefix . \'filters_count\', $count );


// ---------------------- Loading results
$start_sort = implode(\',\', array_map(\'trim\' , explode(\',\', $scriptProperties[\'sort\'])));
$start_limit = 0;
$suggestions = array();
$page = $sort = \'\';

// Support for specifying property set in the paginator name
$paginatorName = $scriptProperties[\'paginator\'];
$paginatorSet = array();
if (strpos($paginatorName, \'@\') !== false) {
	list($paginatorName, $paginatorSet) = explode(\'@\', $paginatorName);
}

/** @var modSnippet $paginator */
if (!$paginator = $modx->getObject(\'modSnippet\', array(\'name\' => $paginatorName))) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'[mSearch2] Could not find pagination snippet with name: "\'.$paginatorName.\'"\');

    return \'\';
}
$paginatorProperties = $paginator->getProperties();
$paginatorPropertySet = !empty($paginatorSet)
    ? $paginator->getPropertySet($paginatorSet)
    : array();
if (!is_array($paginatorPropertySet)) {$paginatorPropertySet = array();}
$paginatorProperties = array_merge(
    $paginatorProperties,
    $paginatorPropertySet,
    $elementPropertySet,
    $scriptProperties,
    array(
        \'resources\' => implode(\',\', $ids),
        \'parents\' => \'0\',
        \'element\' => $elementName,
        \'defaultSort\' => $start_sort,
        \'toPlaceholder\' => false,
        \'limit\' => $limit,
        \'ajaxMode\' => \'\',
        \'ajax\' => 0,
        \'frontend_js\' => \'\',
        \'frontend_css\' => \'\',
    )
);

// Switching chunk for rows, if specified
if (!empty($scriptProperties[\'tpls\'])) {
    $tmp = isset($_REQUEST[\'tpl\']) ? (integer) $_REQUEST[\'tpl\'] : 0;
    $tpls = array_map(\'trim\', explode(\',\', $scriptProperties[\'tpls\']));
    $paginatorProperties[\'tpls\'] = $tpls;
    if (isset($tpls[$tmp])) {
        $paginatorProperties[\'tpl\'] = $tpls[$tmp];
        $paginatorProperties[\'tpl_idx\'] = $tmp;
    }
}

// Trying to save weight of found ids if using mSearch2
$weight = false;
if (!empty($found) && strtolower($elementName) == \'msearch2\') {
    $tmp = array();
    foreach ($ids as $v) {
        $tmp[$v] = isset($found[$v])
            ? $found[$v]
            : 0;
    }
    $paginatorProperties[\'resources\'] = $modx->toJSON($tmp);
    $weight = true;
}

if (!empty($_REQUEST[\'sort\'])) {$sort = $_REQUEST[\'sort\'];}
elseif (!empty($start_sort)) {$sort = $start_sort;}
/*
else {
    $sortby = !empty($scriptProperties[\'sortby\']) ? $scriptProperties[\'sortby\'] : \'\';
    if (!empty($sortby)) {
        $sortdir = !empty($scriptProperties[\'sortdir\']) ? $scriptProperties[\'sortdir\'] : \'asc\';
        $sort = $sortby.$mSearch2->config[\'method_delimeter\'].$sortdir;
    }
}*/
if (!empty($_REQUEST[$paginatorProperties[\'pageVarKey\']])) {
    $page = (int) $_REQUEST[$paginatorProperties[\'pageVarKey\']];
}
if (!empty($sort)) {
    $paginatorProperties[\'sortby\'] = $mSearch2->getSortFields($sort);
    $paginatorProperties[\'sortdir\'] = \'\';
}

$start_limit = !empty($scriptProperties[\'limit\'])
        ? $scriptProperties[\'limit\']
        : $paginatorProperties[\'limit\'];
$paginatorProperties[\'start_limit\'] = $start_limit;
$savedProperties[\'paginatorProperties\'] = $paginatorProperties;

// We have a delimiters in $_GET, so need to filter resources
if (strpos(implode(array_keys($_GET)), $mSearch2->config[\'filter_delimeter\']) !== false || !empty($mSearch2->aliases)) {
    $matched = $mSearch2->Filter($ids, $_REQUEST);
    $matched = array_intersect($ids, $matched);
    if ($scriptProperties[\'suggestions\']) {
        $suggestions = $mSearch2->getSuggestions($ids, $_REQUEST, $matched);
        $mSearch2->pdoTools->addTime(\'Suggestions retrieved.\');
    }
    // Trying to save weight of found ids again
    if ($weight) {
        $tmp = array();
        foreach ($matched as $v) {$tmp[$v] = isset($found[$v]) ? $found[$v] : 0;}
        $paginatorProperties[\'resources\'] = $modx->toJSON($tmp);
    }
    else {
        $paginatorProperties[\'resources\'] = implode(\',\', $matched);
    }
}
// Saving log
$log = $mSearch2->pdoTools->timings;
$mSearch2->pdoTools->timings = array();

//$paginator->setProperties($paginatorProperties);
$paginator->setCacheable(false);
$output[\'results\'] = !empty($paginatorProperties[\'resources\'])
    ? $paginator->process($paginatorProperties)
    : $modx->lexicon(\'mse2_err_no_results\');
$output[\'total\'] = $modx->getPlaceholder($paginatorProperties[\'totalVar\']);

// ----------------------  Loading filters
$mSearch2->pdoTools->timings = $log;
if (!empty($paginator)) {
	$mSearch2->pdoTools->addTime(\'Fired paginator: "\'.$paginatorName.\'"\');
}
else {
	$mSearch2->pdoTools->addTime(\'Could not find pagination snippet with name: "\'.$paginatorName.\'"\');
}
if (empty($filters)) {
	$mSearch2->pdoTools->addTime(\'No filters retrieved\');
	$output[\'filters\'] = $modx->lexicon(\'mse2_err_no_filters\');
	if (empty($output[\'results\'])) {$output[\'results\'] = $modx->lexicon(\'mse2_err_no_results\');}
}
else {
	$mSearch2->pdoTools->addTime(\'Filters retrieved\');
	$request = array();
	foreach ($_GET as $k => $v) {
		$tmp = explode($mSearch2->config[\'values_delimeter\'], $v);
		$request[$k] = array();
		foreach ($tmp as $v2) {
			$request[$k][] = str_replace(\'"\', \'&quot;\', $v2);
		}
	}

	$aliases = $mSearch2->aliases;
	foreach ($filters as $filter => $data) {
		if (empty($data) || !is_array($data)) {
			continue;
		}
		$rows = $has_active = \'\';
		list($table, $method) = explode($mSearch2->config[\'filter_delimeter\'], $filter);
		$filter_key = !empty($aliases[$filter])
			? $aliases[$filter]
			: $filter;

		$tplOuter = !empty($scriptProperties[\'tplFilter.outer.\' . $filter_key])
			? $scriptProperties[\'tplFilter.outer.\' . $filter_key]
			: $scriptProperties[\'tplFilter.outer.default\'];
		$tplRow = !empty($scriptProperties[\'tplFilter.row.\' . $filter_key])
			? $scriptProperties[\'tplFilter.row.\' . $filter_key]
			: $scriptProperties[\'tplFilter.row.default\'];
		$tplEmpty = !empty($scriptProperties[\'tplFilter.empty.\' . $filter_key])
			? $scriptProperties[\'tplFilter.empty.\' . $filter_key]
			: \'\';

		$idx = 0;
		foreach ($data as $v) {
			if (empty($v)) {continue;}
			$checked = isset($request[$filter_key]) && in_array((string)$v[\'value\'], $request[$filter_key], true) && isset($v[\'type\']) && $v[\'type\'] != \'number\';
			if ($scriptProperties[\'suggestions\']) {
				if ($checked) {
					$num = \'\';
					$has_active = \'has_active\';
				}
				elseif (isset($suggestions[$filter_key][$v[\'value\']])) {
					$num = $suggestions[$filter_key][$v[\'value\']];
				}
				else {
					$num = !empty($v[\'resources\'])
						? count($v[\'resources\'])
						: \'\';
				}
			}
			else {
				$num = \'\';
			}

			$rows .= $mSearch2->pdoTools->getChunk($tplRow, array(
				\'filter\' => $method,
				\'table\' => $table,
				\'title\' => $v[\'title\'],
				\'value\' => $v[\'value\'],
				\'type\' => $v[\'type\'],
				\'checked\' => $checked
					? \'checked\'
					: \'\',
				\'selected\' => $checked
					? \'selected\'
					: \'\',
				\'disabled\' => !$checked && empty($num) && $scriptProperties[\'suggestions\']
					? \'disabled\'
					: \'\',
				\'delimeter\' => $mSearch2->config[\'filter_delimeter\'],
				\'idx\' => $idx++,
				\'num\' => $num,
				\'filter_key\' => $filter_key,
			), $fastMode);
		}

		$tpl = empty($rows) ? $tplEmpty : $tplOuter;
		if (!isset($output[\'filters\'][$filter])) {
			$output[\'filters\'][$filter] = \'\';
		}
		$output[\'filters\'][$filter] = $mSearch2->pdoTools->getChunk($tpl, array(
			\'filter\' => $method,
			\'table\' => $table,
			\'rows\' => $rows,
			\'has_active\' => $has_active,
			\'delimeter\' => $mSearch2->config[\'filter_delimeter\'],
			\'filter_key\' => $filter_key,
		), $fastMode);
	}

	if (empty($output[\'filters\'])) {
		$output[\'filters\'] = $modx->lexicon(\'mse2_err_no_filters\');
		if (empty($output[\'results\'])) {$output[\'results\'] = $modx->lexicon(\'mse2_err_no_results\');}
	}
	else {
		$mSearch2->pdoTools->addTime(\'Filters templated\');
	}
}
$mSearch2->pdoTools->addTime(\'Total filter operations: \'.$mSearch2->filter_operations);

// Saving params into cache for ajax requests
$savedProperties[\'scriptProperties\'] = $scriptProperties;
$hash = sha1(serialize($savedProperties));
$_SESSION[\'mSearch2\'][$hash] = $savedProperties;

// Active class for sort links
if (!empty($sort)) {$output[$sort] = $classActive;}
if (isset($paginatorProperties[\'tpl_idx\'])) {
	$output[\'tpl\'.$paginatorProperties[\'tpl_idx\']] = $classActive;
	$output[\'tpls\'] = 1;
}

// Setting values for frontend javascript
$config = array(
	\'cssUrl\' => $mSearch2->config[\'cssUrl\'].\'web/\',
	\'jsUrl\' => $mSearch2->config[\'jsUrl\'].\'web/\',
	\'actionUrl\' => $mSearch2->config[\'actionUrl\'],
	\'queryVar\' => $mSearch2->config[\'queryVar\'],
	\'idVar\' => $modx->getOption(\'request_param_id\', null, \'id\'),
	\'filter_delimeter\' => $mSearch2->config[\'filter_delimeter\'],
	\'method_delimeter\' => $mSearch2->config[\'method_delimeter\'],
	\'values_delimeter\' => $mSearch2->config[\'values_delimeter\'],
	\'start_sort\' => $start_sort,
	\'start_limit\' => $start_limit,
	\'start_page\' => 1,
	\'start_tpl\' => \'\',
	\'sort\' => $sort == $start_sort ? \'\' : $sort,
	\'limit\' => $limit == $start_limit ? \'\' : $limit,
	\'page\' => $page,
	\'pageVar\' => $paginatorProperties[\'pageVarKey\'],
	\'tpl\' => !empty($paginatorProperties[\'tpl_idx\'])
			? $paginatorProperties[\'tpl_idx\']
			: \'\',
	\'parentsVar\' => $parentsVar,
	\'key\' => $hash,
	\'pageId\' => !empty($pageId) ? (integer) $pageId : $modx->resource->id,
	$queryVar => isset($_REQUEST[$queryVar]) ? $_REQUEST[$queryVar] : \'\',
	$parentsVar => isset($_REQUEST[$parentsVar]) ? $_REQUEST[$parentsVar] : \'\',
	\'aliases\' => array_flip($mSearch2->aliases),
	\'options\' => array(),
	\'mode\' => in_array($scriptProperties[\'ajaxMode\'], array(\'button\', \'scroll\')) ? $scriptProperties[\'ajaxMode\'] : \'\',
	\'moreText\' => $modx->lexicon(\'mse2_more\'),
);
if (!empty($scriptProperties[\'filterOptions\'])) {
	$filterOptions = $modx->fromJSON($scriptProperties[\'filterOptions\']);
	if (is_array($filterOptions)) {
		$config[\'filterOptions\'] = $filterOptions;
	}
}
if (empty($noJsConfig)) {
$modx->regClientStartupScript(\'
<script type="text/javascript">mse2Config = \' . json_encode($config) . \';</script>\', true);
}
if (empty($noJsInitialize)) {
$modx->regClientScript(\'
<script type="text/javascript">
    if ($("#mse2_mfilter").length) {
        if (window.location.hash != "" && mSearch2.Hash.oldbrowser()) {
            var uri = window.location.hash.replace("#", "?");
            window.location.href = document.location.pathname + uri;
        }
        else {
            mSearch2.initialize("body");
        }
    }
    </script>\', true);
}
$modx->setPlaceholders($config, $plPrefix);

// Prepare output
$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log = \'<pre class="mFilterLog">\' . print_r($mSearch2->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
	$modx->setPlaceholders($output[\'filters\'], $toSeparatePlaceholders);
	$output[\'log\'] = $log;
	if (is_array($output[\'filters\'])) {
		$output[\'filters\'] = implode($outputSeparator, $output[\'filters\']);
	}

	$pcre = \'#^\' . preg_quote($toSeparatePlaceholders) . \'(\\d+)$#\';
	$tmp = array();
	foreach ($modx->placeholders as $k => $v) {
		if (preg_match($pcre, $k)) {
			$tmp[] = $v;
		}
	}

	$output[\'results\'] = !empty($tmp)
		? implode($outputSeparator, $tmp)
		: $modx->lexicon(\'mse2_err_no_results\');

	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	if (is_array($output[\'filters\'])) {
		$output[\'filters\'] = implode($outputSeparator, $output[\'filters\']);
	}
	if (!empty($toPlaceholders)) {
		$output[\'log\'] = $log;
		$modx->setPlaceholders($output, $toPlaceholders);
	}
	else {
		$output = $mSearch2->pdoTools->getChunk($scriptProperties[\'tplOuter\'], $output, $fastMode);
		$output .= $log;

		return $output;
	}
}',
          'locked' => false,
          'properties' => 
          array (
            'paginator' => 
            array (
              'name' => 'paginator',
              'desc' => 'mse2_prop_paginator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'pdoPage',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Snippet for pagination, default is "getPage".',
              'area_trans' => '',
            ),
            'element' => 
            array (
              'name' => 'element',
              'desc' => 'mse2_prop_element',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'mSearch2',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Snippet, which will be called to output the results of work. Default is "mSearch2".',
              'area_trans' => '',
            ),
            'sort' => 
            array (
              'name' => 'sort',
              'desc' => 'mse2_prop_sort',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Comma separated list for sorting resources. It must be set in the form "table|field:direction". Default is "resource:publisedon:desc".',
              'area_trans' => '',
            ),
            'filters' => 
            array (
              'name' => 'filters',
              'desc' => 'mse2_prop_filters',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => 'resource|parent:parents',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Comma separated list of filters. It must be set as "table|field:method". Default is "resource|parent:parents".',
              'area_trans' => '',
            ),
            'aliases' => 
            array (
              'name' => 'aliases',
              'desc' => 'mse2_prop_aliases',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Comma separated list of aliases for filters that will be used in page URL. It must be set as "table|field==alias". For example: "resource|parent==category".',
              'area_trans' => '',
            ),
            'showEmptyFilters' => 
            array (
              'name' => 'showEmptyFilters',
              'desc' => 'mse2_prop_showEmptyFilters',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Show filters when it has the only one item.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'mse2_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'List of resources for output, separated by commas. This list can be filtered by other parameters such as "parents", "showDeleted", "showHidden" and "showUnpublished".',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'mse2_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Container list, separated by commas, to search results. By default, the query is limited to the current parent. If set to 0, query not limited.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'mse2_prop_depth',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'mse2_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.mFilter2.outer',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Chunk for the whole block of filters and the results.',
              'area_trans' => '',
            ),
            'tplFilter.outer.default' => 
            array (
              'name' => 'tplFilter.outer.default',
              'desc' => 'mse2_prop_tplFilter.outer.default',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.mFilter2.filter.outer',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Standard chunk of one filters group.',
              'area_trans' => '',
            ),
            'tplFilter.row.default' => 
            array (
              'name' => 'tplFilter.row.default',
              'desc' => 'mse2_prop_tplFilter.row.default',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.mFilter2.filter.checkbox',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Standard chunk of a filter in the group. By default it look as checkbox.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'mse2_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Show resources, that hidden in menu.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'mse2_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Show deleted resources.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'mse2_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Show unpublished resources.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'mse2_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Hide containers.',
              'area_trans' => '',
            ),
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'mse2_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Display additional information about snippet work. Only for authenticated in context "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'mse2_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'If enabled, then in chunk will be only received values ​​from the database. All raw tags of MODX, such as filters, snippets calls will be cut.',
              'area_trans' => '',
            ),
            'suggestions' => 
            array (
              'name' => 'suggestions',
              'desc' => 'mse2_prop_suggestions',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'If false, this option will disable the estimated number of results, which is displayed next to each filter. You can disable it if you are unhappy with filtration rate.',
              'area_trans' => '',
            ),
            'suggestionsMaxFilters' => 
            array (
              'name' => 'suggestionsMaxFilters',
              'desc' => 'mse2_prop_suggestionsMaxFilters',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 400,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'The maximum number of filters, which are preliminary results. If the filter would be more suggestions are turned off.',
              'area_trans' => '',
            ),
            'suggestionsMaxResults' => 
            array (
              'name' => 'suggestionsMaxResults',
              'desc' => 'mse2_prop_suggestionsMaxResults',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 2000,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'The maximum number of resources for which preliminary results of the work. If resources will more suggestions are turned off.',
              'area_trans' => '',
            ),
            'suggestionsRadio' => 
            array (
              'name' => 'suggestionsRadio',
              'desc' => 'mse2_prop_suggestionsRadio',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Comma separated list of radio filters. The suggestions for these groups of filters will not be summarized.',
              'area_trans' => '',
            ),
            'toPlaceholders' => 
            array (
              'name' => 'toPlaceholders',
              'desc' => 'mse2_prop_toPlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'If not empty, mFilter2 will save data in placeholders: "filters", "results" and "total" with prefix specified in this parameter. For example, you set &toPlaceholders=`my.` and will receive: [[+my.filters]], [[+my.results]] and [[+my.total]]',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'mse2_prop_toSeparatePlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Work the same as "&toPlaceholders" but placeholder "filters" split to separate placeholders with name of filter. For example, you set &toSeparatePlaceholders=`my.` and &filters=`tv|test,resource|pagetitle` - you receive placeholders: [[+my.results]], [[+my.total]], [[+my.tv|test]] and [[+my.resource|pagetitle]].',
              'area_trans' => '',
            ),
            'filter_delimeter' => 
            array (
              'name' => 'filter_delimeter',
              'desc' => 'mse2_prop_filter_delimeter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '|',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Delimiter of code name tables and fields of the filter. Default is "|"',
              'area_trans' => '',
            ),
            'method_delimeter' => 
            array (
              'name' => 'method_delimeter',
              'desc' => 'mse2_prop_method_delimeter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ':',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Delimiter of full filter name and the method of processing. Default is ":',
              'area_trans' => '',
            ),
            'values_delimeter' => 
            array (
              'name' => 'values_delimeter',
              'desc' => 'mse2_prop_values_delimeter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ',',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Delimiter of filter values in the address bar of the site. Default is ","',
              'area_trans' => '',
            ),
            'tpls' => 
            array (
              'name' => 'tpls',
              'desc' => 'mse2_prop_tpls',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Comma-separated list of available chunks for rows template. You can switch these chunks by specify parameter "tpl" in $_REQUEST. 0 is a chunk default, and then in order. For example: "&tpls=`default,chunk1,chunk2`", for output of goods by "chunk1" you need to send a "$_REQUEST[tpl] = 1".',
              'area_trans' => '',
            ),
            'forceSearch' => 
            array (
              'name' => 'forceSearch',
              'desc' => 'mse2_prop_forceSearch',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Search is required to display the results. If no search query - nothing displays.',
              'area_trans' => '',
            ),
            'fields' => 
            array (
              'name' => 'fields',
              'desc' => 'mse2_prop_fields',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'List of indexed fields of the resource to search for. Each field you can specify the search weight through colon.',
              'area_trans' => '',
            ),
            'onlyIndex' => 
            array (
              'name' => 'onlyIndex',
              'desc' => 'mse2_prop_onlyIndex',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Search by index words, without the addition of bonuses for exact phrases in a simple search through LIKE.',
              'area_trans' => '',
            ),
            'onlyAllWords' => 
            array (
              'name' => 'onlyAllWords',
              'desc' => 'mse2_prop_onlyAllWords',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Display only those resources that match all words of the search query.',
              'area_trans' => '',
            ),
            'showSearchLog' => 
            array (
              'name' => 'showSearchLog',
              'desc' => 'mse2_prop_showSearchLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Show detailed search log when showLog is enabled.',
              'area_trans' => '',
            ),
            'filterOptions' => 
            array (
              'name' => 'filterOptions',
              'desc' => 'mse2_prop_filterOptions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'JSON string with variables for javascript filter. For example: {"pagination":"#mse2_pagination", "selected_values_delimeter":", "}',
              'area_trans' => '',
            ),
            'suggestionsSliders' => 
            array (
              'name' => 'suggestionsSliders',
              'desc' => 'mse2_prop_suggestionsSliders',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Enable the work of the suggestions for the sliders. Increases the number of filtrations.',
              'area_trans' => '',
            ),
            'ajaxMode' => 
            array (
              'name' => 'ajaxMode',
              'desc' => 'mse2_prop_ajaxMode',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'Default',
                  'value' => '',
                  'name' => 'Default',
                ),
                1 => 
                array (
                  'text' => 'Scroll',
                  'value' => 'scroll',
                  'name' => 'Scroll',
                ),
                2 => 
                array (
                  'text' => 'Button',
                  'value' => 'button',
                  'name' => 'Button',
                ),
              ),
              'value' => '',
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Mode of ajax pagination: "default", "button" or "scroll".',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'mse2_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'msearch2:properties',
              'area' => '',
              'desc_trans' => 'Time of cache of filters that generated for current selected resources.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/msearch2/elements/snippets/snippet.mfilter2.php',
          'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var mSearch2 $mSearch2 */
if (!$modx->loadClass(\'msearch2\', MODX_CORE_PATH . \'components/msearch2/model/msearch2/\', false, true)) {return false;}
$mSearch2 = new mSearch2($modx, $scriptProperties);
$mSearch2->initialize($modx->context->key);
$mSearch2->pdoTools->setConfig($scriptProperties);
$mSearch2->pdoTools->addTime(\'pdoTools loaded.\');
$savedProperties = array();

if (empty($queryVar)) {$queryVar = \'query\';}
if (empty($parentsVar)) {$parentsVar = \'parents\';}
if (empty($minQuery)) {$minQuery = $modx->getOption(\'index_min_words_length\', null, 3, true);}
if (empty($classActive)) {$classActive = \'active\';}
if (isset($scriptProperties[\'disableSuggestions\'])) {$scriptProperties[\'suggestions\'] = empty($scriptProperties[\'disableSuggestions\']);}
if (empty($toPlaceholders) && !empty($toPlaceholder)) {$toPlaceholders = $toPlaceholder;}
if (empty($plPrefix)) {$plPrefix = \'mse2_\';}
if (isset($_REQUEST[\'limit\']) && is_numeric($_REQUEST[\'limit\']) && abs($_REQUEST[\'limit\']) > 0) {$limit = abs($_REQUEST[\'limit\']);}
elseif (!isset($limit) || $limit === \'\') {$limit = 10;}
if (!isset($outputSeparator)) {$outputSeparator = "\\n";}
$fastMode = !empty($fastMode);
// All templates of filters are converted to lowercase
foreach ($scriptProperties as $k => $v) {
	if (strpos($k, \'tplFilter\') === 0) {
		$tmp = \'tplFilter.\' . strtolower(substr($k, 10));
		if ($tmp != $k) {
			unset($scriptProperties[$k]);
			$scriptProperties[$tmp] = $v;
		}
	}
}

$class = \'modResource\';
$output = array(\'filters\' => array(), \'results\' => array(), \'total\' => 0, \'limit\' => $limit);
$ids = $found = $log = $where = array();

// ---------------------- Retrieving ids of resources for filter
$query = !empty($_REQUEST[$queryVar])
	? $mSearch2->getQuery(rawurldecode($_REQUEST[$queryVar]))
	: \'\';

// Filter by ids
if (!empty($resources)) {
	$ids = array_map(\'trim\', explode(\',\', $resources));
}
elseif (isset($_REQUEST[$queryVar]) && empty($query)) {
	$output[\'results\'] =  $modx->lexicon(\'mse2_err_no_query\');
}
elseif (empty($query) && !empty($forceSearch)) {
	$output[\'results\'] = $modx->lexicon(\'mse2_err_no_query_var\');
}
elseif (isset($_REQUEST[$queryVar]) && !preg_match(\'/^[0-9]{2,}$/\', $query) && mb_strlen($query,\'UTF-8\') < $minQuery) {
	$output[\'results\'] = $modx->lexicon(\'mse2_err_min_query\');
}
elseif (isset($_REQUEST[$queryVar])) {
	$modx->setPlaceholder($plPrefix.$queryVar, $query);

	$found = $mSearch2->Search($query);
	$ids = array_keys($found);
    /*
	if (!empty($ids)) {
		$tmp = $scriptProperties;
		$tmp[\'returnIds\'] = 1;
		$tmp[\'resources\'] = implode(\',\', $ids);
		$tmp[\'parents\'] = $scriptProperties[\'parents\'];
		$tmp[\'limit\'] = 0;
        $mSearch2->pdoTools->addTime(\'Pass ids to the snippet \'.$scriptProperties[\'element\'].\': "\'.$tmp[\'resources\'].\'"\');
		$ids = explode(\',\', $modx->runSnippet($scriptProperties[\'element\'], $tmp));
		$mSearch2->pdoTools->addTime($scriptProperties[\'element\'] . \' returned ids: "\'.implode(\',\',$ids).\'"\');
	}
	if (empty($ids[0])) {
		$output[\'results\'] = $modx->lexicon(\'mse2_err_no_results\');
	}
    */
}

$modx->setPlaceholder($plPrefix.$queryVar, $query);

// Has error message - exit
if (!empty($output[\'results\'])) {
	$log = \'\';
	if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
		$log = \'<pre class="mFilterLog">\' . print_r($mSearch2->pdoTools->getTime(), 1) . \'</pre>\';
	}
	if (!empty($toSeparatePlaceholders)) {
		$output[\'log\'] = $log;
		$modx->setPlaceholders($output, $toSeparatePlaceholders);
		return;
	}
	elseif (!empty($toPlaceholders)) {
		$output[\'log\'] = $log;
		$modx->setPlaceholders($output, $toPlaceholders);
		return;
	}
	else {
		$output = $mSearch2->pdoTools->getChunk($scriptProperties[\'tplOuter\'], $output, $fastMode);
		$output .= $log;
		return $output;
	}
}

// ---------------------- Checking resources by status and custom "where" parameter
// Support for specifying property set in the element name
$elementName = $scriptProperties[\'element\'];
$elementSet = array();
if (strpos($elementName, \'@\') !== false) {
	list($elementName, $elementSet) = explode(\'@\', $elementName);
}
/** @var modSnippet $snippet */
if (!empty($elementName) && $element = $modx->getObject(\'modSnippet\', array(\'name\' => $elementName))) {
	$elementProperties = $element->getProperties();
	$elementPropertySet = !empty($elementSet)
		? $element->getPropertySet($elementSet)
		: array();
	if (!is_array($elementPropertySet)) {$elementPropertySet = array();}
	$params = array_merge(
		$elementProperties,
		$elementPropertySet,
		$scriptProperties,
		array(
			\'parents\' => empty($scriptProperties[$parentsVar]) && !empty($_REQUEST[$parentsVar])
				? $_REQUEST[$parentsVar]
				: $scriptProperties[$parentsVar],
			\'returnIds\' => 1,
			\'limit\' => 0,
		)
	);
	if (!empty($ids)) {
		$params[\'resources\'] = implode(\',\', $ids);
	}
	$element->setCacheable(false);
	if ($tmp = $element->process($params)) {
        $ids = explode(\',\', $tmp);
	}
	$mSearch2->pdoTools->addTime(\'Fetched \'.count($ids).\' ids for building filters from element "\'.$elementName.\'"\');
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'[mSearch2] Could not find main snippet with name: "\'.$elementName.\'"\');
	return \'\';
}

// ---------------------- Nothing to filter, exit
if (empty($ids)) {
    $log = $modx->user->hasSessionContext(\'mgr\') && !empty($showLog)
		? \'<pre class="mFilterLog">\' . print_r($mSearch2->pdoTools->getTime(), 1) . \'</pre>\'
        : \'\';
	$output = array_merge($output, array(
		\'filters\' => $modx->lexicon(\'mse2_err_no_filters\'),
		\'results\' => $modx->lexicon(\'mse2_err_no_results\'),
		\'log\' => $log
	));

	if (!empty($toSeparatePlaceholders)) {
		$modx->setPlaceholders($output, $toSeparatePlaceholders);
		return;
	}
	elseif (!empty($toPlaceholders)) {
		$modx->setPlaceholders($output, $toPlaceholders);
		return;
	}
	else {
		$output[\'results\'] .= $log;
		return $mSearch2->pdoTools->getChunk($scriptProperties[\'tplOuter\'], $output, $fastMode);
	}
}

// ---------------------- Checking for suggestions processing
// Checking by results count
if (!empty($scriptProperties[\'suggestionsMaxResults\']) && count($ids) > $scriptProperties[\'suggestionsMaxResults\']) {
	$scriptProperties[\'suggestions\'] = false;
	$mSearch2->pdoTools->addTime(\'Suggestions disabled by "suggestionsMaxResults" parameter: results count is \'.count($ids).\', max allowed is \'.$scriptProperties[\'suggestionsMaxResults\']);
}
else {
	$mSearch2->pdoTools->addTime(\'Total number of results: \'.count($ids));
}

// Then get filters
$mSearch2->pdoTools->addTime(\'Getting filters for \'.count($ids).\' ids\');
$filters = $mSearch2->getFilters($ids);
// And checking by filters count
$count = 0;
if (!empty($filters) && $scriptProperties[\'suggestions\']) {
    foreach ($filters as $tmp) {
        if (!is_array($tmp)) {continue;}
        $count += count(array_values($tmp));
    }
    if (!empty($scriptProperties[\'suggestionsMaxFilters\']) && $count > $scriptProperties[\'suggestionsMaxFilters\']) {
        $scriptProperties[\'suggestions\'] = false;
        $mSearch2->pdoTools->addTime(\'Suggestions disabled by "suggestionsMaxFilters" parameter: filters count is \'.$count.\', max allowed is \'.$scriptProperties[\'suggestionsMaxFilters\']);
    }
    else {
        $mSearch2->pdoTools->addTime(\'Total number of filters: \'.$count);
    }
}
$modx->setPlaceholder($plPrefix . \'filters_count\', $count );


// ---------------------- Loading results
$start_sort = implode(\',\', array_map(\'trim\' , explode(\',\', $scriptProperties[\'sort\'])));
$start_limit = 0;
$suggestions = array();
$page = $sort = \'\';

// Support for specifying property set in the paginator name
$paginatorName = $scriptProperties[\'paginator\'];
$paginatorSet = array();
if (strpos($paginatorName, \'@\') !== false) {
	list($paginatorName, $paginatorSet) = explode(\'@\', $paginatorName);
}

/** @var modSnippet $paginator */
if (!$paginator = $modx->getObject(\'modSnippet\', array(\'name\' => $paginatorName))) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'[mSearch2] Could not find pagination snippet with name: "\'.$paginatorName.\'"\');

    return \'\';
}
$paginatorProperties = $paginator->getProperties();
$paginatorPropertySet = !empty($paginatorSet)
    ? $paginator->getPropertySet($paginatorSet)
    : array();
if (!is_array($paginatorPropertySet)) {$paginatorPropertySet = array();}
$paginatorProperties = array_merge(
    $paginatorProperties,
    $paginatorPropertySet,
    $elementPropertySet,
    $scriptProperties,
    array(
        \'resources\' => implode(\',\', $ids),
        \'parents\' => \'0\',
        \'element\' => $elementName,
        \'defaultSort\' => $start_sort,
        \'toPlaceholder\' => false,
        \'limit\' => $limit,
        \'ajaxMode\' => \'\',
        \'ajax\' => 0,
        \'frontend_js\' => \'\',
        \'frontend_css\' => \'\',
    )
);

// Switching chunk for rows, if specified
if (!empty($scriptProperties[\'tpls\'])) {
    $tmp = isset($_REQUEST[\'tpl\']) ? (integer) $_REQUEST[\'tpl\'] : 0;
    $tpls = array_map(\'trim\', explode(\',\', $scriptProperties[\'tpls\']));
    $paginatorProperties[\'tpls\'] = $tpls;
    if (isset($tpls[$tmp])) {
        $paginatorProperties[\'tpl\'] = $tpls[$tmp];
        $paginatorProperties[\'tpl_idx\'] = $tmp;
    }
}

// Trying to save weight of found ids if using mSearch2
$weight = false;
if (!empty($found) && strtolower($elementName) == \'msearch2\') {
    $tmp = array();
    foreach ($ids as $v) {
        $tmp[$v] = isset($found[$v])
            ? $found[$v]
            : 0;
    }
    $paginatorProperties[\'resources\'] = $modx->toJSON($tmp);
    $weight = true;
}

if (!empty($_REQUEST[\'sort\'])) {$sort = $_REQUEST[\'sort\'];}
elseif (!empty($start_sort)) {$sort = $start_sort;}
/*
else {
    $sortby = !empty($scriptProperties[\'sortby\']) ? $scriptProperties[\'sortby\'] : \'\';
    if (!empty($sortby)) {
        $sortdir = !empty($scriptProperties[\'sortdir\']) ? $scriptProperties[\'sortdir\'] : \'asc\';
        $sort = $sortby.$mSearch2->config[\'method_delimeter\'].$sortdir;
    }
}*/
if (!empty($_REQUEST[$paginatorProperties[\'pageVarKey\']])) {
    $page = (int) $_REQUEST[$paginatorProperties[\'pageVarKey\']];
}
if (!empty($sort)) {
    $paginatorProperties[\'sortby\'] = $mSearch2->getSortFields($sort);
    $paginatorProperties[\'sortdir\'] = \'\';
}

$start_limit = !empty($scriptProperties[\'limit\'])
        ? $scriptProperties[\'limit\']
        : $paginatorProperties[\'limit\'];
$paginatorProperties[\'start_limit\'] = $start_limit;
$savedProperties[\'paginatorProperties\'] = $paginatorProperties;

// We have a delimiters in $_GET, so need to filter resources
if (strpos(implode(array_keys($_GET)), $mSearch2->config[\'filter_delimeter\']) !== false || !empty($mSearch2->aliases)) {
    $matched = $mSearch2->Filter($ids, $_REQUEST);
    $matched = array_intersect($ids, $matched);
    if ($scriptProperties[\'suggestions\']) {
        $suggestions = $mSearch2->getSuggestions($ids, $_REQUEST, $matched);
        $mSearch2->pdoTools->addTime(\'Suggestions retrieved.\');
    }
    // Trying to save weight of found ids again
    if ($weight) {
        $tmp = array();
        foreach ($matched as $v) {$tmp[$v] = isset($found[$v]) ? $found[$v] : 0;}
        $paginatorProperties[\'resources\'] = $modx->toJSON($tmp);
    }
    else {
        $paginatorProperties[\'resources\'] = implode(\',\', $matched);
    }
}
// Saving log
$log = $mSearch2->pdoTools->timings;
$mSearch2->pdoTools->timings = array();

//$paginator->setProperties($paginatorProperties);
$paginator->setCacheable(false);
$output[\'results\'] = !empty($paginatorProperties[\'resources\'])
    ? $paginator->process($paginatorProperties)
    : $modx->lexicon(\'mse2_err_no_results\');
$output[\'total\'] = $modx->getPlaceholder($paginatorProperties[\'totalVar\']);

// ----------------------  Loading filters
$mSearch2->pdoTools->timings = $log;
if (!empty($paginator)) {
	$mSearch2->pdoTools->addTime(\'Fired paginator: "\'.$paginatorName.\'"\');
}
else {
	$mSearch2->pdoTools->addTime(\'Could not find pagination snippet with name: "\'.$paginatorName.\'"\');
}
if (empty($filters)) {
	$mSearch2->pdoTools->addTime(\'No filters retrieved\');
	$output[\'filters\'] = $modx->lexicon(\'mse2_err_no_filters\');
	if (empty($output[\'results\'])) {$output[\'results\'] = $modx->lexicon(\'mse2_err_no_results\');}
}
else {
	$mSearch2->pdoTools->addTime(\'Filters retrieved\');
	$request = array();
	foreach ($_GET as $k => $v) {
		$tmp = explode($mSearch2->config[\'values_delimeter\'], $v);
		$request[$k] = array();
		foreach ($tmp as $v2) {
			$request[$k][] = str_replace(\'"\', \'&quot;\', $v2);
		}
	}

	$aliases = $mSearch2->aliases;
	foreach ($filters as $filter => $data) {
		if (empty($data) || !is_array($data)) {
			continue;
		}
		$rows = $has_active = \'\';
		list($table, $method) = explode($mSearch2->config[\'filter_delimeter\'], $filter);
		$filter_key = !empty($aliases[$filter])
			? $aliases[$filter]
			: $filter;

		$tplOuter = !empty($scriptProperties[\'tplFilter.outer.\' . $filter_key])
			? $scriptProperties[\'tplFilter.outer.\' . $filter_key]
			: $scriptProperties[\'tplFilter.outer.default\'];
		$tplRow = !empty($scriptProperties[\'tplFilter.row.\' . $filter_key])
			? $scriptProperties[\'tplFilter.row.\' . $filter_key]
			: $scriptProperties[\'tplFilter.row.default\'];
		$tplEmpty = !empty($scriptProperties[\'tplFilter.empty.\' . $filter_key])
			? $scriptProperties[\'tplFilter.empty.\' . $filter_key]
			: \'\';

		$idx = 0;
		foreach ($data as $v) {
			if (empty($v)) {continue;}
			$checked = isset($request[$filter_key]) && in_array((string)$v[\'value\'], $request[$filter_key], true) && isset($v[\'type\']) && $v[\'type\'] != \'number\';
			if ($scriptProperties[\'suggestions\']) {
				if ($checked) {
					$num = \'\';
					$has_active = \'has_active\';
				}
				elseif (isset($suggestions[$filter_key][$v[\'value\']])) {
					$num = $suggestions[$filter_key][$v[\'value\']];
				}
				else {
					$num = !empty($v[\'resources\'])
						? count($v[\'resources\'])
						: \'\';
				}
			}
			else {
				$num = \'\';
			}

			$rows .= $mSearch2->pdoTools->getChunk($tplRow, array(
				\'filter\' => $method,
				\'table\' => $table,
				\'title\' => $v[\'title\'],
				\'value\' => $v[\'value\'],
				\'type\' => $v[\'type\'],
				\'checked\' => $checked
					? \'checked\'
					: \'\',
				\'selected\' => $checked
					? \'selected\'
					: \'\',
				\'disabled\' => !$checked && empty($num) && $scriptProperties[\'suggestions\']
					? \'disabled\'
					: \'\',
				\'delimeter\' => $mSearch2->config[\'filter_delimeter\'],
				\'idx\' => $idx++,
				\'num\' => $num,
				\'filter_key\' => $filter_key,
			), $fastMode);
		}

		$tpl = empty($rows) ? $tplEmpty : $tplOuter;
		if (!isset($output[\'filters\'][$filter])) {
			$output[\'filters\'][$filter] = \'\';
		}
		$output[\'filters\'][$filter] = $mSearch2->pdoTools->getChunk($tpl, array(
			\'filter\' => $method,
			\'table\' => $table,
			\'rows\' => $rows,
			\'has_active\' => $has_active,
			\'delimeter\' => $mSearch2->config[\'filter_delimeter\'],
			\'filter_key\' => $filter_key,
		), $fastMode);
	}

	if (empty($output[\'filters\'])) {
		$output[\'filters\'] = $modx->lexicon(\'mse2_err_no_filters\');
		if (empty($output[\'results\'])) {$output[\'results\'] = $modx->lexicon(\'mse2_err_no_results\');}
	}
	else {
		$mSearch2->pdoTools->addTime(\'Filters templated\');
	}
}
$mSearch2->pdoTools->addTime(\'Total filter operations: \'.$mSearch2->filter_operations);

// Saving params into cache for ajax requests
$savedProperties[\'scriptProperties\'] = $scriptProperties;
$hash = sha1(serialize($savedProperties));
$_SESSION[\'mSearch2\'][$hash] = $savedProperties;

// Active class for sort links
if (!empty($sort)) {$output[$sort] = $classActive;}
if (isset($paginatorProperties[\'tpl_idx\'])) {
	$output[\'tpl\'.$paginatorProperties[\'tpl_idx\']] = $classActive;
	$output[\'tpls\'] = 1;
}

// Setting values for frontend javascript
$config = array(
	\'cssUrl\' => $mSearch2->config[\'cssUrl\'].\'web/\',
	\'jsUrl\' => $mSearch2->config[\'jsUrl\'].\'web/\',
	\'actionUrl\' => $mSearch2->config[\'actionUrl\'],
	\'queryVar\' => $mSearch2->config[\'queryVar\'],
	\'idVar\' => $modx->getOption(\'request_param_id\', null, \'id\'),
	\'filter_delimeter\' => $mSearch2->config[\'filter_delimeter\'],
	\'method_delimeter\' => $mSearch2->config[\'method_delimeter\'],
	\'values_delimeter\' => $mSearch2->config[\'values_delimeter\'],
	\'start_sort\' => $start_sort,
	\'start_limit\' => $start_limit,
	\'start_page\' => 1,
	\'start_tpl\' => \'\',
	\'sort\' => $sort == $start_sort ? \'\' : $sort,
	\'limit\' => $limit == $start_limit ? \'\' : $limit,
	\'page\' => $page,
	\'pageVar\' => $paginatorProperties[\'pageVarKey\'],
	\'tpl\' => !empty($paginatorProperties[\'tpl_idx\'])
			? $paginatorProperties[\'tpl_idx\']
			: \'\',
	\'parentsVar\' => $parentsVar,
	\'key\' => $hash,
	\'pageId\' => !empty($pageId) ? (integer) $pageId : $modx->resource->id,
	$queryVar => isset($_REQUEST[$queryVar]) ? $_REQUEST[$queryVar] : \'\',
	$parentsVar => isset($_REQUEST[$parentsVar]) ? $_REQUEST[$parentsVar] : \'\',
	\'aliases\' => array_flip($mSearch2->aliases),
	\'options\' => array(),
	\'mode\' => in_array($scriptProperties[\'ajaxMode\'], array(\'button\', \'scroll\')) ? $scriptProperties[\'ajaxMode\'] : \'\',
	\'moreText\' => $modx->lexicon(\'mse2_more\'),
);
if (!empty($scriptProperties[\'filterOptions\'])) {
	$filterOptions = $modx->fromJSON($scriptProperties[\'filterOptions\']);
	if (is_array($filterOptions)) {
		$config[\'filterOptions\'] = $filterOptions;
	}
}
if (empty($noJsConfig)) {
$modx->regClientStartupScript(\'
<script type="text/javascript">mse2Config = \' . json_encode($config) . \';</script>\', true);
}
if (empty($noJsInitialize)) {
$modx->regClientScript(\'
<script type="text/javascript">
    if ($("#mse2_mfilter").length) {
        if (window.location.hash != "" && mSearch2.Hash.oldbrowser()) {
            var uri = window.location.hash.replace("#", "?");
            window.location.href = document.location.pathname + uri;
        }
        else {
            mSearch2.initialize("body");
        }
    }
    </script>\', true);
}
$modx->setPlaceholders($config, $plPrefix);

// Prepare output
$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log = \'<pre class="mFilterLog">\' . print_r($mSearch2->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
	$modx->setPlaceholders($output[\'filters\'], $toSeparatePlaceholders);
	$output[\'log\'] = $log;
	if (is_array($output[\'filters\'])) {
		$output[\'filters\'] = implode($outputSeparator, $output[\'filters\']);
	}

	$pcre = \'#^\' . preg_quote($toSeparatePlaceholders) . \'(\\d+)$#\';
	$tmp = array();
	foreach ($modx->placeholders as $k => $v) {
		if (preg_match($pcre, $k)) {
			$tmp[] = $v;
		}
	}

	$output[\'results\'] = !empty($tmp)
		? implode($outputSeparator, $tmp)
		: $modx->lexicon(\'mse2_err_no_results\');

	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	if (is_array($output[\'filters\'])) {
		$output[\'filters\'] = implode($outputSeparator, $output[\'filters\']);
	}
	if (!empty($toPlaceholders)) {
		$output[\'log\'] = $log;
		$modx->setPlaceholders($output, $toPlaceholders);
	}
	else {
		$output = $mSearch2->pdoTools->getChunk($scriptProperties[\'tplOuter\'], $output, $fastMode);
		$output .= $log;

		return $output;
	}
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'BannerY' => 
      array (
        'fields' => 
        array (
          'id' => 52,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'BannerY',
          'description' => 'Show ads on your site',
          'editor_type' => 0,
          'category' => 15,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
if (!$modx->getService(\'pdoFetch\')) {return \'You need to install pdoTools to use this snippet!\';}
$pdoFetch = new pdoFetch($modx, $scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');
$modx->lexicon->load(\'bannery:default\');
$modx->addPackage(\'bannery\', MODX_CORE_PATH . \'components/bannery/model/\');

if (!empty($tplOuter)) {$tplWrapper = $tplOuter;}
if (empty($outputSeparator)) {$outputSeparator = "\\n";}
$class = \'byAd\';

// Adding extra parameters into special place so we can put them in results
/** @var modSnippet $snippet */
$additionalPlaceholders = array();
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'BannerY\'))) {
	$properties = unserialize($snippet->properties);
	foreach ($scriptProperties as $k => $v) {
		if (!isset($properties[$k])) {
			$additionalPlaceholders[$k] = $v;
		}
	}
}
// ---

$date = date(\'Y-m-d H:i:s\');
$where = array(
	"({$class}.start IS NULL OR {$class}.start <= \'{$date}\') AND ({$class}.end IS NULL OR {$class}.end >= \'{$date}\')"
);
if (empty($showInactive)) {
	$where[$class.\'.active\'] = 1;
}
if (!empty($position)) {
	$where[\'byAdPosition.position\'] = $position;
}
elseif (!empty($positions)) {
	$where[\'byAdPosition.position:IN\'] = array_map(\'trim\', explode(\',\', $positions));
}

if (empty($sortby)) {
	$sortby = \'RAND()\';
}
elseif ($sortby == \'idx\' || $sortby == \'index\') {
	$sortby = \'byAdPosition.idx\';
}
else {
	$sortby = $class.\'.\'.$sortby;
}

$innerJoin = array(
	\'byAdPosition\' => array(
		\'alias\' => \'byAdPosition\',
		\'on\' => $class.\'.id = byAdPosition.ad\'
	)
);

// Fields to select
$select = array(
	$class => \'all\',
	\'byAdPosition\' => \'`byAdPosition`.`id` as `adposition`, `byAdPosition`.`ad`\'
);

// Add custom parameters
foreach (array(\'where\',\'innerJoin\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $sortby,
	\'groupby\' => $class.\'.id\',
	\'return\' => \'data\',
	\'disableConditions\' => true,
);

$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$rows = $pdoFetch->run();

$output = array();
$default_source = $modx->getOption(\'bannery_media_source\', null, $modx->getOption(\'default_media_source\'), true);
$sources = array();
foreach ($rows as $row) {
	$source = !empty($row[\'source\'])
		? $row[\'source\']
		: $default_source;

	if (!isset($sources[$row[\'source\']])) {
		/** @var modMediaSource $source */
		if ($source = $modx->getObject(\'sources.modMediaSource\', $source)) {
			$source->initialize($modx->context->key);
		}
		$sources[$row[\'source\']] = $source;
	}
	else {
		$source = $sources[$row[\'source\']];
	}

	if (!empty($source) && $source instanceof modMediaSource && !empty($row[\'image\'])) {
		$row[\'image\'] = $source->getObjectUrl($row[\'image\']);
	}

	$row[\'idx\'] = $pdoFetch->idx++;
	$tpl = $pdoFetch->defineChunk($row);
	if (!empty($additionalPlaceholders)) {
		$row = array_merge($additionalPlaceholders, $row);
	}

	$output[] = !empty($tpl)
		? $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\'])
		: \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\';
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output[\'log\'] = \'<pre class="pdoUsersLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
          'locked' => false,
          'properties' => 
          array (
            'positions' => 
            array (
              'name' => 'positions',
              'desc' => 'bannery_prop_positions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'Comma separated list of ads positions.',
              'area_trans' => '',
            ),
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'bannery_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'If true, snippet will add detailed log of query for managers.',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'bannery_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'Fast chunks processing. If true, MODX parser will not be used and unprocessed tags will be cut.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'bannery_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 5,
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'If set to non-zero, will only show X number of items.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'bannery_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'An offset of items returned by the criteria to skip.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'bannery_prop_sortby',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'Random',
                  'value' => 'RAND()',
                  'name' => 'Random',
                ),
                1 => 
                array (
                  'text' => 'Index',
                  'value' => 'idx',
                  'name' => 'Index',
                ),
                2 => 
                array (
                  'text' => 'Name',
                  'value' => 'name',
                  'name' => 'Name',
                ),
                3 => 
                array (
                  'text' => 'Url',
                  'value' => 'url',
                  'name' => 'Url',
                ),
                4 => 
                array (
                  'text' => 'Image',
                  'value' => 'image',
                  'name' => 'Image',
                ),
                5 => 
                array (
                  'text' => 'Active',
                  'value' => 'active',
                  'name' => 'Active',
                ),
                6 => 
                array (
                  'text' => 'Description',
                  'value' => 'description',
                  'name' => 'Description',
                ),
              ),
              'value' => 'RAND()',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'Return results in specified order. It can be any field of byAd, "RAND()" or "idx" - index of ad in position.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'bannery_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'Order of the results',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'bannery_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'An optional string to separate each tpl instance.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'bannery_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'A JSON-style expression of criteria to build any additional where clauses from.',
              'area_trans' => '',
            ),
            'showInactive' => 
            array (
              'name' => 'showInactive',
              'desc' => 'bannery_prop_showInactive',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'Show an inactive items.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'bannery_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'byAd',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a item template. If not provided, properties are dumped to output for each item.',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'bannery_prop_tplFirst',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as item template for the first item.',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'bannery_prop_tplLast',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as item template for the last item.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'bannery_prop_tplOdd',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as item template for items with an odd idx value (see idx property).',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'bannery_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a wrapper template for the output. This does not work with toSeparatePlaceholders.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'bannery_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'If true, will output the wrapper specified in &tplWrapper even if the output is empty.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'bannery_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'bannery_prop_toSeparatePlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'bannery:properties',
              'area' => '',
              'desc_trans' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/bannery/elements/snippets/snippet.bannery.php',
          'content' => '/** @var array $scriptProperties */
/* @var pdoFetch $pdoFetch */
if (!$modx->getService(\'pdoFetch\')) {return \'You need to install pdoTools to use this snippet!\';}
$pdoFetch = new pdoFetch($modx, $scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');
$modx->lexicon->load(\'bannery:default\');
$modx->addPackage(\'bannery\', MODX_CORE_PATH . \'components/bannery/model/\');

if (!empty($tplOuter)) {$tplWrapper = $tplOuter;}
if (empty($outputSeparator)) {$outputSeparator = "\\n";}
$class = \'byAd\';

// Adding extra parameters into special place so we can put them in results
/** @var modSnippet $snippet */
$additionalPlaceholders = array();
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'BannerY\'))) {
	$properties = unserialize($snippet->properties);
	foreach ($scriptProperties as $k => $v) {
		if (!isset($properties[$k])) {
			$additionalPlaceholders[$k] = $v;
		}
	}
}
// ---

$date = date(\'Y-m-d H:i:s\');
$where = array(
	"({$class}.start IS NULL OR {$class}.start <= \'{$date}\') AND ({$class}.end IS NULL OR {$class}.end >= \'{$date}\')"
);
if (empty($showInactive)) {
	$where[$class.\'.active\'] = 1;
}
if (!empty($position)) {
	$where[\'byAdPosition.position\'] = $position;
}
elseif (!empty($positions)) {
	$where[\'byAdPosition.position:IN\'] = array_map(\'trim\', explode(\',\', $positions));
}

if (empty($sortby)) {
	$sortby = \'RAND()\';
}
elseif ($sortby == \'idx\' || $sortby == \'index\') {
	$sortby = \'byAdPosition.idx\';
}
else {
	$sortby = $class.\'.\'.$sortby;
}

$innerJoin = array(
	\'byAdPosition\' => array(
		\'alias\' => \'byAdPosition\',
		\'on\' => $class.\'.id = byAdPosition.ad\'
	)
);

// Fields to select
$select = array(
	$class => \'all\',
	\'byAdPosition\' => \'`byAdPosition`.`id` as `adposition`, `byAdPosition`.`ad`\'
);

// Add custom parameters
foreach (array(\'where\',\'innerJoin\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $sortby,
	\'groupby\' => $class.\'.id\',
	\'return\' => \'data\',
	\'disableConditions\' => true,
);

$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$rows = $pdoFetch->run();

$output = array();
$default_source = $modx->getOption(\'bannery_media_source\', null, $modx->getOption(\'default_media_source\'), true);
$sources = array();
foreach ($rows as $row) {
	$source = !empty($row[\'source\'])
		? $row[\'source\']
		: $default_source;

	if (!isset($sources[$row[\'source\']])) {
		/** @var modMediaSource $source */
		if ($source = $modx->getObject(\'sources.modMediaSource\', $source)) {
			$source->initialize($modx->context->key);
		}
		$sources[$row[\'source\']] = $source;
	}
	else {
		$source = $sources[$row[\'source\']];
	}

	if (!empty($source) && $source instanceof modMediaSource && !empty($row[\'image\'])) {
		$row[\'image\'] = $source->getObjectUrl($row[\'image\']);
	}

	$row[\'idx\'] = $pdoFetch->idx++;
	$tpl = $pdoFetch->defineChunk($row);
	if (!empty($additionalPlaceholders)) {
		$row = array_merge($additionalPlaceholders, $row);
	}

	$output[] = !empty($tpl)
		? $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\'])
		: \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\';
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output[\'log\'] = \'<pre class="pdoUsersLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'AjaxForm' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'AjaxForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var AjaxForm $AjaxForm */
if (!$modx->loadClass(\'ajaxform\', MODX_CORE_PATH . \'components/ajaxform/model/ajaxform/\', false, true)) {
    return false;
}
$AjaxForm = new AjaxForm($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.AjaxForm.example\', true);
$formSelector = $modx->getOption(\'formSelector\', $scriptProperties, \'ajax_form\', true);
$objectName = $modx->getOption(\'objectName\', $scriptProperties, \'AjaxForm\', true);
$AjaxForm->loadJsCss($objectName);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon(\'af_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add selector to tag form
if (preg_match(\'#<form.*?class=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content, $matches)) {
    $classes = explode(\' \', $matches[1]);
    if (!in_array($formSelector, $classes)) {
        $classes[] = $formSelector;
        $classes = preg_replace(
            \'#class=(?:"|\\\')\' . $matches[1] . \'(?:"|\\\')#i\',
            \'class="\' . implode(\' \', $classes) . \'"\',
            $matches[0]
        );
        $content = str_ireplace($matches[0], $classes, $content);
    }
} else {
    $content = str_ireplace(\'<form\', \'<form class="\' . $formSelector . \'"\', $content);
}

// Add method = post
if (preg_match(\'#<form.*?method=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content)) {
    $content = preg_replace(\'#<form(.*?)method=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\1method="post"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$hash = md5(http_build_query($scriptProperties));
$action = \'<input type="hidden" name="af_action" value="\' . $hash . \'" />\';
if ((stripos($content, \'</form>\') !== false)) {
    if (preg_match(\'#<input.*?name=(?:"|\\\')af_action(?:"|\\\').*?>#i\', $content, $matches)) {
        $content = str_ireplace($matches[0], \'\', $content);
    }
    $content = str_ireplace(\'</form>\', "\\n\\t$action\\n</form>", $content);
}

// Save settings to user`s session
$_SESSION[\'AjaxForm\'][$hash] = $scriptProperties;

// Call snippet for preparation of form
$action = !empty($_REQUEST[\'af_action\'])
    ? $_REQUEST[\'af_action\']
    : $hash;

$AjaxForm->process($action, $_REQUEST);

// Return chunk
return $content;',
          'locked' => false,
          'properties' => 
          array (
            'form' => 
            array (
              'name' => 'form',
              'desc' => 'ajaxform_prop_form',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.AjaxForm.example',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Chunk with form for submit.',
              'area_trans' => '',
            ),
            'snippet' => 
            array (
              'name' => 'snippet',
              'desc' => 'ajaxform_prop_snippet',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'FormIt',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Snippet, that will process specified form.',
              'area_trans' => '',
            ),
            'frontend_css' => 
            array (
              'name' => 'frontend_css',
              'desc' => 'ajaxform_prop_frontend_css',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]css/default.css',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'File with css styles for frontend.',
              'area_trans' => '',
            ),
            'frontend_js' => 
            array (
              'name' => 'frontend_js',
              'desc' => 'ajaxform_prop_frontend_js',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]js/default.js',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'File with javascript for frontend.',
              'area_trans' => '',
            ),
            'actionUrl' => 
            array (
              'name' => 'actionUrl',
              'desc' => 'ajaxform_prop_actionUrl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]action.php',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Connector to handle ajax requests.',
              'area_trans' => '',
            ),
            'formSelector' => 
            array (
              'name' => 'formSelector',
              'desc' => 'ajaxform_prop_formSelector',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'ajax_form',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Еhe name of the CSS class that will be used as a jQuery selector to initialize the form. Default is "ajax_form".',
              'area_trans' => '',
            ),
            'objectName' => 
            array (
              'name' => 'objectName',
              'desc' => 'ajaxform_prop_objectName',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'AjaxForm',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'The name of the object to initialize in javascript. Default is "AjaxForm".',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/ajaxform/elements/snippets/snippet.ajaxform.php',
          'content' => '/** @var array $scriptProperties */
/** @var AjaxForm $AjaxForm */
if (!$modx->loadClass(\'ajaxform\', MODX_CORE_PATH . \'components/ajaxform/model/ajaxform/\', false, true)) {
    return false;
}
$AjaxForm = new AjaxForm($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.AjaxForm.example\', true);
$formSelector = $modx->getOption(\'formSelector\', $scriptProperties, \'ajax_form\', true);
$objectName = $modx->getOption(\'objectName\', $scriptProperties, \'AjaxForm\', true);
$AjaxForm->loadJsCss($objectName);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon(\'af_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add selector to tag form
if (preg_match(\'#<form.*?class=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content, $matches)) {
    $classes = explode(\' \', $matches[1]);
    if (!in_array($formSelector, $classes)) {
        $classes[] = $formSelector;
        $classes = preg_replace(
            \'#class=(?:"|\\\')\' . $matches[1] . \'(?:"|\\\')#i\',
            \'class="\' . implode(\' \', $classes) . \'"\',
            $matches[0]
        );
        $content = str_ireplace($matches[0], $classes, $content);
    }
} else {
    $content = str_ireplace(\'<form\', \'<form class="\' . $formSelector . \'"\', $content);
}

// Add method = post
if (preg_match(\'#<form.*?method=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content)) {
    $content = preg_replace(\'#<form(.*?)method=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\1method="post"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$hash = md5(http_build_query($scriptProperties));
$action = \'<input type="hidden" name="af_action" value="\' . $hash . \'" />\';
if ((stripos($content, \'</form>\') !== false)) {
    if (preg_match(\'#<input.*?name=(?:"|\\\')af_action(?:"|\\\').*?>#i\', $content, $matches)) {
        $content = str_ireplace($matches[0], \'\', $content);
    }
    $content = str_ireplace(\'</form>\', "\\n\\t$action\\n</form>", $content);
}

// Save settings to user`s session
$_SESSION[\'AjaxForm\'][$hash] = $scriptProperties;

// Call snippet for preparation of form
$action = !empty($_REQUEST[\'af_action\'])
    ? $_REQUEST[\'af_action\']
    : $hash;

$AjaxForm->process($action, $_REQUEST);

// Return chunk
return $content;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'addTestimonials' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'option',
          'name' => 'addTestimonials',
          'caption' => 'Add testimonials?',
          'description' => '',
          'editor_type' => 0,
          'category' => 21,
          'locked' => false,
          'elements' => 'Show==Yes||Hide==No',
          'rank' => 0,
          'display' => 'default',
          'default_text' => 'Hide==No',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'columns' => '1',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => 'Hide==No',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);