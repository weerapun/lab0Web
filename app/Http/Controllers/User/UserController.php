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
            $userLogin =[
                'user'=>$json->{'username'},
                'id'=> $json->{'id'},
                'fname'=>$json->{'fname'},
                'lname'=>$json->{'lname'},
                'email'=>$json->{'email'},
            ];
            if($json->{'id'}!=null){
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

    function register(Request $request){
        $client = new Client();
        $username = $request->input('username');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $password = $request->input('password');
        $birthday =$request->input('birthday');

      //  $age = cal birthday

        $memberM = [
            'username' => $username,
            'password' => $password,
            'fname'=>$fname,
            'lname'=>$lname,
            'email'=>$email
        ];
        $headers = [

            'Accept' => 'application/json',
            'Content-type' => 'application/json'
        ];
       
     
       $response =   $client->request('POST', 'https://lab0api.herokuapp.com/api/member/createUser', [
            'headers' => $headers,
            'json' => $memberM

        ]);

        if($response->getStatusCode()=='200'){
            $contents = $response->getBody()->getContents();

            $json = json_decode($contents);
            $userLogin =[
                'user'=>$json->{'username'},
                'id'=> $json->{'id'},
                'fname'=>$json->{'fname'},
                'lname'=>$json->{'lname'},
                'email'=>$json->{'email'},
            ];

          $request->session()->put('userLogin',   $userLogin);
          return  view('landing')->with('userLogin',$userLogin ); 
        }else{
            return back()->withInput();
        }
    }


    function userinfo(Request $request){
        $client = new Client();
        $username = $request->input('username');
        $headers = [
            'Accept' => 'application/json',
            'Content-type' => 'application/json'
        ];
        $response =   $client->request('GET', 'https://lab0api.herokuapp.com/api/member/userinfo/'.$username, [
            'headers' => $headers
        ]);

        if($response->getStatusCode()=='200'){
            $contents = $response->getBody()->getContents();
            echo $contents;
        }

    }


}