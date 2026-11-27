<?php

namespace App\Livewire\Web;

use App\Mail\CustomerComplaintMail;
use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Complaints extends Component
{
    #[Validate('required|in:domestic,commercial,industrial')]
    public string $customer_type = 'domestic';

    #[Validate('required|string|max:50')]
    public string $customer_number = '';

    #[Validate('required|string|max:50')]
    public string $meter_number = '';

    #[Validate('required|string|max:120')]
    public string $name = '';

    #[Validate('nullable|string|max:100')]
    public string $designation = '';

    #[Validate('nullable|string|max:150')]
    public string $company = '';

    #[Validate('required|string|max:255')]
    public string $address = '';

    #[Validate('required|string|max:100')]
    public string $city = '';

    #[Validate('required|string|max:100')]
    public string $state = '';

    #[Validate('nullable|string|max:20')]
    public string $post_code = '';

    #[Validate('required|email|max:150')]
    public string $email = '';

    #[Validate('required|string|max:25')]
    public string $phone = '';

    #[Validate('required|string|min:10|max:2000')]
    public string $message = '';

    public bool $submitted = false;

    public function submit(): void
    {
        $validated = $this->validate();

        Mail::to('info@ssgc.com.pk')
            ->cc($validated['email'])
            ->send(new CustomerComplaintMail($validated));

        $this->reset();
        $this->customer_type = 'domestic';
        $this->submitted = true;
    }

    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Complaints / Feedback';

        return view('livewire.web.complaints')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
