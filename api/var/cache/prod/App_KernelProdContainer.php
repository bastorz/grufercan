<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSePAHxb\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSePAHxb/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerSePAHxb.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerSePAHxb\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerSePAHxb\App_KernelProdContainer([
    'container.build_hash' => 'SePAHxb',
    'container.build_id' => '4af39255',
    'container.build_time' => 1641562735,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSePAHxb');
