<?php

class SessionsController extends BaseController {

    public function destroy($id = null)
    {
        Auth::logout();

        return Redirect::home();
    }

}
