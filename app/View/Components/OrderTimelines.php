<?php

namespace App\View\Components;

use App\Models\OrderItem;
use Illuminate\View\Component;

class OrderTimelines extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $orderItem;
    public function __construct(OrderItem $orderItem)
    {
        $this->orderItem = $orderItem;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order-timelines');
    }
}
