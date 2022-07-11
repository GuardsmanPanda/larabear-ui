<?php

namespace GuardsmanPanda\LarabearUi\Web\Www\Shared\Component;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component {
    public string $classes = 'font-medium rounded transition-all hover:scale-105 duration-50 items-center shadow hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2';

    public function __construct(
        public readonly string $text,
        public readonly string $color = 'gray',
        public readonly string $size = 'default',
        public readonly string|null $icon = null
    ) {}

    public function render(): View {
        return view(view: 'bear::button');
    }
}