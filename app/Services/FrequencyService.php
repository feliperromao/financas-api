<?php

namespace App\Services;


class FrequencyService
{
    const FREQUENCY_DAILY = 'DAILY';

    const FREQUENCY_WEEKLY = 'WEEKLY';

    const FREQUENCY_MONTHLY = 'MONTHLY';

    const FREQUENCY_YEARLY = 'YEARLY';


    public function index()
    {
        return [
            self::FREQUENCY_DAILY => 'Diário',
            self::FREQUENCY_WEEKLY => 'Semanal',
            self::FREQUENCY_MONTHLY => 'Mensal',
            self::FREQUENCY_YEARLY => 'Anual',
        ];
    }

}