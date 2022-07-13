<?php

namespace GuardsmanPanda\LarabearUi\Web\Www\Shared\Component;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use RuntimeException;

class Button extends Component {
    public string $classes = 'inline-flex rounded transition-all hover:scale-105 duration-50 items-center shadow hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2';

    public function __construct(
        public readonly string $color = 'gray',
        public readonly string $size = 'default',
        public readonly string|null $icon = null
    ) {
        $this->classes .= match ($this->size) {
            'default' => ' px-5 py-2 font-medium',
            'small' => ' px-4 py-1.5 font-medium',
            'tiny' => ' text-sm px-3 py-1 font-bold',
            default => throw new RuntimeException('Unknown size: ' . $this->size),
        };
        $this->classes .= match ($this->color) {
            'gray' => ' text-gray-600 hover:text-gray-700 bg-gray-200 hover:bg-gray-300 shadow-gray-500/20 hover:shadow-gray-500/20 focus:ring-gray-300',
            default => throw new RuntimeException('Unknown color: ' . $this->color),
        };
    }

    public function render(): View {
        return view(view: 'bear::component.button');
    }
}
