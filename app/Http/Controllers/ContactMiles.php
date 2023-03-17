<?php

namespace App\Http\Controllers;
use App\Mail\ContactMile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactMiles extends Controller
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
    public function index(){
        return view('maile.contactUs');
    }


/*
    public function sendEmail(Request $request)
{
    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com';
    $mail->Password = 'your-password';
    $mail->setFrom($email, $name);
    $mail->addAddress('abdallahashraf743@gmail.com');
    $mail->Subject = 'Contact Form Submission';
    $mail->Body = $message;

    if ($mail->send()) {
        return "done send email";
    } else {
        return "Erorr";
    }

}
/*
public function sendEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // Validation rules for form fields
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        // PHPMailer Configuration
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Replace with your Gmail address
        $mail->Password = 'your-gmail-password'; // Replace with your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender and recipient settings
        $mail->setFrom($email, $name);
        $mail->addAddress('abdallahashraf743@gmail.com'); // Replace with recipient email address
        $mail->addReplyTo($email, $name);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<p>$message</p>";

        // Send email
        if (!$mail->send()) {
            return "done send maile";
        } else {
            return "erorr";
        }
    }
*/

    public function sendEmail(Request $request)
    {
            $name = $request->input('name');
            $email = $request->input('email');
            $subject = $request->input('phone');
            $message = $request->input('message');

            // Validation rules for form fields
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|max:255',
                'message' => 'required',
            ]);
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'abdallahashraf743@gmail.com'; // Replace with your Gmail address
            $mail->Password = 'Aa1172001'; // Replace with your Gmail password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom($email, $name);//sent
            $mail->addAddress('abdallahashraf743@gmail.com', '555book');//resever
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = 'Subject of email';
            $mail->Body    = 'Body of email';
            $mail->send();
            if (!$mail->send()) {
                return"Erorr";
            } else {
                // Email sent successfully
                return"done send maile";
             }
             try {
                $mail->send();
                return back()->with('success', 'Your message has been sent successfully!');
             } catch (Exception $e) {
                return back()->with('error', 'Something went wrong, please try again later.');
             }
    }


}
