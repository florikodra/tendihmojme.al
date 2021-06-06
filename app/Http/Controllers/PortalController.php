<?php

namespace App\Http\Controllers;


use App\Models\Posts;
use App\Models\PostRequest;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Auth;

class PortalController extends Controller
{
    public $nrPostimeve;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        var_dump(Auth::id());
        $postii = Posts::where('user_id', Auth::id())->get();
        $this->nrPostimeve =count($postii);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $data['nrPostimeve'] = $this->nrPostimeve;
        return view('portal.dashboard', $data);
    }
    public function posts()
    {
        $data['nrPostimeve'] = $this->nrPostimeve;
        $data['posts'] = Posts::where('user_id', Auth::id())->paginate(8);

        return view('portal.posts', $data);
    }
    public function posts_requests()
    {
        $data['nrPostimeve'] = $this->nrPostimeve;
        return view('portal.posts-requests', $data);
    }
}
