<?php

namespace App\Orchid\Screens;

use Illuminate\Http\Request;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;

class StateScreen extends Screen
{
     /**
     * The number of clicks.
     *
     * @var int
     */
    public $clicks;

    /**
 * Increment the click count.
 */
public function increment()
{
    $this->clicks++;
}


     /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'clicks'  => $this->clicks ?? 0,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'State';
    }

   /**
 * The screen's layout elements.
 *
 * @return \Orchid\Screen\Layout[]|string[]
 */
public function layout(): array
{
    return [
        Layout::rows([
            Label::make('clicks')
                ->title('Click Count:'),

            Button::make('Increment Click')
                ->type(Color::DARK)
                ->method('increment'),
        ]),
    ];
}
}
