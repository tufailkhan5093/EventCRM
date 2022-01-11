<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Contact;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customers()
    {
        $customers=Customer::where('type','Professional')->get();
        return view('customers.customers',['customers'=>$customers]);
    }

    public function clientCustomer(Request $request)
    {
        $customer=new Customer;
        $customer->name=$request->name;
        // $customer->first_name=$request->first_name;
        $customer->function=$request->function;
        $customer->mobile=$request->mobile;
        $customer->landline=$request->landline;
        $customer->postal_code=$request->postal_code;
        $customer->email=$request->email;
        $customer->city=$request->city;
        $customer->type="Private";
        $customer->save();

        $customers=Customer::where('type','Private')->get();
        return view('customers.private',['customers'=>$customers]);
    }
    public function procustomer(Request $request)
    {
        $contact=new Contact;
        $contact->name=$request->contact_name;
        $contact->title=$request->title;
        $contact->first_name=$request->cfirst_name;
        $contact->function=$request->cfunction;
        $contact->mobile=$request->cmobile;
        $contact->landline=$request->clandline;
        $contact->email=$request->cemail;
        $contact->save();
        
        $customer=new Customer;
        $customer->company_name=$request->company_name;
        $customer->siret=$request->siret;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->additional_address=$request->additional_address;
        $customer->postal_code=$request->postal_code;
        $customer->vat_no=$request->vat_no;
        $customer->fax=$request->fax;
        $customer->city=$request->city;
        $customer->type="Professional";
        $customer->contact_id=$contact->id;
        $customer->save();
        
        $customers=Customer::where('type','Professional')->get();
        return view('customers.customers',['customers'=>$customers]);
    }
    
    public function private()
    {
        $customers=Customer::where('type','Private')->get();
         return view('customers.private',['customers'=>$customers]);
    }

     public function professional()
    {
        $customers=Customer::where('type','Professional')->get();
         return view('customers.customers',['customers'=>$customers]);
    }

    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('customers.edit',['customer'=>$customer]);
    }

    public function update(Request $request,$id)
    {
        $customer=Customer::find($id);
        if($request->name)
        {
             $customer->name=$request->name;
        }
        if($request->function)
        {
             $customer->function=$request->function;
        }
        if($request->mobile)
        {
             $customer->mobile=$request->mobile;
        }
        if($request->landline)
        {
            $customer->landline=$request->landline;
        }
        if($request->postal_code)
        {
            $customer->postal_code=$request->postal_code;
        }
        if($request->email)
        {
            $customer->email=$request->email;
        }
        if($request->city)
        {
            $customer->city=$request->city;
        }

        $customer->save();
        return redirect()->route('private');
    }
}