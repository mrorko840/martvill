<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Session;
use App;
use App\Models\Preference;
use Auth;
use Cache;
use App\Models\Language;
use Cart;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $langData = Preference::getAll()->where('field', 'dflt_lang')->first()->value;
        $userId = (int)Cart::userId();

        if (!empty($userId)  && isset($userId) && Cache::get(config('cache.prefix') . '-user-language-'. $userId)) {
            $langData = Cache::get(config('cache.prefix') . '-user-language-'. $userId);
        }

        if (!auth()->user() && !isset($userId) || $userId == 0) {
            $langData = Cache::get(config('cache.prefix') . '-guest-language-'. request()->server('HTTP_USER_AGENT'));
        }

        $language = Language::where(['short_name' => $langData, 'status' => 'Active'])->get();

        if (empty($language) || count($language) == 0) {
            $language = Language::where(['is_default' => '1', 'status' => 'Active'])->get();
            $langData = $language->first()->short_name;
        }

        if (!empty($language) && count($language) > 0) {
            App::setLocale($langData);
            $direction = !empty($language[0]['direction']) ? $language[0]['direction'] : 'ltr';
            Cache::put(config('cache.prefix') . '-language-direction', $direction, 600);
        } else {
            $langData = 'en';
            App::setLocale($langData);
            Cache::put(config('cache.prefix') . '-language-direction', 'ltr', 600);
        }

        return $next($request);
    }
}
