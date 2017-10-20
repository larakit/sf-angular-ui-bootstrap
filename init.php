<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ui-bootstrap')
    ->usePackage('larakit/sf-angular-touch')
    ->usePackage('larakit/sf-angular-animate')
    ->usePackage('larakit/sf-bootstrap')
    ->setSourceDir('public')
    ->jsPackage('ui-bootstrap.js')
    ->jsPackage('ui-bootstrap-tpls.js')
    ->cssPackage('ui-bootstrap-csp.css');

\Larakit\LkNgModule::register('ui.bootstrap');