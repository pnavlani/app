<div class="row padding-1 p-1">
    <div class="col-md-12">
        
     <!--   <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $article?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> -->
        <div class="form-group mb-2 mb20">
            <label for="articles" class="form-label">{{ __('Articles') }}</label>
            <input type="text" name="articles" class="form-control @error('articles') is-invalid @enderror" value="{{ old('articles', $article?->articles) }}" id="articles" placeholder="Articles">
            {!! $errors->first('articles', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>