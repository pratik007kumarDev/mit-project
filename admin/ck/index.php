<?php
session_start();
$_SESSION['imagepaths']="images";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
 * CKFinder
 * ========
 * http://cksource.com/ckfinder
 * Copyright (C) 2007-2014, CKSource - Frederico Knabben. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>CKFinder - Sample - CKEditor Integration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow" />

    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckfinder2/ckfinder.js"></script>
</head>
<body>
<h1 class="samples">
    CKFinder - Sample - CKEditor Integration
</h1>
<div class="description">

    <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>

    <script type="text/javascript">

        // This is a check for the CKEditor class. If not defined, the paths must be checked.
        if ( typeof CKEDITOR == 'undefined' )
        {
            document.write(
                '<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
                    'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
                    'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
                    'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
                    'value (line 32).' ) ;
        }
        else
        {
            var editor = CKEDITOR.replace( 'editor1' );
            editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );

            // Just call CKFinder.setupCKEditor and pass the CKEditor instance as the first argument.
            // The second parameter (optional), is the path for the CKFinder installation (default = "/ckfinder/").
            //     CKFinder.setupCKEditor( editor, 'ckfinder/' ) ;



            CKFinder.setupCKEditor( editor, { basePath : 'ckfinder2/', id:'123', startupPath : "Images:/images/", startupFolderExpanded : true, rememberLastFolder : false } ) ;

            // It is also possible to pass an object with selected CKFinder properties as a second argument.
            // CKFinder.setupCKEditor( editor, { basePath : '../', skin : 'v1' } ) ;
        }

    </script>
</p>

</div>
</body>
</html>