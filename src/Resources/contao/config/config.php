<?php
/**
 * Contao 4 TinyMCE Plugins Bundle
 *
 * @copyright 2011, 2014, 2018 agentur fipps e.K.
 * @author    Arne Borchert
 * @package   fipps\contao-tinymceplugins-bundle
 * @license   LGPL 3.0+
 */

$GLOBALS['TL_HOOKS']['parseBackendTemplate'][] = array('Fipps\TinymcepluginsBundle\Hooks', 'parseBackendTemplate');

$GLOBALS['TinyMCE']['extended_valid_elements'] = 'small, mark, address, footer';
$GLOBALS['TinyMCE']['importcss_file_filter']   = 'TinyMCE.css';
$GLOBALS['TinyMCE']['content_css']             = 'Styles.css';
$GLOBALS['TinyMCE']['menubar']                 = 'edit insert view tools';

$GLOBALS['TinyMCE']['menu']['file']   = array(
    'File' => 'newdocument',
);
$GLOBALS['TinyMCE']['menu']['edit']   = array(
    'Edit' => 'undo redo | cut copy paste pastetext | selectall | searchreplace',
);
$GLOBALS['TinyMCE']['menu']['insert'] = array(
    'Insert' => 'link | charmap | template hr',
);
$GLOBALS['TinyMCE']['menu']['view']   = array(
    'View' => 'visualaid visualblocks',
);
$GLOBALS['TinyMCE']['menu']['format'] = array(
    'Format' => 'bold italic underline strikethrough superscript subscript | formats | removeformat',
);
$GLOBALS['TinyMCE']['menu']['table']  = array(
    'Table' => 'inserttable tableprops deletetable | cell row column',
);
$GLOBALS['TinyMCE']['menu']['tools']  = array(
    'Tools' => 'spellchecker code',
);

$GLOBALS['TinyMCE']['toolbar'] = array(
    'spellchecker | cut copy paste pastetext | searchreplace | spellchecker | undo redo | link unlink | charmap',
    'styleselect | bold italic strikethrough superscript subscript | alignleft aligncenter alignright | bullist numlist outdent indent | removeformat',
);

$GLOBALS['TinyMCE']['style_formats']['Headers'] = array(
    array(
        'title'  => 'Header 1',
        'format' => 'h1',
    ),
    array(
        'title'  => 'Header 2',
        'format' => 'h2',
    ),
    array(
        'title'  => 'Header 3',
        'format' => 'h3',
    ),
    array(
        'title'  => 'Header 4',
        'format' => 'h4',
    ),
    array(
        'title'  => 'Header 5',
        'format' => 'h5',
    ),
    array(
        'title'  => 'Header 6',
        'format' => 'h6',
    ),
);
$GLOBALS['TinyMCE']['style_formats']['Blocks']  = array(
    array(
        'title'  => 'Paragraph',
        'format' => 'p',
    ),
    array(
        'title'  => 'Blockquote',
        'format' => 'blockquote',
    ),
    array(
        'title'  => 'Address',
        'format' => 'address',
    ),
    //        array(
    //            'title'  => 'Pre',
    //            'format' => 'pre',
    //        ),
);
//$GLOBALS['TinyMCE']['style_formats']['Inline']    = array(
//    array(
//        'title'  => 'Bold',
//        'icon'   => "bold",
//        'format' => "bold",
//    ),
//    array(
//        'title'  => 'Italic',
//        'icon'   => 'italic',
//        'format' => 'italic',
//    ),
//    array(
//        'title'  => 'Underline',
//        'icon'   => 'underline',
//        'format' => 'underline',
//    ),
//    array(
//        'title'  => 'Strikethrough',
//        'icon'   => 'strikethrough',
//        'format' => 'strikethrough',
//    ),
//    array(
//        'title'  => 'Superscript',
//        'icon'   => 'superscript',
//        'format' => 'superscript',
//    ),
//    array(
//        'title'  => 'Subscript',
//        'icon'   => 'subscript',
//        'format' => 'subscript',
//    ),
//    array(
//        'title'  => 'Code',
//        'icon'   => 'code',
//        'format' => 'code',
//    ),
//    array(
//        'title'  => 'small',
//        'inline' => 'small',
//    ),
//    array(
//        'title'  => 'mark',
//        'inline' => 'mark',
//    ),
//);
//$GLOBALS['TinyMCE']['style_formats']['Alignment'] = array(
//    array(
//        'title'  => 'Left',
//        'icon'   => 'alignleft',
//        'format' => 'alignleft',
//    ),
//    array(
//        'title'  => 'Center',
//        'icon'   => 'aligncenter',
//        'format' => 'aligncenter',
//    ),
//    array(
//        'title'  => 'Right',
//        'icon'   => 'alignright',
//        'format' => 'alignright',
//    ),
//    array(
//        'title'  => 'Justify',
//        'icon'   => 'alignjustify',
//        'format' => 'alignjustify',
//    ),
//);
