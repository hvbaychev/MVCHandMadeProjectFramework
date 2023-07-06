<?php

class profile extends framework {

    public function __construct(){
        if(!$this->getSession('userId')){
            $this->redirect("accountController/loginForm");
        }
        $this->helper('link');
        $this->profileModel = $this->model("profileModel");
    }

    public function index(){
        $userId = $this->getSession('userId');
        $data = $this->profileModel->getData($userId);
        $this->view("profile", $data);
    }

    public function logout(){
        $this->destroy();
        $this->redirect("accountController/loginForm");
    }

    public function courseForm(){
        $this->view("addCourse");
    }

    public function courseStore(){
        $courseData = [
            'name'    => $this->input('name'),
            'price'   => $this->input('price'),
            'quality' => $this->input('quality'),
            'nameError'    => '',
            'priceError'   => '',
            'qualityError' => ''
        ];
    
    if(empty($courseData['name'])){
        $courseData['nameError'] = 'Name is required';
    }
    if(empty($courseData['price'])){
        $courseData['priceError'] = 'Price is required';
    }    
    if(empty($courseData['quality'])){
        $courseData['qualityError'] = 'Quality is required';
    }    
    if(empty($courseData['nameError']) && empty($courseData['priceError']) && empty($courseData['qualityError'])){
        $data = [$courseData["name"], $courseData['price'], $courseData['quality'], $this->getSession('userId')];
        if ($this->profileModel->addCourse($data)){
            $this->setFlash('courseAdded', "Your course has been added");
            $this->redirect("profile/index");
    }else{
        $this->view("addCourse", $courseData);
    }
    }
}
}
?>