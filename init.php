<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ui-bootstrap')
    ->usePackage('larakit/sf-angular')
    ->ngModule('ui.bootstrap')
    ->js('//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.3.3/ui-bootstrap-tpls.min.js');
