<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property  array<Item> $items
 */
class Order extends Model
{
    protected $table = 'orders';

    protected $guarded = ['status'];

    protected $fillable = [
        'user_id',
        'user_information',
        'deliver_information',
        'alt_deliver_information',
        'confirm_regulations_store',
        'confirm_privacy_policy',
        'comment',
    ];

    protected $casts = [
        'user_information' => 'array',
        'deliver_information' => 'array',
        'alt_deliver_information' => 'array',
        'confirm_regulations_store' => 'boolean',
        'confirm_privacy_policy' => 'boolean',
    ];
    /**
     * @var int
     */

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getPrice(): float
    {
        $price = null;

        foreach ($this->items as $item) {
            $price+= $item->getPrice();
        }

        return round($price, 2);
    }

    public function getClearPrice(): float
    {
        $price = null;

        foreach ($this->items as $item) {
            $price+= $item->getClearPrice();
        }

        return round($price, 2);
    }

    public function getBoxPrice(): float
    {
        $price = null;

        foreach ($this->items as $item) {
            $price+= $item->boxPrice();
        }

        return round($price, 2);
    }

    public function startCheckout()
    {
        $this->status = 1;
    }

    public function verify(int $pid)
    {
        $this->pid = $pid;
        $this->status = 2;
    }

    public function calculateBoxPrice()
    {
        $price              = 0;
//        $boxesTypes         = [];
        $boxesCompleteness  = [];

        foreach ($this->items as $item) {
            /** @var Box $box */
            $box                    = $item->product->box;
//            $boxesTypes[$box->id]   = $box->size;
            if (empty($boxesCompleteness[$box->id][1])) {
                $boxesCompleteness[$box->id][1] = 0;
                $price += $box->price;
            }

            foreach ($boxesCompleteness[$box->id] as $boxesCompletenessItemIndex => $boxesCompletenessItem) {
                $currentIndex = $boxesCompletenessItemIndex;
                for ($i = 1; $i <= $item->count; $i++) {
                    if ($boxesCompleteness[$box->id][$boxesCompletenessItemIndex] + $item->product->size > $box->size) {
                        $currentIndex = count($boxesCompleteness[$box->id]);
                        $boxesCompleteness[$box->id][$currentIndex] = $item->product->size;
                        $price += $box->price;
                    } else {
                        $boxesCompleteness[$box->id][$currentIndex] += $item->product->size;
                    }
                }
            }
        }

        return round($price, 2);
    }
}
