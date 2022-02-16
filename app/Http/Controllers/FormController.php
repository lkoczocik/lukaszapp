<?php

namespace App\Http\Controllers;

use App\Http\Requests\LukaszFormRequest;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    public $contactMethod = [
        [
            'label' => 'Email',
            'value' => 'email'
        ],
        [
            'label' => 'Telephone',
            'value' => 'telephone'
        ],
        [
            'label' => 'Post',
            'value' => 'post'
        ]
    ];

    protected $fields = [
        'first-name',
        'last-name',
        'email',
        'telephone',
        'contact-method'
    ];

    public function form()
    {
        return view('form', [
            'contactMethod' => $this->contactMethod
        ]);
    }

    public function summary(LukaszFormRequest $request)
    {
        foreach ($this->fields as $field) {
            Session::push($field, $request->input($field));
        }

        return redirect('summary');
    }

    public function show()
    {
        return view('summary');
    }
}
