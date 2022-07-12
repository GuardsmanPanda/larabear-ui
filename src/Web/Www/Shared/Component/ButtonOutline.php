<?php

namespace GuardsmanPanda\LarabearUi\Web\Www\Shared\Component;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use RuntimeException;

class ButtonOutline extends Component {
    public string $classes = 'rounded border transition-all hover:scale-105 duration-50 items-center shadow hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2';

    public function __construct(
        public readonly string $color = 'gray',
        public readonly string $size = 'default',
        public readonly string|null $icon = null
    ) {
        $this->classes .= match ($this->size) {
            'default' => ' px-5 py-2 font-medium',
            'small' => ' text-sm px-4 py-1.5 font-medium',
            'tiny' => ' text-sm px-3 py-1 font-bold',
            default => throw new RuntimeException('Unknown size: ' . $this->size),
        };
        $this->classes .= match ($this->color) {
            'gray' => ' text-gray-600 hover:text-gray-700 hover:bg-gray-50 shadow-gray-500/20 hover:shadow-gray-500/20 focus:ring-gray-300',
            default => throw new RuntimeException('Unknown color: ' . $this->color),
        };
    }

    public function render(): View {
        $icon_classes = '';
        if ($this->icon !== null) {
            $icon_classes .= match ($this->color) {
                'gray' => 'text-gray-500',
                default => throw new RuntimeException('Unknown color: ' . $this->color),
            };
            $icon_classes .= match ($this->size) {
                'default' => ' h-6 w-6',
                'small' => ' h-5 w-5',
                'tiny' => ' h-4 w-4',
                default => throw new RuntimeException('Unknown size: ' . $this->size),
            };
        }
        return view(view: 'bear::component.button', data: [
            'icon_classes' => $icon_classes,
        ]);
    }
}