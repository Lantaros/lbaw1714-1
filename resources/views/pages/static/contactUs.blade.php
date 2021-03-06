@extends('layout')

@section('title')
    Contact Us | ReEvent
@endsection

@section('titleIcon')
    <i class="fas fa-at"></i>
@endsection

@section('pageTitle')
    Contact Us
@endsection

@section('content')
         <div class="row">

                <div class="col-lg-2"></div>
                <div class="col-lg-8" style="padding-top: 23px;">
                    <div class="col-lg-12" style="padding-left: 0; padding-right:0;">
                        <div class="bs-ccomponent">
                                <fieldset>
                         <form action="{{ route('mail')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div style="background-color: #eee; padding: 20px; padding-top: 10px;">
                                    <div class="form-group">
                                        <label class="col-form-label" for="name">
                                            <b>Your name</b>
                                        </label>
                                        <input name="name" id="name" name="name" type="text" class="form-control" placeholder="Name" >
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label" for="email">
                                            <b>Your e-mail address</b>
                                        </label>
                                        <input name ="email" id="email" type="email" class="form-control" placeholder="E-mail address" >
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label" for="inputDefault">
                                            <b>Your message</b>
                                        </label>
                                        <textarea name="content" class="form-control" placeholder="Write your message here..." id="inputDefault"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </fieldset>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>

            </div>
@endsection