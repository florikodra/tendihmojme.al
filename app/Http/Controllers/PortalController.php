<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posts;
use App\Models\PostRequest;
use Auth;

class PortalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('portal.dashboard');
    }
    public function posts()
    {
        $data['posts'] = Posts::where('user_id', Auth::id())->paginate(2);
        return view('portal.posts', $data);
    }
    public function posts_requests()
    {

        return view('portal.posts-requests');
    }
}
