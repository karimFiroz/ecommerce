<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


				public function index(){
					   return view('pages.home');
                   }

                   public function about(){
                    return view('pages.about');
                }

				 public function contact(){
					   return view('pages.contact');
                   }

                   public function all_products(){
                    return view('pages.product.all_products');
                }

                public function product(){
                    return view('pages.product.product');
                }

                public function all_about(){
                    return view('pages.about');
                }














}
