<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Breadcrumbs;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $message = '' )
    {
        //
        $messages = \App\Message::get();

        return view('messages',[
            'header'        => view('header'),
            'breadcrumb'    => view('breadcrumb',['breadcrumb'=>Breadcrumbs::render('messages')]),
            'menu'          => view('menu'),
            'message'       => $message,
            'messages'      => $messages,
            'footer'        => view('footer')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $message = '' )
    {
        $message_model = new \stdClass();
        $message_model->id = null;
        $message_model->title = (!empty(\Input::get('title')))?\Input::get('title'):'';
        $message_model->message = (!empty(\Input::get('message')))?\Input::get('message'):'';

        return view('messageform',[
            'header'        => view('header'),
            'breadcrumb'    => view('breadcrumb',['breadcrumb'=>Breadcrumbs::render('newmessage')]),
            'menu'          => view('menu'),
            'message'       => $message,
            'message_model' => $message_model,
            'footer'        => view('footer')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( count(array_filter(\Input::only('title','message'),function($element){ 
            return !empty($element); 
        })) < 2 ){

            return $this->create( 'Cant create a message with empty inputs!' );

        }else{

            try {

                $message = \App\Message::create( \Input::get() );
                return \Redirect::to('/editmessage/'.$message->id.'/Message created successfuly!');

            } catch (Exception $e) {

                return $this->create( 'An error has occured!' );

            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $message = '')
    {
        $message_model = \App\Message::find( $id );

        return view('messageform',[
            'header'        => view('header'),
            'breadcrumb'    => view('breadcrumb',['breadcrumb'=>Breadcrumbs::render('editmessage')]),
            'menu'          => view('menu'),
            'message'       => $message,
            'id'            => $id,
            'message_model' => $message_model,
            'footer'        => view('footer')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $message_model = \App\Message::find( $id );
            $message_model->title = \Input::get('title'); 
            $message_model->message = \Input::get('message');
            $message_model->save();

            return \Redirect::to('/editmessage/'.$id.'/Message updated successfuly!');
            
        } catch (Exception $e) {

            return \Redirect::to('/editmessage/'.$id.'/An error has occured!');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $message_model = \App\Message::find( $id );
            $message_model->delete();

            return \Redirect::to('/messages/Message removed successfuly!');
            
        } catch (Exception $e) {

            return \Redirect::to('/messages/An error has occured!');
            
        }
    }
}
