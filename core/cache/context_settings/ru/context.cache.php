<?php  return array (
  'config' => 
  array (
    'base_url' => '/',
    'http_host' => 'ru.sconto',
    'site_start' => '23',
    'site_url' => 'http://ru.sconto/',
  ),
  'aliasMap' => 
  array (
    'info' => 23,
  ),
  'resourceMap' => 
  array (
    0 => 
    array (
      0 => 23,
    ),
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'msOnChangeOrderStatus' => 
    array (
      11 => '11',
    ),
    'OnBeforeDocFormSave' => 
    array (
      6 => '6',
    ),
    'OnBeforeEmptyTrash' => 
    array (
      6 => '6',
    ),
    'OnChunkFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnContextRemove' => 
    array (
      20 => '20',
    ),
    'OnContextSave' => 
    array (
      20 => '20',
    ),
    'OnDocFormPrerender' => 
    array (
      8 => '8',
      6 => '6',
      12 => '12',
      4 => '4',
    ),
    'OnDocFormRender' => 
    array (
      6 => '6',
    ),
    'OnDocFormSave' => 
    array (
      12 => '12',
      17 => '17',
      13 => '13',
    ),
    'OnDocPublished' => 
    array (
      17 => '17',
    ),
    'OnDocUnPublished' => 
    array (
      17 => '17',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnFileEditFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnFileManagerUpload' => 
    array (
      10 => '10',
    ),
    'OnHandleRequest' => 
    array (
      11 => '11',
      20 => '20',
      3 => '3',
    ),
    'OnLoadWebDocument' => 
    array (
      11 => '11',
      12 => '12',
    ),
    'OnLoadWebPageCache' => 
    array (
      3 => '3',
    ),
    'OnMODXInit' => 
    array (
      1 => '1',
      5 => '5',
      11 => '11',
    ),
    'OnPageNotFound' => 
    array (
      15 => '15',
    ),
    'OnPluginFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnResourceBeforeSort' => 
    array (
      6 => '6',
    ),
    'OnResourceDelete' => 
    array (
      17 => '17',
      13 => '13',
    ),
    'OnResourceDuplicate' => 
    array (
      17 => '17',
    ),
    'OnResourceUndelete' => 
    array (
      17 => '17',
      13 => '13',
    ),
    'OnRichTextBrowserInit' => 
    array (
      16 => '16',
    ),
    'OnRichTextEditorInit' => 
    array (
      16 => '16',
    ),
    'OnRichTextEditorRegister' => 
    array (
      4 => '4',
      16 => '16',
    ),
    'OnSiteRefresh' => 
    array (
      20 => '20',
      1 => '1',
    ),
    'OnSnipFormPrerender' => 
    array (
      4 => '4',
    ),
    'OnTempFormPrerender' => 
    array (
      12 => '12',
      4 => '4',
    ),
    'OnTVInputPropertiesList' => 
    array (
      8 => '8',
    ),
    'OnTVInputRenderList' => 
    array (
      8 => '8',
    ),
    'OnUserSave' => 
    array (
      11 => '11',
    ),
    'OnWebPageComplete' => 
    array (
      2 => '2',
    ),
    'OnWebPageInit' => 
    array (
      3 => '3',
      11 => '11',
    ),
    'OnWebPagePrerender' => 
    array (
      1 => '1',
      14 => '14',
      3 => '3',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'pdoTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '3',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        $fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
        $path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);

        $fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
        $path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);
        break;

    case \'OnSiteRefresh\':
        /** @var pdoTools $pdoTools */
        if ($pdoTools = $modx->getService(\'pdoTools\')) {
            if ($pdoTools->clearFileCache()) {
                $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': pdoTools\');
            }
        }
        break;

    case \'OnWebPagePrerender\':
        $parser = $modx->getParser();
        if ($parser instanceof pdoParser) {
            foreach ($parser->pdoTools->ignores as $key => $val) {
                $modx->resource->_output = str_replace($key, $val, $modx->resource->_output);
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/pdotools/elements/plugins/plugin.pdotools.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'controlErrorLog',
      'description' => '',
      'editor_type' => '0',
      'category' => '4',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        if ($modx->hasPermission(\'error_log_view\')) {
            $modx->controller->addLexiconTopic(\'controlerrorlog:default\');
            $modx->controller->addCss($modx->getOption(\'assets_url\').\'components/controlerrorlog/css/mgr/main.css\');
            $modx->controller->addJavascript($modx->getOption(\'assets_url\').\'components/controlerrorlog/js/mgr/cel.default.js\');

            $response = $modx->runProcessor(\'mgr/errorlog/get\', array(\'includeContent\'=>false), array(\'processors_path\' => $modx->getOption(\'core_path\') . \'components/controlerrorlog/processors/\'));
            $resObj = $response->getObject();
            $_html = "<script>	var cel_config = " . $modx->toJSON($resObj) . "; </script>";
            $modx->controller->addHtml($_html);
        }
        break;
    case \'OnWebPageComplete\':
        $email = $modx->getOption(\'controlerrorlog.admin_email\');
        if ($modx->context->get(\'key\') == \'mgr\' || empty($email) || !$modx->getOption(\'controlerrorlog.control_frontend\')) return;

        $f = $modx->getOption(xPDO::OPT_CACHE_PATH) . \'logs/error.log\';
        if (file_exists($f)) {
            $casheHash = $modx->cacheManager->get(\'error_log\');
            $hash = md5_file($f);
            if (filesize($f) > 0 && !empty($casheHash)  &&  $casheHash != $hash) {
                $modx->lexicon->load(\'controlerrorlog:default\');
                /** @var modPHPMailer $mail */
                $mail = $modx->getService(\'mail\', \'mail.modPHPMailer\');
                $mail->setHTML(true);

                $mail->set(modMail::MAIL_SUBJECT, $modx->lexicon(\'error_log_email_subject\'));
                $mail->set(modMail::MAIL_BODY, $modx->lexicon(\'error_log_email_body\', array(\'siteName\' => $modx->config[\'site_name\'])));
                $mail->set(modMail::MAIL_SENDER, $modx->getOption(\'emailsender\'));
                $mail->set(modMail::MAIL_FROM, $modx->getOption(\'emailsender\'));
                $mail->set(modMail::MAIL_FROM_NAME, $modx->getOption(\'site_name\'));

                $mail->address(\'to\', $email);
                $mail->address(\'reply-to\', $modx->getOption(\'emailsender\'));

                if (!$mail->send()) {
                    print (\'An error occurred while trying to send the email: \'.$modx->mail->mailer->ErrorInfo);
                }
                $mail->reset();
            }
            if ($casheHash != $hash) {
                $modx->cacheManager->set(\'error_log\', $hash, 0);
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/controlerrorlog/elements/plugins/plugin.controlerrorlog.php',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'debugParser',
      'description' => '',
      'editor_type' => '0',
      'category' => '5',
      'cache_type' => '0',
      'plugincode' => 'if (empty($_REQUEST[\'debug\']) || !$modx->user->hasSessionContext(\'mgr\') || $modx->context->key == \'mgr\') {
	return;
}

switch ($modx->event->name) {

	case \'OnHandleRequest\':
		if ($modx->parser instanceof pdoParser && $modx->loadClass(\'debugPdoParser\', MODX_CORE_PATH . \'components/debugparser/model/\', false, true)) {
			$modx->parser = new debugPdoParser($modx);
		}
		elseif ($modx->loadClass(\'debugParser\', MODX_CORE_PATH . \'components/debugparser/model/\', false, true)) {
			$modx->parser = new debugParser($modx);
		}
		break;

	case \'OnWebPageInit\':
		if (method_exists($modx->parser, \'clearCache\') && empty($_REQUEST[\'cache\'])) {
			$modx->parser->clearCache();
		}
		break;

	case \'OnLoadWebPageCache\':
		if (property_exists($modx->parser, \'from_cache\')) {
			$modx->parser->from_cache = true;
		}
		break;

	case \'OnWebPagePrerender\':
		if (method_exists($modx->parser, \'generateReport\')) {
			$modx->parser->generateReport();
		}
		break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/debugparser/elements/plugins/plugin.debugparser.php',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = \'text/html\';
        }
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_default\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        switch (true) {
            case $mimeType == \'text/html\' && $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $mimeType == \'text/html\' && $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
        }

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'ClientConfig',
      'description' => 'Sets system settings from the Client Config CMP.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * ClientConfig
 *
 * Copyright 2011-2014 by Mark Hamstra <hello@markhamstra.com>
 *
 * ClientConfig is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClientConfig is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClientConfig; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package clientconfig
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 * @var modResource $resource
 * @var modTemplate $template
 * @var modTemplateVar $tv
 * @var modChunk $chunk
 * @var modSnippet $snippet
 * @var modPlugin $plugin
*/

$eventName = $modx->event->name;

switch($eventName) {
    case \'OnMODXInit\':
        /* Grab the class */
        $path = $modx->getOption(\'clientconfig.core_path\', null, $modx->getOption(\'core_path\') . \'components/clientconfig/\');
        $path .= \'model/clientconfig/\';
        $clientConfig = $modx->getService(\'clientconfig\',\'ClientConfig\', $path);

        /* If we got the class (gotta be careful of failed migrations), grab settings and go! */
        if ($clientConfig instanceof ClientConfig) {
            $contextKey = $modx->context instanceof modContext ? $modx->context->get(\'key\') : \'web\';
            $settings = $clientConfig->getSettings($contextKey);

            /* Make settings available as [[++tags]] */
            $modx->setPlaceholders($settings, \'+\');

            /* Make settings available for $modx->getOption() */
            foreach ($settings as $key => $value) {
                $modx->setOption($key, $value);
            }
        }
        break;
}

return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    6 => 
    array (
      'id' => '6',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Collections',
      'description' => '',
      'editor_type' => '0',
      'category' => '8',
      'cache_type' => '0',
      'plugincode' => '/**
 * Collections
 *
 * DESCRIPTION
 *
 * This plugin inject JS to handle proper working of close buttons in Resource\'s panel (OnDocFormPrerender)
 * This plugin handles setting proper show_in_tree parameter (OnBeforeDocFormSave, OnResourceSort)
 *
 * @var modX $modx
 * @var array $scriptProperties
 */
$corePath = $modx->getOption(\'collections.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/collections/\');
/** @var Collections $collections */
$collections = $modx->getService(
    \'collections\',
    \'Collections\',
    $corePath . \'model/collections/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'Collections\' . $modx->event->name;

$modx->loadClass(\'CollectionsPlugin\', $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);
$modx->loadClass($className, $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);

if (class_exists($className)) {
    /** @var CollectionsPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    8 => 
    array (
      'id' => '8',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'MIGX',
      'description' => '',
      'editor_type' => '0',
      'category' => '10',
      'cache_type' => '0',
      'plugincode' => '$corePath = $modx->getOption(\'migx.core_path\',null,$modx->getOption(\'core_path\').\'components/migx/\');
$assetsUrl = $modx->getOption(\'migx.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/migx/\');
switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tv/input/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/inputoptions/\');
        break;

        case \'OnDocFormPrerender\':
        $modx->controller->addCss($assetsUrl.\'css/mgr.css\');
        break; 
 
    /*          
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/properties/\');
        break;
    
    case \'OnDocFormPrerender\':
        $assetsUrl = $modx->getOption(\'colorpicker.assets_url\',null,$modx->getOption(\'assets_url\').\'components/colorpicker/\'); 
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            
        });
        </script>\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPicker.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorMenu.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPickerField.js\');		
        $modx->regClientCSS($assetsUrl.\'resources/css/colorpicker.css\');
        break;
     */
}
return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    10 => 
    array (
      'id' => '10',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'migxResizeOnUpload',
      'description' => '',
      'editor_type' => '0',
      'category' => '10',
      'cache_type' => '0',
      'plugincode' => '/**
 * migxResizeOnUpload Plugin
 *
 * Events: OnFileManagerUpload
 * Author: Bruno Perner <b.perner@gmx.de>
 * Modified to read multiple configs from mediasource-property
 * 
 * First Author: Vasiliy Naumkin <bezumkin@yandex.ru>
 * Required: PhpThumbOf snippet for resizing images
 * 
 * Example: mediasource - property \'resizeConfig\':
 * [{"alias":"origin","w":"500","h":"500","far":1},{"alias":"thumb","w":"150","h":"150","far":1}]
 */

if ($modx->event->name != \'OnFileManagerUpload\') {
    return;
}


$file = $modx->event->params[\'files\'][\'file\'];
$directory = $modx->event->params[\'directory\'];

if ($file[\'error\'] != 0) {
    return;
}

$name = $file[\'name\'];
//$extensions = explode(\',\', $modx->getOption(\'upload_images\'));

$source = $modx->event->params[\'source\'];

if ($source instanceof modMediaSource) {
    //$dirTree = $modx->getOption(\'dirtree\', $_REQUEST, \'\');
    //$modx->setPlaceholder(\'docid\', $resource_id);
    $source->initialize();
    $basePath = str_replace(\'/./\', \'/\', $source->getBasePath());
    //$cachepath = $cachepath . $dirTree;
    $baseUrl = $modx->getOption(\'site_url\') . $source->getBaseUrl();
    //$baseUrl = $baseUrl . $dirTree;
    $sourceProperties = $source->getPropertyList();

    //echo \'<pre>\' . print_r($sourceProperties, 1) . \'</pre>\';
    //$allowedExtensions = $modx->getOption(\'allowedFileTypes\', $sourceProperties, \'\');
    //$allowedExtensions = empty($allowedExtensions) ? \'jpg,jpeg,png,gif\' : $allowedExtensions;
    //$maxFilesizeMb = $modx->getOption(\'maxFilesizeMb\', $sourceProperties, \'8\');
    //$maxFiles = $modx->getOption(\'maxFiles\', $sourceProperties, \'0\');
    //$thumbX = $modx->getOption(\'thumbX\', $sourceProperties, \'100\');
    //$thumbY = $modx->getOption(\'thumbY\', $sourceProperties, \'100\');
    $resizeConfigs = $modx->getOption(\'resizeConfigs\', $sourceProperties, \'\');
    $resizeConfigs = $modx->fromJson($resizeConfigs);
    $thumbscontainer = $modx->getOption(\'thumbscontainer\', $sourceProperties, \'thumbs/\');
    $imageExtensions = $modx->getOption(\'imageExtensions\', $sourceProperties, \'jpg,jpeg,png,gif,JPG\');
    $imageExtensions = explode(\',\', $imageExtensions);
    //$uniqueFilenames = $modx->getOption(\'uniqueFilenames\', $sourceProperties, false);
    //$onImageUpload = $modx->getOption(\'onImageUpload\', $sourceProperties, \'\');
    //$onImageRemove = $modx->getOption(\'onImageRemove\', $sourceProperties, \'\');
    $cleanalias = $modx->getOption(\'cleanFilename\', $sourceProperties, false);

}

if (is_array($resizeConfigs) && count($resizeConfigs) > 0) {
    foreach ($resizeConfigs as $rc) {
        if (isset($rc[\'alias\'])) {
            $filePath = $basePath . $directory;
            $filePath = str_replace(\'//\',\'/\',$filePath);
            if ($rc[\'alias\'] == \'origin\') {
                $thumbPath = $filePath;
            } else {
                $thumbPath = $filePath . $rc[\'alias\'] . \'/\';
                $permissions = octdec(\'0\' . (int)($modx->getOption(\'new_folder_permissions\', null, \'755\', true)));
                if (!@mkdir($thumbPath, $permissions, true)) {
                    $modx->log(MODX_LOG_LEVEL_ERROR, sprintf(\'[migxResourceMediaPath]: could not create directory %s).\', $thumbPath));
                } else {
                    chmod($thumbPath, $permissions);
                }

            }


            $filename = $filePath . $name;
            $thumbname = $thumbPath . $name;
            $ext = substr(strrchr($name, \'.\'), 1);
            if (in_array($ext, $imageExtensions)) {
                $sizes = getimagesize($filename);
                echo $sizes[0]; 
                //$format = substr($sizes[\'mime\'], 6);
                if ($sizes[0] > $rc[\'w\'] || $sizes[1] > $rc[\'h\']) {
                    if ($sizes[0] < $rc[\'w\']) {
                        $rc[\'w\'] = $sizes[0];
                    }
                    if ($sizes[1] < $rc[\'h\']) {
                        $rc[\'h\'] = $sizes[1];
                    }
                    $type = $sizes[0] > $sizes[1] ? \'landscape\' : \'portrait\';
                    if (isset($rc[\'far\']) && $rc[\'far\'] == \'1\' && isset($rc[\'w\']) && isset($rc[\'h\'])) {
                        if ($type = \'landscape\') {
                            unset($rc[\'h\']);
                        }else {
                            unset($rc[\'w\']);
                        }
                    }

                    $options = \'\';
                    foreach ($rc as $k => $v) {
                        if ($k != \'alias\') {
                            $options .= \'&\' . $k . \'=\' . $v;
                        }
                    }
                    $resized = $modx->runSnippet(\'phpthumbof\', array(\'input\' => $filePath . $name, \'options\' => $options));
                    rename(MODX_BASE_PATH . substr($resized, 1), $thumbname);
                }
            }


        }
    }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    11 => 
    array (
      'id' => '11',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'miniShop2',
      'description' => '',
      'editor_type' => '0',
      'category' => '11',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        // Load extensions
        /** @var miniShop2 $miniShop2 */
        if ($miniShop2 = $modx->getService(\'miniShop2\')) {
            $miniShop2->loadMap();
        }
        break;

    case \'OnHandleRequest\':
        // Handle ajax requests
        $isAjax = !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
        if (empty($_REQUEST[\'ms2_action\']) || !$isAjax) {
            return;
        }
        /** @var miniShop2 $miniShop2 */
        if ($miniShop2 = $modx->getService(\'miniShop2\')) {
            $response = $miniShop2->handleRequest($_REQUEST[\'ms2_action\'], @$_POST);
            @session_write_close();
            exit($response);
        }
        break;

    case \'OnLoadWebDocument\':
        // Handle non-ajax requests
        if (!empty($_REQUEST[\'ms2_action\'])) {
            if ($miniShop2 = $modx->getService(\'miniShop2\')) {
                $miniShop2->handleRequest($_REQUEST[\'ms2_action\'], @$_POST);
            }
        }
        // Set product fields as [[*resource]] tags
        if ($modx->resource->get(\'class_key\') == \'msProduct\') {
            if ($dataMeta = $modx->getFieldMeta(\'msProductData\')) {
                unset($dataMeta[\'id\']);
                $modx->resource->_fieldMeta = array_merge(
                    $modx->resource->_fieldMeta,
                    $dataMeta
                );
            }
        }
        break;

    case \'OnWebPageInit\':
        // Set referrer cookie
        /** @var msCustomerProfile $profile */
        $referrerVar = $modx->getOption(\'ms2_referrer_code_var\', null, \'msfrom\', true);
        $cookieVar = $modx->getOption(\'ms2_referrer_cookie_var\', null, \'msreferrer\', true);
        $cookieTime = $modx->getOption(\'ms2_referrer_time\', null, 86400 * 365, true);

        if (!$modx->user->isAuthenticated() && !empty($_REQUEST[$referrerVar])) {
            $code = trim($_REQUEST[$referrerVar]);
            if ($profile = $modx->getObject(\'msCustomerProfile\', array(\'referrer_code\' => $code))) {
                $referrer = $profile->get(\'id\');
                setcookie($cookieVar, $referrer, time() + $cookieTime);
            }
        }
        break;

    case \'OnUserSave\':
        // Save referrer id
        if ($mode == modSystemEvent::MODE_NEW) {
            /** @var modUser $user */
            $cookieVar = $modx->getOption(\'ms2_referrer_cookie_var\', null, \'msreferrer\', true);
            $cookieTime = $modx->getOption(\'ms2_referrer_time\', null, 86400 * 365, true);
            if ($modx->context->key != \'mgr\' && !empty($_COOKIE[$cookieVar])) {
                if ($profile = $modx->getObject(\'msCustomerProfile\', $user->get(\'id\'))) {
                    if (!$profile->get(\'referrer_id\') && $_COOKIE[$cookieVar] != $user->get(\'id\')) {
                        $profile->set(\'referrer_id\', (int)$_COOKIE[$cookieVar]);
                        $profile->save();
                    }
                }
                setcookie($cookieVar, \'\', time() - $cookieTime);
            }
        }
        break;

    case \'msOnChangeOrderStatus\':
        // Update customer stat
        if (empty($status) || $status != 2) {
            return;
        }

        /** @var modUser $user */
        if ($user = $order->getOne(\'User\')) {
            $q = $modx->newQuery(\'msOrder\', array(\'type\' => 0));
            $q->innerJoin(\'modUser\', \'modUser\', array(\'modUser.id = msOrder.user_id\'));
            $q->innerJoin(\'msOrderLog\', \'msOrderLog\', array(
                \'msOrderLog.order_id = msOrder.id\',
                \'msOrderLog.action\' => \'status\',
                \'msOrderLog.entry\' => $status,
            ));
            $q->where(array(\'msOrder.user_id\' => $user->get(\'id\')));
            $q->groupby(\'msOrder.user_id\');
            $q->select(\'SUM(msOrder.cost)\');
            if ($q->prepare() && $q->stmt->execute()) {
                $spent = $q->stmt->fetchColumn();
                /** @var msCustomerProfile $profile */
                if ($profile = $modx->getObject(\'msCustomerProfile\', $user->get(\'id\'))) {
                    $profile->set(\'spent\', $spent);
                    $profile->save();
                }
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/minishop2/elements/plugins/plugin.minishop2.php',
    ),
    12 => 
    array (
      'id' => '12',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'AdminTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '12',
      'cache_type' => '0',
      'plugincode' => '/** @var array $scriptProperties */
$path = $modx->getOption(\'admintools_core_path\', null, $modx->getOption(\'core_path\') . \'components/admintools/\').\'model/admintools/\';
/** @var AdminTools $AdminTools */
$AdminTools = $modx->getService(\'admintools\',\'AdminTools\',$path);
$elementType = null;
if ($AdminTools instanceof AdminTools) {
    switch ($modx->event->name) {
        case \'OnManagerPageBeforeRender\':
            if ($modx->user->id) $AdminTools->initialize();
            break;
        case \'OnDocFormSave\':
            if ($modx->getOption(\'admintools_clear_only_resource_cache\',null,false)) {
                if ($modx->event->params[\'mode\'] != \'upd\') {
                    return;
                }
                if ($resource->get(\'syncsite\')) {
                    $AdminTools->clearResourceCache($resource);
                }
                if (!empty($_POST[\'createCache\'])) {
                    $AdminTools->createResourceCache($resource->uri);
                }
            }
            break;
        case \'OnManagerPageInit\':
            if (!$modx->user->isAuthenticated(\'mgr\') && $modx->getOption(\'admintools_email_authorization\', null, false)) {
                $id = (int) $modx->getOption(\'admintools_loginform_resource\');
                if (!empty($id) && $modx->getCount(\'modResource\', array(\'id\'=>$id, \'published\'=>1, \'deleted\'=>0))) {
                    $url = $modx->makeUrl($id,\'\',\'\',\'full\');
                    $modx->setOption(\'manager_login_url_alternate\', $url);
                }
            }
            break;
        case \'OnManagerAuthentication\':
            if ($modx->getOption(\'admintools_user_can_login\', null, false)) {
                $modx->setOption(\'admintools_user_can_login\', false);
                $modx->event->output(true);
            }
            break;
        case \'OnLoadWebDocument\':
            if ($modx->user->isAuthenticated($modx->context->get(\'key\')) && (!$modx->user->active || $modx->user->Profile->blocked)) {
                $modx->runProcessor(\'security/logout\');
            }
            if ($modx->getOption(\'admintools_alternative_permissions\', null, false) && !$AdminTools->hasPermissions()){
                $modx->sendUnauthorizedPage();
            }
            break;
        case \'OnTempFormPrerender\':
            if ($modx->getOption(\'admintools_template_resource_relationship\', null, true)) {
                $modx->controller->addLastJavascript($AdminTools->getOption(\'jsUrl\') . \'mgr/templates.js\');
            }
            break;
        case \'OnDocFormPrerender\':
            $_html = array();
            if ($modx->getOption(\'admintools_template_resource_relationship\', null, true)) {
                $_html[\'tpl_res_relationship\'] = \'
            var tmpl = Ext.getCmp("modx-resource-template");
            if (tmpl.getValue()) tmpl.label.update(_("resource_template") + "&nbsp;&nbsp;<a href=\\"?a=element/template/update&id=" + tmpl.getValue() + "\\"><i class=\\"icon icon-external-link\\"></i></a>");\';
            }
            if ($modx->getOption(\'admintools_clear_only_resource_cache\', null, true) && $resource instanceof modResource) {
                $_html[\'create_resource_cache\'] = \'
            var cb = Ext.create({
                xtype: "xcheckbox",
                boxLabel: _("admintools_create_resource_cache"),
                description: _("admintools_create_resource_cache_help"),
                hideLabel: true,
                name: "createCache",
                id: "createCache",
                checked: \'. intval($modx->getOption(\'admintools_create_resource_cache\', null, false)) .\'
            });
            if (Ext.getCmp("modx-page-settings-right-box-right")) {
                Ext.getCmp("modx-page-settings-right-box-right").insert(2,cb);
                Ext.getCmp("modx-page-settings-right-box-left").add(Ext.getCmp("modx-resource-uri-override"));
                Ext.getCmp("modx-panel-resource").on("success", function(o){
                    if (o.result.object.createCache != 0) {
                        cb.setValue(true);
                    }
                });
            }\';
            }
            $output = \'\';
            if (!empty($_html)) {
            $output .= \'
    Ext.onReady(function() {
        setTimeout(function(){\' . implode("\\n", $_html) . \'
        }, 200);
    });\';
            }
            if ($modx->getOption(\'admintools_alternative_permissions\', null, true) && $modx->hasPermission(\'access_permissions\')) {
                $modx->controller->addLastJavascript($AdminTools->getOption(\'jsUrl\') . \'mgr/permissions.js\');
                $output .= \'
    Ext.ComponentMgr.onAvailable("modx-resource-tabs", function() {
		this.on("beforerender", function() {
			this.add({
				title: _("admintools_permissions"),
				border: false,
				items: [{
					layout: "anchor",
					border: false,
					items: [{
						html: _("admintools_permissions_desc"),
						border: false,
						bodyCssClass: "panel-desc"
					}, {
						xtype: "admintools-grid-permissions",
						anchor: "100%",
						cls: "main-wrapper",
						resource: \' . $id . \'
					}]
				}]
			});
		});
	});
\';
            }
            if (!empty($output)) $modx->controller->addHtml(\'<script type="text/javascript">\' . $output . \'</script>\');
            break;
        /*case \'OnWebPagePrerender\':
            $output = &$modx->resource->_output;
            $replace = "";
            preg_replace(\'/</script>/\', $replace, $output, 1);
            break;*/
    }
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/admintools/elements/plugins/plugin.admintools.php',
    ),
    13 => 
    array (
      'id' => '13',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'mSearch2',
      'description' => '',
      'editor_type' => '0',
      'category' => '13',
      'cache_type' => '0',
      'plugincode' => '$id = 0;

switch ($modx->event->name) {

	case \'OnDocFormSave\':
	case \'OnResourceDelete\':
	case \'OnResourceUndelete\':
		/* @var modResource $modResource */
		if (!empty($resource) && $resource instanceof modResource) {
			$id = $resource->get(\'id\');
		}
	break;

	case \'OnCommentSave\':
	case \'OnCommentRemove\':
	case \'OnCommentDelete\':
		/* @var TicketComment $TicketComment */
		if (!empty($TicketComment) && $TicketComment instanceof TicketComment) {
			$id = $TicketComment->getOne(\'Thread\')->get(\'resource\');
		}
	break;

}


if (!empty($id)) {
	/* @var modProcessorResponse $response */
	$response = $modx->runProcessor(\'mgr/index/update\', array(\'id\' => $id), array(\'processors_path\' => MODX_CORE_PATH . \'components/msearch2/processors/\'));

	if ($response->isError()) {
		$modx->log(modX::LOG_LEVEL_ERROR, print_r($response->getAllErrors(), true));
	}
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/msearch2/elements/plugins/plugin.msearch2.php',
    ),
    14 => 
    array (
      'id' => '14',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'frontendmanager',
      'description' => '',
      'editor_type' => '0',
      'category' => '14',
      'cache_type' => '0',
      'plugincode' => 'if (!$modx->user->hasSessionContext(\'mgr\') || !$modx->user->isMember(\'Administrator\')) return;
switch ($modx->event->name) {
    case \'OnWebPagePrerender\':
        $frontendManager = $modx->getService(\'frontendmanager\',\'frontendManager\', MODX_CORE_PATH . \'components/frontendmanager/model/frontendmanager/\', array());
        if(!$frontendManager) return;
		$contentTypes = explode(\',\', $modx->getOption(\'frontendmanager_contenttypes\'));
        if (in_array($modx->resource->content_type, $contentTypes)) {
			$modx->resource->_output .=  $frontendManager->initialize($modx->context->key);
        }
        break;
    case \'OnBeforeManagerPageInit\':
        if ($_GET[\'frame\']) {
			$modx->regClientCSS(MODX_ASSETS_URL.\'components/frontendmanager/css/mgr/\'.$modx->getOption(\'frontendmanager_manager_css\', NULL, \'manager.css\'));
			$modx->regClientStartupScript(MODX_ASSETS_URL.\'components/frontendmanager/js/mgr/\'.$modx->getOption(\'frontendmanager_manager_js\', NULL, \'manager.js\'));
        }
        break;
    default:
        break;
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/frontendmanager/elements/plugins/plugin.frontendmanager.php',
    ),
    15 => 
    array (
      'id' => '15',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'BannerYClickout',
      'description' => 'Handle ad clicks',
      'editor_type' => '0',
      'category' => '15',
      'cache_type' => '0',
      'plugincode' => 'if ($modx->event->name == \'OnPageNotFound\') {
	$bannery_click = $modx->getOption(\'bannery_click\', null, \'bannerclick\', true);
	if (preg_match(\'/\'.$bannery_click.\'\\/([0-9]+)/\', $_SERVER[\'REQUEST_URI\'], $matches)) {
		$modx->addPackage(\'bannery\', $modx->getOption(\'core_path\') . \'components/bannery/model/\');

		$id = $matches[1];
		$c = $modx->newQuery(\'byAd\');
		$c->select(\'`byAd`.`id`, `Position`.`position`, `byAd`.`url`\');
		$c->leftJoin(\'byAdPosition\', \'Position\', \'Position.ad = byAd.id\');
		$c->where(array(\'Position.id\' => $id));
		if ($ad = $modx->getObject(\'byAd\', $c)) {
			$key = array(
				\'ad\' => $ad->get(\'id\'),
				\'position\' => $ad->get(\'position\'),
				\'ip\' => $_SERVER[\'REMOTE_ADDR\'],
				\'clickdate:LIKE\' => date(\'Y-m-d\') . \'%\'
			);
			if (!$modx->getCount(\'byClick\', $key)) {
				$click = $modx->newObject(\'byClick\', array(
					\'ad\' => $ad->get(\'id\'),
					\'position\' => $ad->get(\'position\'),
					\'clickdate\' => date(\'Y-m-d H:i:s\'),
					\'referrer\' => $_SERVER[\'HTTP_REFERER\'],
					\'ip\' => $_SERVER[\'REMOTE_ADDR\']
				));
				$click->save();
			}
			$url = $ad->get(\'url\');
			$chunk = $modx->newObject(\'modChunk\');
			$chunk->set(\'name\', \'banneryPosition\' . $id);
			$chunk->setContent($url);
			$url = $chunk->process($_GET);

			$modx->sendRedirect($url);
		}
	}
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/bannery/elements/plugins/plugin.banneryclickout.php',
    ),
    16 => 
    array (
      'id' => '16',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'CKEditor',
      'description' => 'CKEditor WYSIWYG editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'ckeditor/elements/plugins/ckeditor.plugin.php',
    ),
    17 => 
    array (
      'id' => '17',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'SimpleSearchIndexer',
      'description' => 'Automatically indexes Resources into Solr.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
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
 * Plugin to index Resources whenever they are changed, published, unpublished,
 * deleted, or undeleted.
 *
 * @var modX $modx
 * @var SimpleSearch $search
 *
 * @package simplesearch
 */

require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

$search->loadDriver($scriptProperties);
if (!$search->driver || (!($search->driver instanceof SimpleSearchDriverSolr) && !($search->driver instanceof SimpleSearchDriverElastic))) return;

/**
 * helper method for missing params in events
 * @param modX $modx
 * @param array $children
 * @param int $parent
 * @return boolean
 */
if (!function_exists(\'SimpleSearchGetChildren\')) {
    function SimpleSearchGetChildren(&$modx,&$children,$parent) {
        $success = false;
        $kids = $modx->getCollection(\'modResource\',array(
            \'parent\' => $parent,
        ));
        if (!empty($kids)) {
            /** @var modResource $kid */
            foreach ($kids as $kid) {
                $children[] = $kid->toArray();
                SimpleSearchGetChildren($modx,$children,$kid->get(\'id\'));
            }
        }
        return $success;
    }
}

$action = \'index\';
$resourcesToIndex = array();
switch ($modx->event->name) {
    case \'OnDocFormSave\':
        $action = \'index\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();

        if ($resourceArray[\'published\'] == 1 && $resourceArray[\'deleted\'] == 0) {
            $action = \'index\';
            foreach ($_POST as $k => $v) {
                if (substr($k,0,2) == \'tv\') {
                    $id = str_replace(\'tv\',\'\',$k);
                    /** @var modTemplateVar $tv */
                    $tv = $modx->getObject(\'modTemplateVar\',$id);
                    if ($tv) {
                        $resourceArray[$tv->get(\'name\')] = $tv->renderOutput($resource->get(\'id\'));
                        $modx->log(modX::LOG_LEVEL_DEBUG,\'Indexing \'.$tv->get(\'name\').\': \'.$resourceArray[$tv->get(\'name\')]);
                    }
                    unset($resourceArray[$k]);
                }
            }
        } else {
            $action = \'removeIndex\';
        }

        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnDocPublished\':
        $action = \'index\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnDocUnpublished\':
    case \'OnDocUnPublished\':
        $action = \'removeIndex\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnResourceDuplicate\':
        $action = \'index\';
        /** @var modResource $newResource */
        $resourcesToIndex[] = $newResource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$newResource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case \'OnResourceDelete\':
        $action = \'removeIndex\';
        $resourcesToIndex[] = $resource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$resource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case \'OnResourceUndelete\':
        $action = \'index\';
        $resourcesToIndex[] = $resource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$resource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
}

foreach ($resourcesToIndex as $resourceArray) {
    if (!empty($resourceArray[\'id\'])) {
        if ($action == \'index\') {
            $search->driver->index($resourceArray);
        } else if ($action == \'removeIndex\') {
            $search->driver->removeIndex($resourceArray[\'id\']);
        }
    }
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    20 => 
    array (
      'id' => '20',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'XRouting',
      'description' => 'XRouting is a simple plugin that handles requests for different contexts. It automatically switches the context based on a (sub)domain AND/OR subfolder.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

    // "refresh cache" part
    case \'OnContextSave\':
    case \'OnContextRemove\':
    case \'OnSiteRefresh\':
        
        $contexts = array();
        $cacheKey = \'xrouting_contextmap\';
        $cacheOptions = array();
        
        // build context array
        $query = $modx->newQuery(\'modContext\');
        $query->where(array(\'modContext.key:NOT IN\' => array(\'mgr\')));
        $query->sortby($modx->escape(\'modContext\') . \'.\' . $modx->escape(\'key\'), \'DESC\');
        $contextsGraph = $modx->getCollectionGraph(\'modContext\', \'{"ContextSettings":{}}\', $query);
        
        foreach ($contextsGraph as $context) {
            $contextSettings = array();
            foreach ($context->ContextSettings as $cSetting) {
                $contextSettings[$cSetting->get(\'key\')] = $cSetting->get(\'value\');
            }
            
            if (!empty($contextSettings[\'http_host\']) && !empty($contextSettings[\'base_url\'])) {
                
                // add http_host to hosts list
                $contexts[\'_hosts\'][$contextSettings[\'http_host\']][] = $context->get(\'key\');
                
                // add alias hosts to host list
                if (!empty($contextSettings[\'http_host_aliases\'])) {
                    foreach (explode(\',\',$contextSettings[\'http_host_aliases\']) as $alias) {
                        $contexts[\'_hosts\'][$alias][] = $context->get(\'key\');
                    }
                }
                
                // add context settings
                $contexts[$context->get(\'key\')] = $contextSettings;
            }
        }
         
        unset($contextsGraph);
        $modx->cacheManager->set($cacheKey, $contexts, 0, $cacheOptions);
    break;
    
    
    // "routing" part
    default:
    case \'OnHandleRequest\':
        if ($modx->context->get(\'key\') == \'mgr\') return;
            
        $contexts = array();
        
        $cacheKey = \'xrouting_contextmap\';
        $cacheOptions = array();
        $contexts = $modx->cacheManager->get($cacheKey, $cacheOptions);
        
        if (empty($contexts)) {
        // build context array
            $query = $modx->newQuery(\'modContext\');
            $query->where(array(\'modContext.key:NOT IN\' => array(\'mgr\')));
            $query->sortby($modx->escape(\'modContext\') . \'.\' . $modx->escape(\'key\'), \'DESC\');
            $contextsGraph = $modx->getCollectionGraph(\'modContext\', \'{"ContextSettings":{}}\', $query);
            
            foreach ($contextsGraph as $context) {
                $contextSettings = array();
                foreach ($context->ContextSettings as $cSetting) {
                    $contextSettings[$cSetting->get(\'key\')] = $cSetting->get(\'value\');
                }
                
                if (!empty($contextSettings[\'http_host\']) && !empty($contextSettings[\'base_url\'])) {
                    
                    // add http_host to hosts list
                    $contexts[\'_hosts\'][$contextSettings[\'http_host\']][] = $context->get(\'key\');
                    
                    // add alias hosts to host list
                    if (!empty($contextSettings[\'http_host_aliases\'])) {
                        foreach (explode(\',\',$contextSettings[\'http_host_aliases\']) as $alias) {
                            $contexts[\'_hosts\'][$alias][] = $context->get(\'key\');
                        }
                    }
                    
                    // add context settings
                    $contexts[$context->get(\'key\')] = $contextSettings;
                }
            }
                         
            unset($contextsGraph);
            $modx->cacheManager->set($cacheKey, $contexts, 0, $cacheOptions);
        }


        if (!empty($contexts)) {
            $http_host = $_SERVER[\'HTTP_HOST\'];
            if ($modx->getOption(\'xrouting.include_www\', null, true)) {
                $http_host = str_replace(\'www.\',\'\',$http_host);
            }
            
            $modx_base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);
            $requestUrl = str_replace(\'//\',\'/\',$modx_base_url.$_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')]);
            $matches = array();
            
            
        // find matching hosts
            $matched_contexts = $contexts[\'_hosts\'][$http_host];
            
            
            foreach ((array) $matched_contexts as $index => $ckey) {
                
                $context = $contexts[$ckey];
                $strpos = strpos($requestUrl, $contexts[$ckey][\'base_url\']);
                if ($strpos === 0) {
                    $matches[strlen($contexts[$ckey][\'base_url\'])] = $ckey;
                }
            }

        // modify request for the matched context
            if (!empty($matches)) {
                
                $cSettings = $contexts[$matches[max(array_keys($matches))]];
                $cKey = $matches[max(array_keys($matches))];
                
                // do we need to switch the context?
                if ($modx->context->get(\'key\') != $cKey) {
                    $modx->switchContext($cKey);
                }
                
                // remove base_url from request query
                if ($cSettings[\'base_url\'] != $modx_base_url) {
                    $newRequestUrl = str_replace($cSettings[\'base_url\'],\'\',$requestUrl);
                    $_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')] = $newRequestUrl;
                }
                
                
            } else if ($_REQUEST[\'xrouting-debug\'] != \'1\' || !$modx->getOption(\'xrouting.allow_debug_info\', null, false)) {
                // if no match found
                if ($modx->getOption(\'xrouting.show_no_match_error\', null, true)) {
                    $modx->sendErrorPage();
                } else {
                    $modx->switchContext($modx->getOption(\'xrouting.default_context\', null, \'web\'));
                }
                
            }
        
        // output debug info
            if ($_REQUEST[\'xrouting-debug\'] == \'1\' && $modx->getOption(\'xrouting.allow_debug_info\', null, false)) {
                $debuginfo = \'<pre>\';
                $debuginfo .= "## MODX context map:\\n\\n" . print_r($contexts,true) . "\\n\\n\\n";
                $debuginfo .= "## Requested URL: " . $_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')] . "\\n\\n\\n";
                $debuginfo .= "## Requested URL with base_url: ". $requestUrl ."\\n\\n\\n";
                $debuginfo .= "## Matched context(s) (Array key defines match quality):\\n\\n" . print_r($matches,true) . "\\n\\n\\n";
                $debuginfo .= "## Request will go to context: " . $matches[max(array_keys($matches))] . "\\n\\n\\n";
                $debuginfo .= "## Modified request URL: " . $newRequestUrl . "\\n\\n\\n";
                die($debuginfo);
            }
        }
    break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'ru' => 
      array (
        0 => 
        array (
          'principal' => 0,
          'authority' => 9999,
          'policy' => 
          array (
            'load' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 1,
          'authority' => 9999,
          'policy' => 
          array (
            'load' => true,
            'list' => true,
            'view' => true,
            'save' => true,
            'remove' => true,
            'copy' => true,
            'view_unpublished' => true,
          ),
        ),
      ),
    ),
  ),
);