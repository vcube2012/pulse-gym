<?php

namespace App\Console\Commands;

use App\Actions\OrderPriceAction;
use App\Models\Club;
use Illuminate\Console\Command;

class SetValueSort extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:PriceSort';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $actionOrder = new OrderPriceAction();
        $clubs = Club::all();
        foreach ($clubs as $club) {
            $i=1;
            $categories = $club->price;
            foreach ($categories as $category)
            {
                $prices = $actionOrder($category->price()->where('club_id',$category->pivot->club_id)->orderBy('price')->get());
                foreach ($prices as $price)
                {
                    $price->sort=$i++;
                    $price->save();
                }
            }
        }
        return Command::SUCCESS;
    }
}
