<?php

namespace App\Http\Controllers;

use App\Mail\notification;
use App\Models\Country;
use App\Models\CentersAccreditation;
use App\Models\CorporateAccreditation;
use App\Models\CustomTraining;
use App\Models\TrainerAccreditation;
use App\Models\Provider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage; // For secure file handling

class AccredetationController extends Controller
{
    public function index($type)
    {
        if ($type == 'corporate_trainer' || $type == 'professional_trainer') {
            return view('pages.trainer_form', compact('type'));
        } elseif ($type == 'corporate_accreditation') {
            return view('pages.corporate_form', compact('type'));
        } else {
            return view('pages.provider_form', compact('type'));
        }
    }

    public function regional_provider(Request $request)
    {
        $providers = Provider::get('country_id');
        $result = [];

        foreach ($providers as $product) {
            array_push($result, $product->country_id);
        }

        $all_country = Country::whereIn('short_name', array_values($result))->orderBy('short_name', 'asc')->get();

        $country = request()->country;
        $country_id = Country::where('short_name', $country)->first();

        if (!$country_id) {
            return redirect()->back()->withErrors(['country' => 'Invalid country selected']);
        }

        $data = Provider::where('country_id', $country_id->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(8);

        foreach ($data as $item) {
            $item->address = strip_tags($item->address);
        }

        $header = 'header.jpeg';
        $icon = 'about.png';

        return view('Accredetation.regional_provider', compact('data', 'country', 'header', 'icon', 'all_country'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'org_name' => 'required',
            'org_phone' => 'required',
            'org_email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'con_name' => 'required',
            'con_phone' => 'required',
            'con_title' => 'required',
            'con_email' => 'required|email',
            'tax_reg' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'commercial_reg' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'org_lic' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'accreditation' => 'file|mimes:pdf,jpg,jpeg,png',
            'Qlty_man' => 'file|mimes:pdf,jpg,jpeg,png',
        ]);

        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate->errors());
        }

        $Qlty_man = $this->storeFile($request, 'Qlty_man');
        $accreditation = $this->storeFile($request, 'accreditation');
        $commercial_reg = $this->storeFile($request, 'commercial_reg');
        $org_lic = $this->storeFile($request, 'org_lic');
        $tax_reg = $this->storeFile($request, 'tax_reg');

        $acc = CentersAccreditation::create([
            'org_name' => $request['org_name'],
            'org_email' => $request['org_email'],
            'org_country' => $request['country'],
            'org_phone' => $request['org_phone'],
            'org_city' => $request['city'],
            'website' => $request['website'],
            'tax_Reg' => $tax_reg,
            'comm_reg' => $commercial_reg,
            'org_license' => $org_lic,
            'quality_manual' => $Qlty_man,
            'Accreditation' => $accreditation,
            'examination_center' => $request['exam_center'],
            'type' => $request['type'],
            'contact_name' => $request['con_name'],
            'contact_email' => $request['con_email'],
            'contact_title' => $request['con_title'],
            'contact_phone' => $request['con_phone'],
        ]);

        Mail::to('k.gomaa@ibdl.net')->send(new notification($acc));

        return redirect()->back()->with('message', 'Your Data Sent Successfully');
    }

    public function trainer_store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'title' => 'required',
            'training_field' => 'required',
            'cv' => 'required|file|mimes:pdf,jpg,jpeg,png',
        ]);

        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate->errors());
        }

        $cv = $this->storeFile($request, 'cv');

        TrainerAccreditation::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'country' => $request['country'],
            'phone' => $request['phone'],
            'city' => $request['city'],
            'gender' => $request['gender'],
            'cv' => $cv,
            'title' => $request['title'],
            'company' => $request['company'],
            'training_field' => $request['training_field'],
            'training_hours' => $request['training_hours'],
            'brief' => $request['brief'],
        ]);

        return redirect()->back()->with('message', 'Your Data Sent Successfully');
    }

    public function corporate_store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'org_name' => 'required',
            'org_phone' => 'required',
            'org_email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'con_name' => 'required',
            'con_phone' => 'required',
            'con_title' => 'required',
            'con_email' => 'required|email',
            'tax_reg' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'commercial_reg' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'org_lic' => 'required|file|mimes:pdf,jpg,jpeg,png',
            'accreditation' => 'file|mimes:pdf,jpg,jpeg,png',
            'Qlty_man' => 'file|mimes:pdf,jpg,jpeg,png',
        ]);

        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate->errors());
        }

        $Qlty_man = $this->storeFile($request, 'Qlty_man');
        $accreditation = $this->storeFile($request, 'accreditation');
        $commercial_reg = $this->storeFile($request, 'commercial_reg');
        $org_lic = $this->storeFile($request, 'org_lic');
        $tax_reg = $this->storeFile($request, 'tax_reg');

        CorporateAccreditation::create([
            'org_name' => $request['org_name'],
            'org_email' => $request['org_email'],
            'org_country' => $request['country'],
            'org_phone' => $request['org_phone'],
            'org_city' => $request['city'],
            'website' => $request['website'],
            'tax_Reg' => $tax_reg,
            'comm_reg' => $commercial_reg,
            'org_license' => $org_lic,
            'quality_manual' => $Qlty_man,
            'Accreditation' => $accreditation,
            'examination_center' => $request['exam_center'],
            'type' => $request['type'],
            'contact_name' => $request['con_name'],
            'contact_email' => $request['con_email'],
            'contact_title' => $request['con_title'],
            'contact_phone' => $request['con_phone'],
            'organizational_structure' => $request['group1'],
            'policies_procedures' => $request['group2'],
            'communication' => $request['group3'],
            'financial_management' => $request['group4'],
            'human_resources' => $request['group5'],
            'data_security' => $request['group6'],
            'quality_assurance' => $request['group7'],
            'legal_compliance' => $request['group8'],
            'risk_management' => $request['group9'],
            'ethical_standards' => $request['group10'],
            'customer_relations' => $request['group11'],
            'supply_chain_management' => $request['group12'],
            'environmental_sustainability' => $request['group13'],
            'health_safety' => $request['group14'],
            'documentation_record_keeping' => $request['group15'],
            'performance_metrics' => $request['group16'],
            'continuous_improvement' => $request['group17'],
            'training_development' => $request['group18'],
            'social_responsibility' => $request['group19'],
            'technology_adoption' => $request['group20'],
        ]);

        return redirect()->back()->with('message', 'Your Data Sent Successfully');
    }

    public function custom_training(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'department' => 'required',
            'division' => 'required',
            'audience' => 'required',
            'completion_date' => 'required',
            'audience_size' => 'required',
            'preferred_sessions' => 'required',
            'description' => 'required',
            'outcome' => 'required',
            'additional_info' => 'required',
        ]);

        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate->errors());
        }

        CustomTraining::create([
            'name' => $request['name'],
            'title' => $request['title'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'department' => $request['department'],
            'division' => $request['division'],
            'audience' => $request['audience'],
            'completion_date' => $request['completion_date'],
            'audience_size' => $request['audience_size'],
            'preferred_sessions' => $request['preferred_sessions'],
            'description' => $request['description'],
            'outcome' => $request['outcome'],
            'additional_info' => $request['additional_info'],
        ]);

        Mail::to('k.gomaa@ibdl.net')->send(new notification($request->all()));

        return redirect()->back()->with('message', 'Your Data Sent Successfully');
    }

    private function storeFile($request, $field)
    {
        if ($request->hasFile($field) && $request->file($field)->isValid()) {
            $path = $request->file($field)->store('public/accredited-centers');
            return substr($path, 7);
        }
        return null;
    }
}
