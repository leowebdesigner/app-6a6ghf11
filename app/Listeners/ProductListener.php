<?php

namespace App\Listeners;

use App\Events\ProductEvent;
use App\Models\Moviment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductListener
{
    protected $entity;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Moviment $moviment)
    {
        $this->entity = $moviment;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ProductEvent  $event
     * @return void
     */
    public function handle(ProductEvent $event)
    {
        $product = $event->product;
        $this->entity->status = 'Entrada';
        $this->entity->product_sku = $product->sku;
        $this->entity->qtd = $product->qtd;
        $this->entity->save();
    }
}
