<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\SendInquiryMail;
use Illuminate\Support\Facades\Mail;

class InquiryForm extends Component
{
    public $name, $vehicle_no, $phone_no;


    protected $rules = [
        'name' => 'required|min:3',
        'vehicle_no' => 'required|min:3',
        'phone_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.inquiry-form');
    }

    public function sendInquiry()
    {
        $this->validate();
        // try {
            // $inquiry = Inquiry::create([
            //     'name' => $this->name,
            //     'email' => $this->email,
            //     'phone' => $this->phone,
            //     'subject' => $this->subject,
            //     'message' => $this->message,
            //     'url' => url()->previous(),
            //     'source' => request()->route()->getName(),
            // ]);
            $inquiry=[
                'name' => $this->name,
                'vehicle' => $this->vehicle_no,
                'phone' => $this->phone_no,
                'message' => 'this is testing mail from inquiry form',
                'url' => url()->previous(),
            ];

            Mail::to('scott@wreckadvisors.com')->send(new SendInquiryMail($inquiry));
            return redirect()->route('thankYou');
        // } catch (\Throwable $th) {
            //throw $th;
            // return redirect()->route('thankYou');
        // }
    }
}