<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
//use Illuminate\Support\Facades\Http;
//use Rinvex\Country\CountryLoader;

class StartApplication extends Component
{
    public $travelers = [];
    public $travelerCount = 1;
    public $days = [];
    public $countries;
    public $skip_passport = false;

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
        $this->calculateDaysInMonth(date('Y'), date('m'));
        //This is api for getting countries in the world

        $this->countries = collect(countries())->map(function ($country) {
            return [
                'name' => $country['name']['common'] ?? $country['name'], // Adjust based on actual structure
                'code' => $country['iso_3166_1_alpha2'] ?? $country['code'], // Adjust based on actual structure
            ];
        })->toArray();
    }

    public function AddInfo()
    {
        $this->validate([
            'nationality' => 'required|string',
            'visaType' => 'required|string'
        ], [
            'nationality.required' => 'The nationality field is required.',
            'visaType.required' => 'Please select the visa type.'
        ]);
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
    // Validation Rules for Step 2
    $this->validate([
        'arrival_date' => 'required|date',
        'departure_date' => 'required|date|after_or_equal:arrival_date',
        'email' => 'required|email',
    ], [
        'arrival_date.required' => 'The arrival date is required.',
        'departure_date.required' => 'The departure date is required.',
        'departure_date.after_or_equal' => 'Departure date must be after arrival.',
        'email.required' => 'The email field is required.',
        'email.email' => 'Enter a valid email address.'
    ]);
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
     // Validation Rules for Step 3
     $this->validate([
        'first_and_middle_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'dob_day' => 'required|numeric|min:1|max:31',
        'dob_month' => 'required|string',
        'dob_year' => 'required|numeric|min:1900|max:' . date('Y'),
    ], [
        'first_and_middle_name.required' => 'Please enter your first and middle name.',
        'last_name.required' => 'Last name is required.',
        'dob_day.required' => 'Day of birth is required.',
        'dob_month.required' => 'Month of birth is required.',
        'dob_year.required' => 'Year of birth is required.',
        'dob_year.min' => 'Year of birth must be valid.'
    ]);
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
     // Validation Rules for Step 4
     $this->validate([
        'passport_nationality' => 'required|string|max:255',
        'country_of_birth' => 'required|string|max:255',
    ], [
        'passport_nationality.required' => 'Passport Nationality is required.',
        'country_of_birth.required' => 'Country of Birth is required.',
    ]);
    // Save to session
    Session::put('passport_nationality', $this->passport_nationality);
    Session::put('passport_number', $this->passport_number);
    Session::put('passport_expiry_date_day', $this->passport_expiry_date_day);
    Session::put('passport_expiry_date_month', $this->passport_expiry_date_month); 
    Session::put('passport_expiry_date_year', $this->passport_expiry_date_year);
    Session::put('country_of_birth', $this->country_of_birth);
    // Navigate to step  5
    $this->currentStep = 5;
 }
   public function AddInfo5(){
    logger('AddInfo5 executed');
    $this->currentStep = 6;
      
   }

   public function AddInfo6(){
    // Navigate to step  5
     $this->currentStep = 7;
     
 }
   
 public function goToPreviousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }


    public function addTraveler()
    {
        $this->travelerCount++;    // Increment the traveler count
        $this->travelers[] = [
            'first_and_middle_name' => '',
            'last_name' => '',
            'dob_day' => '',
            'dob_month' => '',
            'dob_year' => ''
        ];   // Add a new traveler with empty fields (or default values)
        // Log to verify method is only being called once
        Log::debug("addTraveler triggered. Current Count: {$this->travelerCount}");
    }

    public function removeTraveler($index)
    {
        if (isset($this->travelers[$index])) {
            unset($this->travelers[$index]); // Remove traveler from the list
            $this->travelers = array_values($this->travelers); // Re-index array
            if ($this->travelerCount > 1) {
                $this->travelerCount--; // Decrement the count
            }
        }
    }


    public function updatedDobMonth($month)
    {
        // Ensure the month is in numeric format for proper calculation
        $monthNumber = date('n', strtotime($month . ' 1 2023'));
        $this->calculateDaysInMonth($this->dob_year ?? date('Y'), $monthNumber);
    }

    public function updatedDobYear($year)
    {
        $this->calculateDaysInMonth($year, date('n', strtotime($this->dob_month . ' 1 2023')));
    }

    public function calculateDaysInMonth($year, $month)
    {
        $this->days = range(1, cal_days_in_month(CAL_GREGORIAN, $month, $year));
    }

    public function render()
    {
        return view('livewire.start-application',[
            
        ]);
    }
}
