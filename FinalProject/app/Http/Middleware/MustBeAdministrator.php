<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
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

        $user = $request->user();

        if($user){

            $admin = false;
            $count = $user->userPriv->count();
            for($i = 0 ;$i < $count;$i++){
                if($user->userPriv[$i]->privilege_id == 1){
                    $admin = true;
                }
            }

            if($admin) {

                return $next($request);
            }

        }
//        else if($user){                   //create wrong user response (use flash)
//            return redirect()->guest('login');
//        }

        abort(403, 'You must be an administrator to access this location.');

    }
}
