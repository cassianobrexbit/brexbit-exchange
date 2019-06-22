<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BuyCrypto;
use Auth;
use Carbon\Carbon;
use Mail;
use DB;

class BuyCryptoController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $buys = DB::table('buy_cryptos')->where('user_id', $user->id)->orderBy('id', 'desc')->get();

        return view('buys.index', array('buys' => $buys));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();
        $buycrypto = new BuyCrypto($request->input());
        $buycrypto->status = "Pendente";
        //$buycrypto->confirmation_time = Carbon::now();
        $buycrypto->user_id = $user->id;

        if ($file = $request->hasFile('filename')) {

          $file = $request->file('filename') ;

          $fileext = $file->extension();

          $temp = file_get_contents($file);

          $blob = base64_encode($temp);

          $buycrypto->filename = $blob;
          $buycrypto->fileext = $fileext;
        }

      $buycrypto->save();

      return redirect('/buy_cryptos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buy = BuyCrypto::findOrFail($id);

        return view('buys.buy', compact('buy'));
    }

    public function getFile($id){

      $buycrypto = BuyCrypto::findOrFail($id);

      $fileupload = $buycrypto->filename;
      $file_contents = base64_decode($fileupload);
      return response($file_contents)
        ->header('Cache-Control', 'no-cache private')
        ->header('Content-Description', 'File Transfer')
        ->header('Content-length', strlen($file_contents))
        ->header('Content-Disposition', 'attachment; filename=' . 'file_'.time().'.'.$buycrypto->fileext)
        ->header('Content-Transfer-Encoding', 'binary');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
