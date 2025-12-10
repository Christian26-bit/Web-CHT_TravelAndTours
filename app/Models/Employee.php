<?php

namespace App\Models;

class Employee 
{
    protected $EmployeeID;
    protected $Name;
    protected $Email;
    protected $Password;
    protected $ContactNumber;
    protected $IsManager;
    protected $IsActive;

    // GET Methods
    public function getEmployeeID() {
        return $this->EmployeeID;
    }
    public function getName() {
        return $this->Name;
    }
    public function getEmail() {
        return $this->Email;
    }
    public function getPassword() {
        return $this->Password;
    }
    public function getContactNumber() {
        return $this->ContactNumber;
    }
    public function getIsManager() {
        return $this->IsManager;
    }
    public function getIsActive() {
        return $this->IsActive; 
    }

    // SET Methods
    public function setEmployeeID($EmployeeID) {
        $this->EmployeeID = $EmployeeID;
    }
    public function setName($Name) {    
        $this->Name = $Name;
    }
    public function setEmail($Email) {
        $this->Email = $Email;
    }
    public function setPassword($Password) {
        $this->Password = $Password;
    }
    public function setContactNumber($ContactNumber) {
        $this->ContactNumber = $ContactNumber;
    }
    public function setIsManager($IsManager) {
        $this->IsManager = $IsManager;  
    }
    public function setIsActive($IsActive) {
        $this->IsActive = $IsActive;
    }

    // CRUD Operations
    public function create() {

    }

    public function read(int $EmployeeID) {

    }
    public function update() {

    }
    public function delete() {
    
    }

}