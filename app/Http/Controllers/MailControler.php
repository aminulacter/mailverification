<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\verify_student;
use Mail;
use App\Mail\VarifyMail;
class MailControler extends Controller
{
    public function index()
    {
      return view('create');
    }
    public function create(Request $request)
    {
      $student = new student();
      $student->name = $request->name;
      $student->email= $request->email;
      $student->password = bcrypt($request->password);
      $student->save();
      $verify_student = new verify_student();
      $verify_student->token = str_random(40);
      $student->verify_student()->save($verify_student);
      Mail::to($student->email)->send(new VarifyMail($student));
      return $student;
    }
    public function verifystudent($token)
    {
      $verify_student = verify_student::where('token', $token)->first();

       if(isset($verify_student) ){
           $student = $verify_student->student;
           if(!$student->verified) {
               $verify_student->student->verified = 1;
               $verify_student->student->save();
               $status = "Your e-mail is verified. You can now login.";
           }else{
               $status = "Your e-mail is already verified. You can now login.";
           }
       }else{
           return redirect('/')->with('warning', "sorry your email cannot be identified.");
       }

       return redirect('/')->with('status', $status);
    }
}
