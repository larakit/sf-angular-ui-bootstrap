<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ui-bootstrap')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->ngModule('ui.bootstrap')
    ->jsPackage('ui-bootstrap-tpls.min.js');
