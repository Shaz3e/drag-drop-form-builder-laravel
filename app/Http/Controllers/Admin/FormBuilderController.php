<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormBuilderController extends Controller
{
    protected $view = 'admin.forms.';
    protected $route = '';
    public function view()
    {
        return view($this->view . 'index');
    }

    public function postData(Request $request)
    {
        $data = new Form();
        $data->form_data = $request->jsonData;
        $data->save();
    }
}
