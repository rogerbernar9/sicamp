<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerESniUHc\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerESniUHc/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerESniUHc.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerESniUHc\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerESniUHc\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'ESniUHc',
    'container.build_id' => '9a22019f',
    'container.build_time' => 1547058876,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerESniUHc');
