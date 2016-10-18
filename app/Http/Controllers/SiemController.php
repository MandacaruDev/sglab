<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siem;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Hash;
use Auth;




/**
 * Class SiemController.
 *
 * @author  The scaffold-interface created at 2016-10-17 12:57:29pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class SiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {

    $usuario_logado = Auth::user()->name;
    if  ($usuario_logado == 'Admin')
    
        {
        $siems = Siem::all();
        return view('siem.index',compact('siems'));
        }
        

    else

        {
        $usuario_logado = Auth::user()->name;
        $siems = Siem::all()->where('siem','=',$usuario_logado);
        return view('siem.index',compact('siems'));

        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('siem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siem = new Siem();

        
        $siem->siem = $request->siem;

        
        $siem->escola_nome = $request->escola_nome;

        
        $siem->escola_tipo = $request->escola_tipo;

        
        $siem->cod_ext = $request->cod_ext;

        
        
        $siem->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'Adicionado com sucesso !!']);

        return redirect('siem');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('siem/'.$id);
        }

        $siem = Siem::findOrfail($id);
        return view('siem.show',compact('siem'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('siem/'. $id . '/edit');
        }

        
        $siem = Siem::findOrfail($id);
        return view('siem.edit',compact('siem'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $siem = Siem::findOrfail($id);
    	
        $siem->siem = $request->siem;
        
        $siem->escola_nome = $request->escola_nome;
        
        $siem->escola_tipo = $request->escola_tipo;
        
        $siem->cod_ext = $request->cod_ext;
        
        
        $siem->save();

        return redirect('siem');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('ATENÇÃO!!!','Deseja realmente remover?','/siem/'. $id . '/delete/');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$siem = Siem::findOrfail($id);
     	$siem->delete();
        return URL::to('siem');
    }
}
