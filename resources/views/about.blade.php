@extends('layouts.home')

@section('content')


        <div class="container" style="margin-top:75px">
            <h3 class="text-center text-uppercase">@lang('What is?')</h3>
            <p class="text-center w-75 m-auto">@lang('Digital Learning Motivation Quiz for Educators (DLMQE):')</p>

            <div class="container">
                <div class="card">
                    <p>@lang('Quiz Explanation')</p>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <h3 class="text-center text-uppercase">@lang('Contact Us')</h3>
            <p class="text-center w-75 m-auto">@lang('For more information about the Digital and Media Literacy Online Quiz, please contact:')</p>

            <div class="container" style="margin-bottom: 200px">
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item text-left">
                            <i class="fas fa-envelope"></i>
                            Renee Hobbs, Email:  hobbs@uri.edu
                        </li>
                        <li class="list-group-item text-left">
                            <i class="fas fa-envelope"></i>
                            Sait Tüzel,  Email: saidtuzel@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>

@endsection
