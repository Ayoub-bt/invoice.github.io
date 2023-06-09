<?php

/*
|--------------------------------------------------------------------------
| Controller
|--------------------------------------------------------------------------
|
*/

$do = isset($routes['1']) ? $routes['1'] : 'login-display';
switch($do){
    case 'post':
        $username = _post('username');
        $password = _post('password');
        if($username != '' && $password != ''){
            $d = ORM::for_table('sys_users')->where('username',$username)->first();
            if($d){
                $d_pass = $d['password'];
                if(Password::_verify($password,$d_pass) == true){
                    //Now check if OTP is enabled
                    if($d['otp'] == 'Yes'){
                        Otp::make($d['id']);
                        $_SESSION['tuid'] = $d['id'];

                        r2(U.'otp');
                    }
                    else{
                        $_SESSION['uid'] = $d['id'];
                        $d->last_login = date('Y-m-d H:i:s');
                        $d->save();
                        r2(U.$config['redirect_url']);
                    }

                }
                else{
                    _msglog('e','Invalid Username or Password');

                    r2(U.'login');
                }
            }
            else{

                _msglog('e','Invalid Username or Password');

                r2(U.'login');
            }
        }

        else{
            _msglog('e','Invalid Username or Password');

            r2(U.'login');
        }


        break;

    case 'login-display':
        $ui->display('login.tpl');
        break;

    default:
        $ui->display('login.tpl');
        break;
}

