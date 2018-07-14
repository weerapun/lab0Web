<?php
namespace App\Http\Controllers\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;

class UserController extends Controller {

     function index(){
        $error =[
            'msg'=>null
        ];
        return view('login',['error'=>$error]);
    } 
     function login(Request $request){
        $client = new Client();
        $email = $request->input('email');
        $password = $request->input('password');

        $memberM = [
            'email' => $email,
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
            $userLogin =[
                'id'=> $json->{'id'},
                'fname'=>$json->{'fname'},
                'lname'=>$json->{'lname'},
                'email'=>$json->{'email'},
            ];
            if($json->{'id'}!=null){
                $request->session()->put('userLogin',   $userLogin);
                return  view('loginSuccess')->with('userLogin',$userLogin ); 
            }else{

                // send error msg
                return back()->withInput();
            }
        }else{
            return back()->withInput();
        }


    }

    function register(Request $request){
        $client = new Client();
        $lineId = $request->input('lineId');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $password = $request->input('password');
        $birthdate =$request->input('datetimepicker');
        Log::info('************** birthDate *************** '.$birthdate);
       
        $memberM = [
            'lineId' => $lineId,
            'password' => $password,
            'fname'=>$fname,
            'lname'=>$lname,
            'email'=>$email,
            'birthday'=>$birthdate
        ];
        $headers = [

            'Accept' => 'application/json',
            'Content-type' => 'application/json'
        ];
       
     
       $response =   $client->request('POST', 'https://lab0api.herokuapp.com/api/member/createUser', [
            'headers' => $headers,
            'json' => $memberM

        ]);
        Log::info('************** response *************** '.$response->getStatusCode());
        if($response->getStatusCode()=='200'){
            $contents = $response->getBody()->getContents();
            $json = json_decode($contents);
            Log::info('contents :'.$contents);
            $error= null;
           
            if($json->{'status'}=='false'){
                Log::info('error :'.$json->{'msg'});
                $error =[
                    'msg'=> $json->{'msg'}
                ];
              
                return view('login',['error'=>$error]);
            }else{
                $userLogin =[
                    'id'=> $json->{'id'},
                    'fname'=>$json->{'fname'},
                    'lname'=>$json->{'lname'},
                    'email'=>$json->{'email'},
                ];
                $request->session()->put('userLogin',   $userLogin);
              return  view('landing')->with('userLogin',$userLogin ); 
            }
            
        }else{
            return back()->withInput();
        }
    }


    function userinfo(Request $request){
        $client = new Client();
        $email = $request->input('email');
        $headers = [
            'Accept' => 'application/json',
            'Content-type' => 'application/json'
        ];
        $response =   $client->request('GET', 'https://lab0api.herokuapp.com/api/member/userinfo/'.$email, [
            'headers' => $headers
        ]);

        if($response->getStatusCode()=='200'){
            $contents = $response->getBody()->getContents();
            echo $contents;
        }

    }


}