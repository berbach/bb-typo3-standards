<?php

declare(strict_types=1);

namespace Bb\Standards\Configuration\TCA;

class SocialMediaCrop
{
    public static function getOpenGraphConfiguration(): array
    {
        return [
            'config' => [
                'cropVariants' => [
                    'default' => [
                        'disabled' => true,
                    ],
                    'social' => [
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => [],
                        'cropArea' => [
                            'x' => '0.0',
                            'y' => '0.0',
                            'width' => '1.0',
                            'height' => '1.0',
                        ],
                        'allowedAspectRatios' => [
                            '1.91:1' => [
                                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                                'value' => 1200 / 630,
                            ]
                        ],
                        'selectedRatio' => '1.91:1',
                    ],
                ],
            ],
        ];
    }

}