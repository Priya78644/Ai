<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
     public function index(){
        return view('front.index');
     }

     public function about(){
      return view('front.about');
   }


   public function services(){
      return view('front.services');
   }


   public function testimonial(){
      return view('front.testimonial');
   }

   public function team(){
      return view('front.team');
   }


   public function projects(){
      return view('front.projects');
   }

   public function features(){
      return view('front.features');
   }

   

   
}
