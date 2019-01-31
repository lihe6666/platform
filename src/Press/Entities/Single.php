<?php

declare(strict_types=1);

namespace Orchid\Press\Entities;

use Orchid\Screen\Fields\SelectField;
use Orchid\Screen\Fields\DateTimerField;
use Illuminate\Contracts\Routing\UrlRoutable;

abstract class Single implements EntityContract, UrlRoutable
{
    use Structure, Actions;

    /**
     * Registered fields for main.
     *
     * @return array
     * @throws \Throwable
     */
    public function main(): array
    {
        return [
            DateTimerField::make('publish_at')
                ->title(__('Time of Publication')),

            SelectField::make('status')
                ->options($this->status())
                ->title(__('Status')),
        ];
    }
}
