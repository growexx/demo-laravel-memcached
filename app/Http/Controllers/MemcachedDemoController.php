<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MemcachedDemoController extends Controller
{
    // Store data in cache
    public function storeCache(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'key' => 'required|string',
            'value' => 'required|string',
        ]);

        // Store data in cache with 10-minute expiration
        Cache::put($validated['key'], $validated['value'], 600);

        return redirect()->back()->with('message', 'Cache set successfully!');
    }

    // Get data from cache
    public function getCache(Request $request)
    {
        $cachedValue = Cache::get($request->get('get_key'), 'Cache not found');
        return view('cache', compact('cachedValue'));
    }
}
