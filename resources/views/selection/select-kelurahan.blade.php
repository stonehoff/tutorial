<option value="">--- Select Kelurahan ---</option>
@if(!empty($data_kel))
	@foreach($data_kel as $key => $value)
    	<option value="{{ $key }}">{{ $value }}</option>
	@endforeach
@endif