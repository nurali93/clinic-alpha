<?php

namespace App\Http\Middleware;

use App\Queue;
use App\Patient;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Doctor
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('auth/login');
            }
        } else {
            if($this->auth->user()->doctor){
                $queue = Queue::all();    
                $patient = Patient::all();
                return view('doctor.dashboard')->with('queue',$queue)->with('patient',$patient);
            } else if($this->auth->user()->admin){
                $queue = Queue::all();    
                $patient = Patient::all();
                return view('doctor.dashboard')->with('queue',$queue)->with('patient',$patient);
            } else {
                $queue = Queue::all();    
                $patient = Patient::all();
                return view('staff.dashboard')->with('queue',$queue)->with('patient',$patient);
            }
        }

        return $next($request);
    }
}
