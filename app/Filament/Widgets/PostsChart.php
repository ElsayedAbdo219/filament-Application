<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class PostsChart extends ChartWidget
{
  protected ?string $heading = 'Posts Chart';

  protected function getData(): array
  {
    $data = Trend::model(Post::class)
      ->count();

    return [
      'datasets' => [
        [
          'label' => 'Blog posts',
          'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
        ],
      ],
      'labels' => $data->map(fn(TrendValue $value) => $value->date),
    ];
  }
  protected function getType(): string
  {
    return 'bar';
  }
}
