<?php
require_once 'config.php';
$db = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);

function showPage($page, $data=""){
    include("/$page.php");
}

function validate($form){
    $response=array();
    if(!$form['fname'])
    {
        $response['msg']="first name not given";
        $response['status']=false;
        $response['field']='fname';
    }
    if(!$form['lname']){
        $response['msg']="first name not given";
        $response['status']=false;
        $response['field']='lname';
    }
    if(!$form['fname']){
        $response['msg']="last name not given";
        $response['status']=false;
        $response['field']='lname';
    }
    if(!$form['gend']){
        $response['msg']="gender not given";
        $response['status']=false;
        $response['field']='gend';
    }
    if(!$form['pno']){
        $response['msg']="Phone number not given";
        $response['status']=false;
        $response['field']='pno';
    }
    if(!$form['hb']){
        $response['msg']="Hobbies not given";
        $response['status']=false;
        $response['field']='hb';
    }
    if(!$form['DOB']){
        $response['msg']="DOB not given";
        $response['status']=false;
        $response['field']='DOB';
    }
    if(!$form['email']){
        $response['msg']="email not given";
        $response['status']=false;
        $response['field']='email';
    }
    if(!$form['uname']){
        $response['msg']="username not given";
        $response['status']=false;
        $response['field']='uname';
    }
    if(!$form['pw']){
        $response['msg']="Password not given";
        $response['status']=false;
        $response['field']='pw';
    }
    return $response;
}

