<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQfYDpqa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQfYDpqa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQfYDpqa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQfYDpqa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQfYDpqa\App_KernelDevDebugContainer([
    'container.build_hash' => 'QfYDpqa',
    'container.build_id' => '8e925cb6',
    'container.build_time' => 1711375813,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQfYDpqa');