@extends('layouts.simple')

@section('body')

    <div class="container small">

        <div class="my-l">&nbsp;</div>

        <div class="card content-wrap auto-height">
            <h1 class="list-heading">Licenses</h1>

            <p>
                This page details license information for BookStack in addition to the projects & libraries that are used within BookStack.
                Many projects listed may only be used in a development context.
            </p>

            <ul>
                <li><a href="#bookstack-license">BookStack License</a></li>
                <li><a href="#php-lib-licenses">PHP Library Licenses</a></li>
                <li><a href="#js-lib-licenses">JavaScript Library Licenses</a></li>
                <li><a href="#js-lib-licenses">Other Licenses</a></li>
            </ul>
        </div>

        <div id="bookstack-license" class="card content-wrap auto-height">
            <h3 class="list-heading">BookStack License</h3>
            <div style="white-space: pre-wrap;" class="mb-m">{{ $license }}</div>
            <p>BookStack® is a UK registered trade mark of Daniel Brown. </p>
        </div>

        <div id="php-lib-licenses" class="card content-wrap auto-height">
            <h3 class="list-heading">PHP Library Licenses</h3>
            <div style="white-space: pre-wrap;">{{ $phpLibData }}</div>
        </div>

        <div id="js-lib-licenses" class="card content-wrap auto-height">
            <h3 class="list-heading">JavaScript Library Licenses</h3>
            <div style="white-space: pre-wrap;">{{ $jsLibData }}</div>
        </div>

        <div id="other-licenses" class="card content-wrap auto-height">
            <h3 class="list-heading">Other Licenses</h3>
            <div style="white-space: pre-line;">BookStack makes heavy use of PHP:
                License: PHP License, version 3.01
                License File: https://www.php.net/license/3_01.txt
                Copyright: Copyright (c) 1999 - 2019 The PHP Group. All rights reserved.
                Link: https://www.php.net/
                -----------
                BookStack uses Icons from Google Material Icons:
                License: Apache License Version 2.0
                License File: https://github.com/google/material-design-icons/blob/master/LICENSE
                Copyright: Copyright 2020 Google LLC
                Link: https://github.com/google/material-design-icons
                -----------
                BookStack is distributed with TinyMCE:
                License: MIT
                License File: https://github.com/tinymce/tinymce/blob/release/6.7/LICENSE.TXT
                Copyright: Copyright (c) 2022 Ephox Corporation DBA Tiny Technologies, Inc.
                Link: https://github.com/tinymce/tinymce
            </div>
        </div>
    </div>

@endsection