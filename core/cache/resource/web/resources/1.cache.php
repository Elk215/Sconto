<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Home',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'home',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1535988902,
    'editedby' => 1,
    'editedon' => 1537094956,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'home',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'manufacturers' => 
    array (
      0 => 'manufacturers',
      1 => '[{"MIGX_id":"8","partnerImage":"assets\\/sconto\\/assets\\/images\\/partners\\/dark\\/partner1.png"},{"MIGX_id":"9","partnerImage":"assets\\/sconto\\/assets\\/images\\/partners\\/dark\\/partner2.png"},{"MIGX_id":"10","partnerImage":"assets\\/sconto\\/assets\\/images\\/partners\\/dark\\/partner3.png"},{"MIGX_id":"11","partnerImage":"assets\\/sconto\\/assets\\/images\\/partners\\/dark\\/partner4.png"},{"MIGX_id":"12","partnerImage":"assets\\/sconto\\/assets\\/images\\/partners\\/dark\\/partner5.png"},{"MIGX_id":"13","partnerImage":"assets\\/sconto\\/assets\\/images\\/partners\\/dark\\/partner6.png"},{"MIGX_id":"14","partnerImage":"assets\\/sconto\\/assets\\/images\\/partners\\/dark\\/partner7.png"}]',
      2 => 'default',
      3 => NULL,
      4 => 'migx',
    ),
    'homeSlider' => 
    array (
      0 => 'homeSlider',
      1 => '[{"MIGX_id":"1","homeSliderTitle":"Smartphone","homeSliderTitle2":"Bigger Display<br>Experience","homeSliderText":"This device is the perfect size for <br>all your multitasking needs.","homeSliderButton":"Discover","homeSliderButtonLink":"http:\\/\\/google","homeSliderImage":"assets\\/sconto\\/assets\\/images\\/homesliders\\/index5\\/slide1.jpg"},{"MIGX_id":"4","homeSliderTitle":"Smart watch","homeSliderTitle2":"Customize Your<br>Experience","homeSliderText":"A classic watch should stand the <br>test of time.","homeSliderButton":"Shop now","homeSliderButtonLink":"","homeSliderImage":"assets\\/sconto\\/assets\\/images\\/homesliders\\/index5\\/slide2.jpg"}]',
      2 => 'default',
      3 => NULL,
      4 => 'migx',
    ),
    'addTestimonials' => 
    array (
      0 => 'addTestimonials',
      1 => 'Yes',
      2 => 'default',
      3 => NULL,
      4 => 'option',
    ),
    'categoryIcon' => 
    array (
      0 => 'categoryIcon',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'categoryIconBig' => 
    array (
      0 => 'categoryIconBig',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '{include "file:templates/index.tpl"}',
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
                    &outerClass=`menu`]]' => '<ul class="menu"><li class="first open"><a href="/">Home</a></li><li><a href="catalog">Catalog</a></li><li><a href="about-us">About us</a></li><li class="last"><a href="contact">Contact Us</a></li></ul>',
    '[[pdoMenu?
                    &parents=`0`
                    &level=`1`
                    &resources=`1,8,6,5`
                    &sortby=``
                    &tplOuter=`@INLINE <ul[[+classes]]>[[+wrapper]]</ul>`
                    &tpl=`@INLINE <li[[+classes]]><a href="[[+link]]">[[+menutitle]]</a></li>`
                    &hereClass=`open`
                    &outerClass=`mobile-menu`]]' => '<ul class="mobile-menu"><li class="first open"><a href="/">Home</a></li><li><a href="catalog">Catalog</a></li><li><a href="about-us">About us</a></li><li class="last"><a href="contact">Contact Us</a></li></ul>',
    '[[getImageList?
                                        &tvname=`homeSlider`
                                        &tpl=`@CODE:
                                        <div class="swiper-slide banner v5"><img src="[[+homeSliderImage]]" class="banner-bg" alt="Banner">
                                            <div class="banner-content banner-contentbg">
                                                <h4>[[+homeSliderTitle]]</h4>
                                                <h3>[[+homeSliderTitle2]]</h3>
                                                <p>[[+homeSliderText]]</p>
                                                <a href="[[+homeSliderButtonLink]]" class="btn btn-custom">[[+homeSliderButton]]</a>
                                            </div>
                                        </div>
                                        `]]' => '
                                        <div class="swiper-slide banner v5"><img src="assets/sconto/assets/images/homesliders/index5/slide1.jpg" class="banner-bg" alt="Banner">
                                            <div class="banner-content banner-contentbg">
                                                <h4>Smartphone</h4>
                                                <h3>Bigger Display<br>Experience</h3>
                                                <p>This device is the perfect size for <br>all your multitasking needs.</p>
                                                <a href="http://google" class="btn btn-custom">Discover</a>
                                            </div>
                                        </div>
                                        
                                        <div class="swiper-slide banner v5"><img src="assets/sconto/assets/images/homesliders/index5/slide2.jpg" class="banner-bg" alt="Banner">
                                            <div class="banner-content banner-contentbg">
                                                <h4>Smart watch</h4>
                                                <h3>Customize Your<br>Experience</h3>
                                                <p>A classic watch should stand the <br>test of time.</p>
                                                <a href="" class="btn btn-custom">Shop now</a>
                                            </div>
                                        </div>
                                        ',
    '[[getImageList?
                        &toPlaceholder=`partners`
                        &tvname=`manufacturers`
                        &tpl=`@CODE:
                        <div class="swiper-slide">
                            <div class="partner">
                                <img src="[[+partnerImage]]" alt="Partner">
                            </div>
                        </div>
                        `]]' => '',
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
        ),
        'source' => 
        array (
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
      'msProducts' => 
      array (
        'fields' => 
        array (
          'id' => 40,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'msProducts',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'miniShop2\');
$miniShop2->initialize($modx->context->key);
/** @var pdoFetch $pdoFetch */
if (!$modx->loadClass(\'pdofetch\', MODX_CORE_PATH . \'components/pdotools/model/pdotools/\', false, true)) {
    return false;
}
$pdoFetch = new pdoFetch($modx, $scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded.\');

if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}

// Start build "where" expression
$where = array(
    \'class_key\' => \'msProduct\',
);
if (empty($showZeroPrice)) {
    $where[\'Data.price:>\'] = 0;
}
// Add grouping
$groupby = array(
    \'msProduct.id\',
);

// Join tables
$leftJoin = array(
    \'Data\' => array(\'class\' => \'msProductData\'),
    \'Vendor\' => array(\'class\' => \'msVendor\', \'on\' => \'Data.vendor=Vendor.id\'),
);

$select = array(
    \'msProduct\' => !empty($includeContent)
        ? $modx->getSelectColumns(\'msProduct\', \'msProduct\')
        : $modx->getSelectColumns(\'msProduct\', \'msProduct\', \'\', array(\'content\'), true),
    \'Data\' => $modx->getSelectColumns(\'msProductData\', \'Data\', \'\', array(\'id\'), true),
    \'Vendor\' => $modx->getSelectColumns(\'msVendor\', \'Vendor\', \'vendor.\', array(\'id\'), true),
);

// Include thumbnails
if (!empty($includeThumbs)) {
    $thumbs = array_map(\'trim\', explode(\',\', $includeThumbs));
    foreach ($thumbs as $thumb) {
        if (empty($thumb)) {
            continue;
        }
        $leftJoin[$thumb] = array(
            \'class\' => \'msProductFile\',
            \'on\' => "`{$thumb}`.product_id = msProduct.id AND `{$thumb}`.rank = 0 AND `{$thumb}`.path LIKE \'%/{$thumb}/%\'",
        );
        $select[$thumb] = "`{$thumb}`.url as `{$thumb}`";
        $groupby[] = "`{$thumb}`.url";
    }
}

// Include linked products
$innerJoin = array();
if (!empty($link) && !empty($master)) {
    $innerJoin[\'Link\'] = array(
        \'class\' => \'msProductLink\',
        \'on\' => \'msProduct.id = Link.slave AND Link.link = \' . $link,
    );
    $where[\'Link.master\'] = $master;
} elseif (!empty($link) && !empty($slave)) {
    $innerJoin[\'Link\'] = array(
        \'class\' => \'msProductLink\',
        \'on\' => \'msProduct.id = Link.master AND Link.link = \' . $link,
    );
    $where[\'Link.slave\'] = $slave;
}

// Add user parameters
foreach (array(\'where\', \'leftJoin\', \'innerJoin\', \'select\', \'groupby\') as $v) {
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

// Add filters by options
$joinedOptions = array();
if (!empty($scriptProperties[\'optionFilters\'])) {
    $filters = json_decode($scriptProperties[\'optionFilters\'], true);
    foreach ($filters as $key => $value) {
        $option = preg_replace(\'#\\:.*#\', \'\', $key);
        $key = str_replace($option, $option . \'.value\', $key);
        if (!in_array($option, $joinedOptions)) {
            $leftJoin[$option] = array(
                \'class\' => \'msProductOption\',
                \'on\' => "`{$option}`.product_id = Data.id AND `{$option}`.key = \'{$option}\'",
            );
            $joinedOptions[] = $option;
            $where[$key] = $value;
        }
    }
}

// Add sort by options
if (!empty($scriptProperties[\'sortbyOptions\'])) {
    $sorts = array_map(\'trim\', explode(\',\', $scriptProperties[\'sortbyOptions\']));
    foreach ($sorts as $sort) {
        $sort = explode(\':\', $sort);
        $option = $sort[0];
        if (preg_match("#\\b{$option}\\b#", $scriptProperties[\'sortby\'], $matches)) {
            $type = \'string\';
            if (isset($sort[1])) {
                $type = $sort[1];
            }
            switch ($type) {
                case \'number\':
                case \'decimal\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS DECIMAL(13,3))";
                    break;
                case \'int\':
                case \'integer\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS UNSIGNED INTEGER)";
                    break;
                case \'date\':
                case \'datetime\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS DATETIME)";
                    break;
                default:
                    $sortbyOptions = "`{$option}`.`value`";
                    break;
            }
            $scriptProperties[\'sortby\'] = preg_replace("#\\b{$option}\\b#", $sortbyOptions, $scriptProperties[\'sortby\']);
            $groupby[] = "`{$option}`.value";
        }

        if (!in_array($option, $joinedOptions)) {
            $leftJoin[$option] = array(
                \'class\' => \'msProductOption\',
                \'on\' => "`{$option}`.product_id = Data.id AND `{$option}`.key = \'{$option}\'",
            );
            $joinedOptions[] = $option;
        }

    }
}

$default = array(
    \'class\' => \'msProduct\',
    \'where\' => $where,
    \'leftJoin\' => $leftJoin,
    \'innerJoin\' => $innerJoin,
    \'select\' => $select,
    \'sortby\' => \'msProduct.id\',
    \'sortdir\' => \'ASC\',
    \'groupby\' => implode(\', \', $groupby),
    \'return\' => !empty($returnIds)
        ? \'ids\'
        : \'data\',
    \'nestedChunkPrefix\' => \'minishop2_\',
);
// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

// Process rows
$output = array();
if (!empty($rows) && is_array($rows)) {
    $c = $modx->newQuery(\'modPluginEvent\', array(\'event:IN\' => array(\'msOnGetProductPrice\', \'msOnGetProductWeight\')));
    $c->innerJoin(\'modPlugin\', \'modPlugin\', \'modPlugin.id = modPluginEvent.pluginid\');
    $c->where(\'modPlugin.disabled = 0\');

    $modifications = $modx->getOption(\'ms2_price_snippet\', null, false, true) ||
        $modx->getOption(\'ms2_weight_snippet\', null, false, true) || $modx->getCount(\'modPluginEvent\', $c);
    if ($modifications) {
        /** @var msProductData $product */
        $product = $modx->newObject(\'msProductData\');
    }
    $pdoFetch->addTime(\'Checked the active modifiers\');

    $opt_time = 0;
    foreach ($rows as $k => $row) {
        if ($modifications) {
            $product->fromArray($row, \'\', true, true);
            $tmp = $row[\'price\'];
            $row[\'price\'] = $product->getPrice($row);
            $row[\'weight\'] = $product->getWeight($row);
            // A discount here, so we should replace old price
            if ($row[\'price\'] < $tmp) {
                $row[\'old_price\'] = $tmp;
            }
        }
        $row[\'price\'] = $miniShop2->formatPrice($row[\'price\']);
        $row[\'old_price\'] = $miniShop2->formatPrice($row[\'old_price\']);
        $row[\'weight\'] = $miniShop2->formatWeight($row[\'weight\']);
        $row[\'idx\'] = $pdoFetch->idx++;

        $opt_time_start = microtime(true);
        $options = $modx->call(\'msProductData\', \'loadOptions\', array(&$modx, $row[\'id\']));
        $row = array_merge($row, $options);
        $opt_time += microtime(true) - $opt_time_start;

        $tpl = $pdoFetch->defineChunk($row);
        $output[] = $pdoFetch->getChunk($tpl, $row);
    }
    $pdoFetch->addTime(\'Time to load products options\', $opt_time);
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="msProductsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds) && is_string($rows)) {
    $modx->setPlaceholder(\'msProducts.log\', $log);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $rows);
    } else {
        return $rows;
    }
} elseif (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    if (empty($outputSeparator)) {
        $outputSeparator = "\\n";
    }
    $output[\'log\'] = $log;
    $output = implode($outputSeparator, $output);

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(
            \'output\' => $output,
        ));
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
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'ms2_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.msProducts.row',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'The chunk tpl to use for each row.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'ms2_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'The number of results to limit.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'ms2_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'An offset of resources returned by the criteria to skip',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'ms2_prop_depth',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'ms2_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'id',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'The field to sort by. For sorting by product fields you need to add prefix "Data.", for example: "&sortby=`Data.price`"',
              'area_trans' => '',
            ),
            'sortbyOptions' => 
            array (
              'name' => 'sortbyOptions',
              'desc' => 'ms2_prop_sortbyOptions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Lists options from &sortby for sorting with type via string, e.g. "optionkey:integer,optionkey2:datetime"',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'ms2_prop_sortdir',
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
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'The direction to sort by',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'ms2_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'If not empty, the snippet will save output to placeholder with that name, instead of return it to screen.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'ms2_prop_toSeparatePlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'area_trans' => '',
            ),
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'ms2_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Display additional information about snippet work. Only for authenticated in context "mgr".',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'ms2_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Container list, separated by commas, to search results. By default, the query is limited to the current parent. If set to 0, query not limited.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'ms2_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Comma-delimited list of ids to include in the results. Prefix an id with a dash to exclude the resource from the result.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'ms2_prop_includeContent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Retrieve field "content" from products.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'ms2_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'An optional comma-delimited list of TemplateVar names to include in selection. For example "action,time" give you placeholders [[+action]] and [[+time]].',
              'area_trans' => '',
            ),
            'includeThumbs' => 
            array (
              'name' => 'includeThumbs',
              'desc' => 'ms2_prop_includeThumbs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'An optional comma-delimited list of Thumbnail sizes to include in selection. For example: "small,medium" give you placeholders [[+small]] and [[+medium]]. Thumbnails must be generted in gallery of product.',
              'area_trans' => '',
            ),
            'optionFilters' => 
            array (
              'name' => 'optionFilters',
              'desc' => 'ms2_prop_optionFilters',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Filters by product options via JSON, e.g. {"optionkey:>":10}',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'ms2_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'A JSON-style expression of criteria to build any additional where clauses from.',
              'area_trans' => '',
            ),
            'link' => 
            array (
              'name' => 'link',
              'desc' => 'ms2_prop_link',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Id of link of goods, which is automatically assigned when you create a new link in the settings.',
              'area_trans' => '',
            ),
            'master' => 
            array (
              'name' => 'master',
              'desc' => 'ms2_prop_master',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Id of the master product. If specified both "master" and "slave" - query will built for master.',
              'area_trans' => '',
            ),
            'slave' => 
            array (
              'name' => 'slave',
              'desc' => 'ms2_prop_slave',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Id of the slave product. If specified "master" this option will be ignored.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'ms2_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'The prefix for TemplateVar properties, "tv." for example. By default it is empty.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'ms2_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'An optional string to separate each tpl instance.',
              'area_trans' => '',
            ),
            'returnIds' => 
            array (
              'name' => 'returnIds',
              'desc' => 'ms2_prop_returnIds',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'If true, snippet will return comma separated string with ids of results instead of chunks.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'ms2_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Show unpublished goods.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'ms2_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Show deleted goods.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'ms2_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Show goods, that hidden in menu.',
              'area_trans' => '',
            ),
            'showZeroPrice' => 
            array (
              'name' => 'showZeroPrice',
              'desc' => 'ms2_prop_showZeroPrice',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Show goods with zero price.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'ms2_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'If true, will output the wrapper specified in &tplWrapper even if the output is empty.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/minishop2/elements/snippets/snippet.ms_products.php',
          'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'miniShop2\');
$miniShop2->initialize($modx->context->key);
/** @var pdoFetch $pdoFetch */
if (!$modx->loadClass(\'pdofetch\', MODX_CORE_PATH . \'components/pdotools/model/pdotools/\', false, true)) {
    return false;
}
$pdoFetch = new pdoFetch($modx, $scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded.\');

if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}

// Start build "where" expression
$where = array(
    \'class_key\' => \'msProduct\',
);
if (empty($showZeroPrice)) {
    $where[\'Data.price:>\'] = 0;
}
// Add grouping
$groupby = array(
    \'msProduct.id\',
);

// Join tables
$leftJoin = array(
    \'Data\' => array(\'class\' => \'msProductData\'),
    \'Vendor\' => array(\'class\' => \'msVendor\', \'on\' => \'Data.vendor=Vendor.id\'),
);

$select = array(
    \'msProduct\' => !empty($includeContent)
        ? $modx->getSelectColumns(\'msProduct\', \'msProduct\')
        : $modx->getSelectColumns(\'msProduct\', \'msProduct\', \'\', array(\'content\'), true),
    \'Data\' => $modx->getSelectColumns(\'msProductData\', \'Data\', \'\', array(\'id\'), true),
    \'Vendor\' => $modx->getSelectColumns(\'msVendor\', \'Vendor\', \'vendor.\', array(\'id\'), true),
);

// Include thumbnails
if (!empty($includeThumbs)) {
    $thumbs = array_map(\'trim\', explode(\',\', $includeThumbs));
    foreach ($thumbs as $thumb) {
        if (empty($thumb)) {
            continue;
        }
        $leftJoin[$thumb] = array(
            \'class\' => \'msProductFile\',
            \'on\' => "`{$thumb}`.product_id = msProduct.id AND `{$thumb}`.rank = 0 AND `{$thumb}`.path LIKE \'%/{$thumb}/%\'",
        );
        $select[$thumb] = "`{$thumb}`.url as `{$thumb}`";
        $groupby[] = "`{$thumb}`.url";
    }
}

// Include linked products
$innerJoin = array();
if (!empty($link) && !empty($master)) {
    $innerJoin[\'Link\'] = array(
        \'class\' => \'msProductLink\',
        \'on\' => \'msProduct.id = Link.slave AND Link.link = \' . $link,
    );
    $where[\'Link.master\'] = $master;
} elseif (!empty($link) && !empty($slave)) {
    $innerJoin[\'Link\'] = array(
        \'class\' => \'msProductLink\',
        \'on\' => \'msProduct.id = Link.master AND Link.link = \' . $link,
    );
    $where[\'Link.slave\'] = $slave;
}

// Add user parameters
foreach (array(\'where\', \'leftJoin\', \'innerJoin\', \'select\', \'groupby\') as $v) {
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

// Add filters by options
$joinedOptions = array();
if (!empty($scriptProperties[\'optionFilters\'])) {
    $filters = json_decode($scriptProperties[\'optionFilters\'], true);
    foreach ($filters as $key => $value) {
        $option = preg_replace(\'#\\:.*#\', \'\', $key);
        $key = str_replace($option, $option . \'.value\', $key);
        if (!in_array($option, $joinedOptions)) {
            $leftJoin[$option] = array(
                \'class\' => \'msProductOption\',
                \'on\' => "`{$option}`.product_id = Data.id AND `{$option}`.key = \'{$option}\'",
            );
            $joinedOptions[] = $option;
            $where[$key] = $value;
        }
    }
}

// Add sort by options
if (!empty($scriptProperties[\'sortbyOptions\'])) {
    $sorts = array_map(\'trim\', explode(\',\', $scriptProperties[\'sortbyOptions\']));
    foreach ($sorts as $sort) {
        $sort = explode(\':\', $sort);
        $option = $sort[0];
        if (preg_match("#\\b{$option}\\b#", $scriptProperties[\'sortby\'], $matches)) {
            $type = \'string\';
            if (isset($sort[1])) {
                $type = $sort[1];
            }
            switch ($type) {
                case \'number\':
                case \'decimal\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS DECIMAL(13,3))";
                    break;
                case \'int\':
                case \'integer\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS UNSIGNED INTEGER)";
                    break;
                case \'date\':
                case \'datetime\':
                    $sortbyOptions = "CAST(`{$option}`.`value` AS DATETIME)";
                    break;
                default:
                    $sortbyOptions = "`{$option}`.`value`";
                    break;
            }
            $scriptProperties[\'sortby\'] = preg_replace("#\\b{$option}\\b#", $sortbyOptions, $scriptProperties[\'sortby\']);
            $groupby[] = "`{$option}`.value";
        }

        if (!in_array($option, $joinedOptions)) {
            $leftJoin[$option] = array(
                \'class\' => \'msProductOption\',
                \'on\' => "`{$option}`.product_id = Data.id AND `{$option}`.key = \'{$option}\'",
            );
            $joinedOptions[] = $option;
        }

    }
}

$default = array(
    \'class\' => \'msProduct\',
    \'where\' => $where,
    \'leftJoin\' => $leftJoin,
    \'innerJoin\' => $innerJoin,
    \'select\' => $select,
    \'sortby\' => \'msProduct.id\',
    \'sortdir\' => \'ASC\',
    \'groupby\' => implode(\', \', $groupby),
    \'return\' => !empty($returnIds)
        ? \'ids\'
        : \'data\',
    \'nestedChunkPrefix\' => \'minishop2_\',
);
// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

// Process rows
$output = array();
if (!empty($rows) && is_array($rows)) {
    $c = $modx->newQuery(\'modPluginEvent\', array(\'event:IN\' => array(\'msOnGetProductPrice\', \'msOnGetProductWeight\')));
    $c->innerJoin(\'modPlugin\', \'modPlugin\', \'modPlugin.id = modPluginEvent.pluginid\');
    $c->where(\'modPlugin.disabled = 0\');

    $modifications = $modx->getOption(\'ms2_price_snippet\', null, false, true) ||
        $modx->getOption(\'ms2_weight_snippet\', null, false, true) || $modx->getCount(\'modPluginEvent\', $c);
    if ($modifications) {
        /** @var msProductData $product */
        $product = $modx->newObject(\'msProductData\');
    }
    $pdoFetch->addTime(\'Checked the active modifiers\');

    $opt_time = 0;
    foreach ($rows as $k => $row) {
        if ($modifications) {
            $product->fromArray($row, \'\', true, true);
            $tmp = $row[\'price\'];
            $row[\'price\'] = $product->getPrice($row);
            $row[\'weight\'] = $product->getWeight($row);
            // A discount here, so we should replace old price
            if ($row[\'price\'] < $tmp) {
                $row[\'old_price\'] = $tmp;
            }
        }
        $row[\'price\'] = $miniShop2->formatPrice($row[\'price\']);
        $row[\'old_price\'] = $miniShop2->formatPrice($row[\'old_price\']);
        $row[\'weight\'] = $miniShop2->formatWeight($row[\'weight\']);
        $row[\'idx\'] = $pdoFetch->idx++;

        $opt_time_start = microtime(true);
        $options = $modx->call(\'msProductData\', \'loadOptions\', array(&$modx, $row[\'id\']));
        $row = array_merge($row, $options);
        $opt_time += microtime(true) - $opt_time_start;

        $tpl = $pdoFetch->defineChunk($row);
        $output[] = $pdoFetch->getChunk($tpl, $row);
    }
    $pdoFetch->addTime(\'Time to load products options\', $opt_time);
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="msProductsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds) && is_string($rows)) {
    $modx->setPlaceholder(\'msProducts.log\', $log);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $rows);
    } else {
        return $rows;
    }
} elseif (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    if (empty($outputSeparator)) {
        $outputSeparator = "\\n";
    }
    $output[\'log\'] = $log;
    $output = implode($outputSeparator, $output);

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(
            \'output\' => $output,
        ));
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
      'manufacturers' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'migx',
          'name' => 'manufacturers',
          'caption' => 'Manufacturers',
          'description' => '',
          'editor_type' => 0,
          'category' => 17,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'configs' => '',
            'formtabs' => '[
{"caption":"", "fields": [
{"field":"partnerImage","caption":"partnerImage","inputTVtype":"image"}
]}
]',
            'columns' => '[
{"header": "Image", "width": "80", "sortable": "true", "dataIndex": "partnerImage","renderer": "this.renderImage"}
]',
            'btntext' => 'Add partner',
            'previewurl' => '',
            'jsonvarkey' => '',
            'autoResourceFolders' => 'false',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
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
      'homeSlider' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'migx',
          'name' => 'homeSlider',
          'caption' => 'Home Slider',
          'description' => '',
          'editor_type' => 0,
          'category' => 16,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'configs' => '',
            'formtabs' => '[
{"caption":"", "fields": [
{"field":"homeSliderTitle","caption":"homeSliderTitle","inputTVtype":"text"},
{"field":"homeSliderTitle2","caption":"homeSliderTitle2","inputTVtype":"text"},
{"field":"homeSliderText","caption":"homeSliderText","inputTVtype":"textarea"},
{"field":"homeSliderButton","caption":"homeSliderButton","inputTVtype":"text"},
{"field":"homeSliderButtonLink","caption":"homeSliderButtonLink","inputTVtype":"listbox"},
{"field":"homeSliderImage","caption":"homeSliderImage","inputTVtype":"image"}
]}
]',
            'columns' => '[
{"header": "homeSliderTitle", "sortable": "true", "dataIndex": "homeSliderTitle"},
{"header": "homeSliderTitle2", "sortable": "true", "dataIndex": "homeSliderTitle2"},
{"header": "homeSliderText", "sortable": "true", "dataIndex": "homeSliderText"},
{"header": "homeSliderButton", "sortable": "true", "dataIndex": "homeSliderButton"},
{"header": "homeSliderButtonLink", "sortable": "true", "dataIndex": "homeSliderButtonLink"},
{"header": "homeSliderImage", "width": "80", "sortable": "true", "dataIndex": "homeSliderImage","renderer": "this.renderImage"}
]',
            'btntext' => 'Add slide',
            'previewurl' => '',
            'jsonvarkey' => '',
            'autoResourceFolders' => 'false',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
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
      'categoryIcon' => 
      array (
        'fields' => 
        array (
          'id' => 16,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'categoryIcon',
          'caption' => 'Category icon',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
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
      'categoryIconBig' => 
      array (
        'fields' => 
        array (
          'id' => 18,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'categoryIconBig',
          'caption' => 'Category icon big',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
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