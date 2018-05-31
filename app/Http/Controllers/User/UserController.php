<?php
namespace App\Http\Controllers\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller {

     function index(){
        return view('login');
    } 
     function login(Request $request){
        $client = new Client();
        $username = $request->input('username');
        $password = $request->input('password');

        $memberM = [
            'username' => $username,
            'password' => $password
        ];

        $headers = [

            'Accept' => 'application/json',
            'Content-type' => 'application/json'
        ];
     
       $response =   $client->request('POST', 'https://lab0api.herokuapp.com/api/member/verifyUser', [
            'headers' => $headers,
            'json' => $memberM

        ]);
     
        if($response->getStatusCode()=='200'){
            $contents = $response->getBody()->getContents();
            $json = json_decode($contents);
        
          $id=$json->{'id'};
        $userLogin =[
            'user'=>$username,
            'id'=> $id
        ];
            if($json->{'status'}){
                $request->session()->put('userLogin',   $userLogin);
                return  view('landing')->with('userLogin',$userLogin ); 
            }else{

                // send error msg
                return back()->withInput();
            }
        }else{
            return back()->withInput();
        }


    }
}