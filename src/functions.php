<?php

namespace Dispify;

if (!\function_exists(__NAMESPACE__ . '\class_aliases')) {
    function class_aliases($class): array
    {
        static $classAliases = [];
        foreach (\array_slice(\get_declared_classes(), \count($classAliases)) as $newClassName) {
            $classAliases[\strtolower($newClassName)] = [];
            $realClassName = (new \ReflectionClass($newClassName))->getName();
            if (\strtolower($newClassName) !== \strtolower($realClassName)) {
                $classAliases[\strtolower($realClassName)][] = $newClassName;
            }
        }

        return $classAliases[\strtolower(\is_object($class) ? \get_class($class) : $class)] ?? [];
    }
}
