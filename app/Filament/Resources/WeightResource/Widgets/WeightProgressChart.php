<?php

namespace App\Filament\Resources\WeightResource\Widgets;

use App\Models\Weight;
use Filament\Widgets\LineChartWidget;

class WeightProgressChart extends LineChartWidget
{
    protected static ?string $heading = 'Weight Progress';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Weight',
                    'data' => Weight::get()->map(fn ($weight) => $weight->weight)->toArray(),
                ],
            ],
            'labels' => Weight::get()->map(fn ($weight) => $weight->date->format('m/d/Y'))->toArray(),

        ];
    }
}
