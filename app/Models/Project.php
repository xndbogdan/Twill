<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class Project extends Model
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
        'url'
        // 'position',
        // 'public',
        // 'featured',
        // 'publish_start_date',
        // 'publish_end_date',
    ];


     public $translatedAttributes = [
         'title',
         'description',
         'active',
         'url'
     ];

     public $slugAttributes = [
         'url',
     ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ];

     public $mediasParams = [
         'cover' => [
             'default' => [
                 [
                     'name' => 'landscape',
                     'ratio' => 16 / 9,
                 ],
                 [
                     'name' => 'portrait',
                     'ratio' => 3 / 4,
                 ],
             ],
             'mobile' => [
                 [
                     'name' => 'mobile_classic',
                     'ratio' => 1,
                 ],
                 [
                     'name' => 'mobile-nu',
                     'ratio' => 4/5,
                 ],
             ],
         ],
     ];
}
