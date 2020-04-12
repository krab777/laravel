<div class="row">
    <div class="col-sm-12 col-md-6 mx-auto">
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @error('name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror

            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}

            @error('description')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror

            {!! Form::label('price', 'Price') !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}

            @error('price')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror

            {!! Form::label('total_count', 'Total count') !!}
            {!! Form::text('total_count', null, ['class' => 'form-control']) !!}

            @error('total_count')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
			
			{!! Form::label('image', 'Image') !!}
            {!! Form::text('image', null, ['class' => 'form-control']) !!}

            @error('image')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        
    </div>
</div>
