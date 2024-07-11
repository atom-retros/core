<?php

namespace Atom\Core\Http\Controllers;

use Atom\Core\Models\Ban;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BannedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Request $request): View
    {
        $ban = $request->user()
            ->bans()
            ->where('timestamp', '<', time())
            ->where('ban_expire', '>', time())
            ->first() ?: Ban::where('ip', $request->ip())
            ->where('timestamp', '<', time())
            ->where('ban_expire', '>', time())
            ->first();

        return view('banned', compact('ban'));
    }
}
