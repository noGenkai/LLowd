<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Events;

class ApptModal extends Component
{
    // Variable used to show Modal status
    public $showModal = false;
    public $title;
    public $location;
    public $startDate;
    public $startTime;
    public $endDate;
    public $endTime;

    protected $listeners = ['showApptModal'];

    /**
     * Here is a list of rules that the values must abid by. 
     * 
     */
    protected $rules = [
        'title' => 'required|max:10',
        'location' => 'min:3',
        'startDate' => 'required',
        // 'startTime' => 'required',
        // 'endDate' => 'required|min:3',
        // 'endTime' => 'required|min:3',
    ];

    /**
     * If the user does not listen to the rules, spit out these custom messages.
     * 
     */
    protected $messages = [
        'title.required' => "Yo bro.  Really!  Type in a title.",
        'location.require' => 'Refer to your birth certificate!'
    ];

    /**
     * Pass all property names through the update method and valid in real time.
     * 
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }

    /**
     * This function display modal on DOM.
     * 
     */
    public function showApptModal() {
        
        $this->showModal = true;
    }

    /**
     * This function submits model information to MySql.
     * The variables will first get valiated.
     * Using the variable value, we will create a record on MySQL table
     * We will reset the form fields.
     * Display flash message displaying successful creation.
     * 
     */

    public function saveAppt() 
    {
        $this->validate();
 
        Events::create([
            'title' => $this->title,
            'location' => $this->location,
            'start_date' => $this->startDate,
            // 'startTime' => $this->startTime,
            // 'endDate' => $this->endDate,
            // 'endTime' => $this->endTime
        ]);  

        $this->reset();

        session()->flash('message', 'Your event is successfully created.');
    }
    
    public function render()
    {
        return view('livewire.appt-modal');
    }
}
