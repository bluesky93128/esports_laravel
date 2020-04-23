@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="phone_number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required>

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Twitch Channel</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state_id') ? ' has-error' : '' }}">
                            <label for="state_id" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <select id="state_id" class="form-control" name="state_id">
                                    @foreach($state_data as $key => $data)
                                        <option id="{{$data->term_id}}" value="{{$data->term_id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sport_id') ? ' has-error' : '' }}">
                            <label for="sport_id" class="col-md-4 control-label">Sports</label>

                            <div class="col-md-6">
                                <select id="sport_id" class="form-control" name="sport_id">
                                    @foreach($team_data as $key => $data)
                                        <option id="{{$data->term_id}}" value="{{$data->term_id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('class_id') ? ' has-error' : '' }}">
                            <label for="class_id" class="col-md-4 control-label">Classes</label>

                            <div class="col-md-6">
                                <select id="class_id" class="form-control" name="class_id">
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('age_group_id') ? ' has-error' : '' }}">
                            <label for="age_group_id" class="col-md-4 control-label">Age Group</label>

                            <div class="col-md-6">
                                <select id="age_group_id" class="form-control" name="age_group_id">
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('team_id') ? ' has-error' : '' }}">
                            <label for="team_id" class="col-md-4 control-label">Teams</label>

                            <div class="col-md-6">
                                <select id="team_id" class="form-control" name="team_id">
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('skill_level') ? ' has-error' : '' }}">
                            <label for="skill_level" class="col-md-4 control-label">Skill Level</label>

                            <div class="col-md-6">
                                <select id="skill_level" class="form-control" name="skill_level">
                                    <option value="begineer">Begineer</option>
                                    <option value="normal">Normal</option>
                                    <option value="expert">Expert</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    @parent
    <script>
        $("#sport_id").on('change', function(){
            console.log($(this).val());
            $.ajax({

                type:'POST',

                url:'/api/get-rest-register-data',

                data:{info: 'get_classes', sport_id: $(this).val()},

                success:function(data){
                    console.log("response data = ", data);
                    $("#class_id").html("");
                    data['classes'].forEach((item) => {
                        $("#class_id").append('<option id="'+item.class_id+'" value="'+item.class_id+'">'+item.meta_value+'</option>');
                    });
                    $("#age_group_id").html("");
                    data['age_group'].forEach((item) => {
                        $("#age_group_id").append('<option id="'+item.age_group_id+'" value="'+item.age_group_id+'">'+item.name+'</option>');
                    });
                }

            });
        })

        $("#class_id").on('change', function() {
            console.log("class = ", $(this).val());
            console.log("state = ", $("#state_id").val());
            console.log("sport = ", $("#sport_id").val());
            console.log("age_group = ", $("#age_group_id").val());
            $.ajax({

                type:'POST',

                url:'/api/get-rest-register-data',

                data:{
                    info: 'get_teams_data', 
                    sport_id: $("#sport_id").val(), 
                    state_id: $("#state_id").val(), 
                    class_id: $(this).val(),
                    age_group_id: $("#age_group_id").val()
                },

                success:function(data){
                    console.log("response data = ", data);
                    $("#team_id").html("");
                    data.forEach((item) => {
                        $("#team_id").append('<option id="'+item.ID+'" value="'+item.ID+'">'+item.team_title+'</option>');
                    });
                }

            });
        });

        $("#age_group_id").on('change', function() {
            console.log("class = ", $("#class_id").val());
            console.log("state = ", $("#state_id").val());
            console.log("sport = ", $("#sport_id").val());
            console.log("age_group = ", $("#age_group_id").val());
            $.ajax({

                type:'POST',

                url:'/api/get-rest-register-data',

                data:{
                    info: 'get_teams_data', 
                    sport_id: $("#sport_id").val(), 
                    state_id: $("#state_id").val(), 
                    class_id: $("#class_id").val(),
                    age_group_id: $("#age_group_id").val()
                },

                success:function(data){
                    console.log("response data = ", data);
                    $("#team_id").html("");
                    data.forEach((item) => {
                        $("#team_id").append('<option id="'+item.ID+'" value="'+item.ID+'">'+item.team_title+'</option>');
                    });
                }

            });
        })
    </script>

@stop