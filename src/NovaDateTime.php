<?php

namespace Jagdeepbanga\NovaDateTime;

use Laravel\Nova\Fields\DateTime;

class NovaDateTime extends DateTime
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-date-time';

    /**
     * Set default hour
     * @param  int  $int
     * @return NovaDateTime
     */
    public function pickerDefaultHour(int $int)
    {
        return $this->withMeta([__FUNCTION__ => $int]);
    }

    /**
     * Set default minute
     * @param  int  $int
     * @return NovaDateTime
     */
    public function pickerDefaultMinute(int $int)
    {
        return $this->withMeta([__FUNCTION__ => $int]);
    }

    /**
     * Set default seconds
     * @param  int  $int
     * @return NovaDateTime
     */
    public function pickerDefaultSeconds(int $int)
    {
        return $this->withMeta([__FUNCTION__ => $int]);
    }
}
