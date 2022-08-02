<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
//    public function submit(Request $req)
    public function submit(ContactRequest $req)
    {
        $contact=new Contact();
        $contact->name = $req->input ('name');
        $contact->email = $req->input ('email');
        $contact->subject = $req->input ('subject');
        $contact->message = $req->input ('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавленно');
    }

    public function allData()
    {
        $contact=new Contact();
//        return view('messages', ['data'=>$contact->where('subject','=','hello')->get()]); //сортировка по полю id,
        // desc-убыванию, asc-по возрастанию. take(2)-выбрать 2-е записи
//        return view('messages', ['data'=>$contact->orderBy('id','asc')->skip(2)->take(5)->get()]); //сортировка по полю id,
//        return view('messages', ['data'=>$contact->orderBy('id','asc')->take(5)->get()]); //сортировка по полю id,

//        return view('messages', ['data'=>$contact::inRandomOrder()->get()]);
//        return view('messages', ['data'=>[$contact::inRandomOrder()->first()]]);
//        return view('messages', ['data'=>Contact::all()]);
        return view('messages', ['data'=>$contact->all()]);
    }
    public function showOneMessage($id)
    {
        $contact=new Contact();
        return view('one-message', ['data'=>$contact->find($id)]);

    }

    public function updateMessage($id)
    {
        $contact =new Contact();
        return view('update-message', ['data'=>$contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req)
    {
        $contact= Contact::find($id);
        $contact->name = $req->input ('name');
        $contact->email = $req->input ('email');
        $contact->subject = $req->input ('subject');
        $contact->message = $req->input ('message');

        $contact->save();

        return redirect()->route('contact-data-one',$id)->with('success', 'Сообщение было обновлено');
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');

    }


    public function review()
    {
//        $reviews=new Contact();
//        return view('review',['reviews'=>$reviews->all()]);
//        dd($reviews->all());
        return view('review');
    }

//    public function review_check(Request $request)
//    {
//        $valid=$request->validate([
//            'email'=>'required|min:2|max:20',
//            'subject'=>'required|min:3|max:100',
//            'message'=>'required|min:3|max:500'
//        ]);
//        $review=new Contact();
//        $review->email = $request->input('email');
//        $review->subject = $request->input('subject');
//        $review->message = $request->input('message');
//        $review->save();
//        return redirect()->route('review'); //review-название из MainController.php ->name('review'); НЕ путь!!! /review
//
//    }
}
