<?php

namespace RealDriss\Menu\Models;

use RealDriss\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuLocation extends BaseModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu_locations';

    /**
     * @var array
     */
    protected $fillable = [
        'menu_id',
        'location',
    ];

    /**
     * @return BelongsTo
     */
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'menu_id')->withDefault();
    }
}
