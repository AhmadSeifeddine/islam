<?php

namespace App\Helpers;


if (!function_exists('getUrlParts')) {
    function getUrlParts()
    {
        return explode('/', request()->path());
    }
}

if (!function_exists('buildHierarchy')) {
    function buildHierarchy($categories, $parentId = null, $prefix = '')
    {
        $result = [];

        foreach ($categories as $category) {
            if ($category->parent_id == $parentId) {

                $result[] = [
                    'id' => $category->id,
                    'text' => $prefix . $category->name,
                    'level' => substr_count($prefix, '—')
                ];

                $children = buildHierarchy($categories, $category->id, $prefix . '____');
                $result = array_merge($result, $children);
            }
        }

        return $result;
    }
}


if (!function_exists('getParentTree')) {
    function getParentTree($categoryId)
    {
        $parents = [];
        $category = \App\Models\Category::find($categoryId);

        while ($category && $category->parent) {
            array_unshift($parents, [
                'id' => $category->parent->id,
                'name' => $category->parent->name
            ]);
            $category = $category->parent;
        }

        return $parents;
    }
}

if (!function_exists('getBreadcrumbs')) {
    function getBreadcrumbs($categoryId)
    {
        $parents = getParentTree($categoryId);
        $category = \App\Models\Category::find($categoryId);

        // Add the current category at the end
        if ($category) {
            $parents[] = [
                'id' => $category->id,
                'name' => $category->name
            ];
        }

        return implode(' > ', array_map(function($cat) {
            return $cat['name'];
        }, $parents));
    }
}

