<?php

namespace App\Http\Middleware;

use Closure;

class MustBeEditor
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

            $editor = false;
            $count = $user->userPriv->count();
            for($i = 0 ;$i < $count;$i++){
                if($user->userPriv[$i]->privilege_id == 3){
                    $editor = true;
                }
            }

            if($editor) {

                return $next($request);
            }

        }

        //if($user && $user->isAdmin){                  /// change for proper priveliges
        if ($user && $editor) {
            return $next($request);
        }
//        else if($user){                   //create wrong user response (use flash)
//            return redirect()->guest('login');
//        }

        abort(403, 'You must be an editor to access this location.');
    }
}
