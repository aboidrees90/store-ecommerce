<?php


use Mcamara\LaravelLocalization\LaravelLocalization;

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


function getCurrentLocaleCountryCode($regional = null): string
{
  return strtolower(explode('_', $regional)[1]);
}