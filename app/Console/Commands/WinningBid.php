<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Product;
use App\OrderStatus;
use Carbon;
class WinningBid extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:winner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify the bid winner';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $products = Product::where('ends_on','<=',Carbon::now())->get();
      foreach($products as $product){
        $product->has_ended = 1;
        $product->save();

        $lastBid = $product->lastBid;

        $order = new OrderStatus();
        $order->order_id = $lastBid->id;
        $order->status = 1;
        $order->save();

        //SEND EMAIL
      }
    }
}
