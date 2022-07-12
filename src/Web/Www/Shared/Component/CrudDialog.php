<?php

namespace GuardsmanPanda\LarabearUi\Web\Www\Shared\Component;

use Illuminate\View\Component;
use Illuminate\View\View;
use RuntimeException;

class CrudDialog  extends Component {

    public function __construct(
        public readonly string $title,
        public readonly string $endpoint,
        public readonly string $type = 'update',
        public readonly string $submitText = 'Save',
        public readonly string $cancelText = 'Cancel',
    ) {

    }

    public function render(): View {
        return view(view: 'bear::component.crud-dialog', data: [
            'action' => match ($this->type) {
                'create' => "hx-post='$this->endpoint'",
                'update' => "hx-patch='$this->endpoint'",
                'delete' => "hx-delete='$this->endpoint'",
                default => throw new RuntimeException('Unknown type: ' . $this->type),
            },
        ]);
    }
}