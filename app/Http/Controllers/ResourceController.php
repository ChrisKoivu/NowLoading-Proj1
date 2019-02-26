<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function eduResource()
    {
        return view('resourcePages.EducationPage');
    }

    public function busResource()
    {
        return view('resourcePages.BusinessPage');
    }

    public function medResource()
    {
        return view('resourcePages.MedicalPage');
    }

    public function comResource()
    {
        return view('resourcePages.CommunityPage');
    }

    public function govResource()
    {
        return view('resourcePages.GovernmentPage');
    }

    public function famResource()
    {
        return view('resourcePages.FamilyPage');
    }

    public function travResource()
    {
        return view('resourcePages.TravelPage');
    }
}
