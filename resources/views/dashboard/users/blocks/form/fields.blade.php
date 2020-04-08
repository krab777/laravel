<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @error('name')
	            <div class="alert alert-danger mt-3">{{ $message }}</div>
	        @enderror

            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}

            @error('email')
	            <div class="alert alert-danger mt-3">{{ $message }}</div>
	        @enderror

            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}

            @error('password')
	            <div class="alert alert-danger mt-3" >{{ $message }}</div>
	        @enderror
                        
            {!! Form::radio('role_id', '1' , false) !!}
            {!! Form::label('1', 'User') !!}<br>

            {!! Form::radio('role_id', '2' , false) !!}
            {!! Form::label('2', 'Moderator') !!}<br>

            {!! Form::radio('role_id', '3' , false) !!}
            {!! Form::label('3', 'Admin') !!}<br>
        </div>        
    </div>
</div>
