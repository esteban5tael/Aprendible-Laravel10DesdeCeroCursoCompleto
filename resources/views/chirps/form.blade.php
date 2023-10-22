<input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
<textarea class="form-control" name="message" id="" cols="15" rows="2" placeholder="{{ __('What´s on your mind?') }}">{{ old('message') }}</textarea>
<div class="d-flex justify-content-end m-1">
    <button class="btn btn-primary btn-sm">{{__('Chirp')}}</button>
</div>