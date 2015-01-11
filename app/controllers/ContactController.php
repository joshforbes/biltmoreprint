<?php

class ContactController extends \BaseController {

    /**
     * @var \BiltmorePrint\Mailers\ContactMailer
     */
    private $contactMailer;

    function __construct(BiltmorePrint\Mailers\ContactMailer $contactMailer)
    {
        $this->contactMailer = $contactMailer;
    }


    /**
	 * Store a newly created resource in storage.
	 * POST /contact
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::only('name', 'email', 'contactMessage');

        //$this->contactForm->validate($input);

        $this->contactMailer->sendContactMessageToAdmin($input);

        Flash::success('Thanks for contacting us');

        return Redirect::home();
	}

}