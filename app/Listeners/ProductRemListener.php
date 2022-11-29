<?php

namespace App\Listeners;

use App\Events\ProductRemEvent;
use App\Models\Moviment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductRemListener
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
     * @param  \App\Events\ProductRemEvent  $event
     * @return void
     */
    public function handle(ProductRemEvent $event)
    {
        $product = $event->product;
        $this->entity->status = 'Saída';
        $this->entity->product_sku = $product->sku;
        $this->entity->qtd = $product->qtd;
        $this->entity->save();
    }
}
