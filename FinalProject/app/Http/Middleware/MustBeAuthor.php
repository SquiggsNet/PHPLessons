<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAuthor
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

            $author = false;
            $count = $user->userPriv->count();
            for($i = 0 ;$i < $count;$i++){
                if($user->userPriv[$i]->privilege_id == 2){
                    $author = true;
                }
            }

            if($author) {

                return $next($request);
            }

        }
//        else if($user){                   //create wrong user response (use flash)
//            return redirect()->guest('login');
//        }

        abort(403, 'You must be an author to access this location.');

    }
}
