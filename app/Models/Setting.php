<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use Translatable;

    protected $table = "settings";

    protected $with = ['translations'];

    protected $translatedAttributes = ['value'];

    protected $fillable = ['key', 'is_translatable', 'plain_value'];

    protected $casts = ['is_translatable' => 'boolean'];

    /**
     * Set the given settings.
     *
     * @param array $settings
     * @return void
     */

    public static function setMany($settings)
    {
        foreach ($settings as $key => $value)
        {
            self::set($key, $value);
        }
    }

    /**
     * Set the given setting.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function set($key, $value)
    {
        if ($key === 'translatable')
        {
            static::setTranslatableSettings($value);
        }

        static::updateOrCreate(['key' => $key], ['plain_value' => is_array($value) ? json_encode($value) : $value]);
    }
    /**
     * Set a translatable settings.
     *
     * @param array $settings
     * @return void
     */
    public static function setTranslatableSettings($settings = [])
    {
        foreach ($settings as $key => $value)
        {
            static::updateOrCreate(
                ['key' => $key],
                [
                    'is_translatable' => true,
                    'value' => $value
                ]
            );
        }
    }
}
