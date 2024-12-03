<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class StartApplication extends Component
{
    public $nationality,$visaType,$arrival_date,$departure_date,$email, $first_and_middle_name,
           $last_name,$dob_day,$dob_month,$dob_year,$passport_nationality,$passport_expiry_date_day,$passport_number,
           $passport_expiry_date_month,$passport_expiry_date_year,$country_of_birth;
    public $receive_updates=false;

    public $updates_text = "I want to receive iVisa's updates, product launches and personalized offers. I can opt out anytime.";
    public $currentStep = 1;

    public function mount()
    {
        // Load session data if it exists
        $this->nationality = Session::get('nationality');
        $this->visaType = Session::get('visaType');
    }

    public function AddInfo()
    {
        // Save to session
        Session::put('nationality', $this->nationality);
        Session::put('visaType', $this->visaType);

        // Flash message
        session()->flash('message', 'Information saved successfully!');

        // Navigate to step 2
        $this->currentStep = 2;
    }
 
    public function forgetSessionData()
    {
        Session::forget(['nationality', 'visaType','arrival_date','departure_date','email','updates_text','first_and_middle_name',
                        'last_name','dob_day','dob_month','dob_year','passport_nationality','passport_expiry_date_day','passport_number',
                        'passport_expiry_date_month','passport_expiry_date_year','country_of_birth']);
        $this->reset(['nationality', 'visaType','arrival_date','departure_date','email','updates_text','first_and_middle_name',
                     'last_name','dob_day','dob_month','dob_year','passport_nationality','passport_expiry_date_day','passport_number',
                    'passport_expiry_date_month','passport_expiry_date_year','country_of_birth']);
        session()->flash('message', 'Session data cleared!');
    }

   public function AddInfo2(){
      // Save to session
      Session::put('arrival_date', $this->arrival_date);
      Session::put('departure_date', $this->departure_date);
      Session::put('email', $this->email);
        // Save to session only if the checkbox is checked
        if ($this->receive_updates) {
            Session::put('updates_text', $this->updates_text);
        }

      // Navigate to step 3
      $this->currentStep = 3;
   }

   public function AddInfo3(){
      // Save to session
      Session::put('first_and_middle_name', $this->first_and_middle_name);
      Session::put('last_name', $this->last_name);
      Session::put('dob_day', $this->dob_day);
      Session::put('dob_month', $this->dob_month);
      Session::put('dob_year', $this->dob_year);
      // Navigate to step  4
      $this->currentStep = 4;
   }

   public function AddInfo4(){
    // Save to session
    Session::put('passport_nationality', $this->passport_nationality);
    Session::put('passport_number', $this->passport_number);
    Session::put('passport_expiry_date_day', $this->passport_expiry_date_day);
    Session::put('passport_expiry_date_month', $this->passport_expiry_date_month); 
    Session::put('passport_expiry_date_year', $this->passport_expiry_date_year);
    Session::put('country_of_birth', $this->country_of_birth);
    // Navigate to step  5
    //$this->currentStep = 5;
 }
   
   
    public function render()
    {
        return view('livewire.start-application',[
            
        ]);
    }
}
