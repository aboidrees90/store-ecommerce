<?php


function getDirection($str = null)
{
    $locale = app()->getLocale();

    if ($str === null) {
        return $locale === 'ar' ? 'rtl' : 'ltr';
    } else {
        return $locale === 'ar' ? $str . '-' . 'rtl' : $str;
    }

    //
}
