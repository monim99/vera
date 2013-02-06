<?php
/**
 * Loader
 */
$loader->add('Aura\Input\\', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src');

/**
 * Aura\Input\FieldCollection
 */
$di->params['Aura\Input\FieldCollection']['field_factory'] = $di->lazyNew('Aura\Input\FieldFactory');


/**
 * Aura\Input\Form
 */
$di->params['Aura\Input\Form']['fields'] = $di->lazyNew('Aura\Input\FieldCollection');