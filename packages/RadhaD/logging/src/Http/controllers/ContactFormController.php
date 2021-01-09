<?php
    // MyVendor\Contactform\src\Http\Controllers\ContactFormController.php
    namespace RadhaD\Logging\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use RadhaD\Logging\Models\ContactForm;

    class ContactFormController extends Controller {

        public function index()
        {
           return view('logging::contact');
        }

        public function sendMail(Request $request)
        {
            ContactForm::create($request->all());

            return redirect(route('contact'));
        }


    }