<?php

namespace App\Controller;

use App\Model\User;

class UserController{
    
    public function select()
    {
        $user=User::get()->toArray();
        if(!Empty($user))
        {
            print_r($user);
        }else{
            echo "Sorry User Table Empty";
        }
        return $user; 
    }

    public function save($name,$email,$password)
    {
        $user=new User();
        $data=[
            "username"=>$name,
            "email"=>$email,
            "password"=>$password,
        ];
        $user->fill($data)->save();
        if(!Empty($user))
        {
            echo "Successfully inserted as User";
        }
        return $user; 
    }

    public function edit($username, array $data)
    {
        $user=User::whereUsername($username)->update($data);
        if(!Empty($user))
        {
            echo "Successfully user edited";
        }
        return $user;
    }

    public function destroy($username)
    {   
        $user=new User();
        $user->whereUsername($username)->delete();
        if(!Empty($user))
        {
            echo "Successfully Deleted User";
        }
        return $user;
    }

}