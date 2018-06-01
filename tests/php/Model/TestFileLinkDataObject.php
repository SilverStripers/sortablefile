<?php

namespace Bummzack\SortableFile\Tests\Model;

use SilverStripe\Assets\File;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class TestFileLinkDataObject extends DataObject
{
    private static $db = [
        'SortOrder' => 'Int'
    ];

    private static $has_one = [
        'File' => File::class,
        'Owner' => TestManyManyThroughDataObject::class
    ];

    private static $extensions = [
        Versioned::class
    ];

    private static $default_sort = 'SortOrder';
    private static $table_name = 'Bummzack_TestFileLinkDataObject';
}
