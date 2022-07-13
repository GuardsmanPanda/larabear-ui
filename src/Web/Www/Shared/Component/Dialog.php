<?php

namespace GuardsmanPanda\LarabearUi\Web\Www\Shared\Component;

use Illuminate\View\Component;
use Illuminate\View\View;

class Dialog  extends Component {

    public function __construct(
        public readonly string $title,
        public readonly string $closeText = 'Close',
        public readonly bool $includeButton = true
    ) {}

    public function render(): View {
        return view(view: 'bear::component.dialog');
    }
}
