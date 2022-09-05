

 <div class="filter">
  <form action="{{ route('result') }}" method="get">
       <br>
       <input type="hidden" id="terms" name="terms" value="{{ isset($terms) ? $terms : ''}}">
        <select  id="category" name="category">
             <option value="all">Category</option>
			@foreach(App\Models\Category::get() as $category_filter)
				<option value="{{ $category_filter->slug }}" @if(isset($category) && $category == $category_filter) selected @endif)>{{ $category_filter->name }}</option>
			@endforeach
        </select>
<select id="order_by" name="order_by" class="dropdown-wrapper">
				@foreach(config('general.order_by') as $index => $order_by)
				<option value="{{ $index }}" @if(isset($orderBy) && $orderBy == $index) selected @endif>{{ $order_by }}</option>
			@endforeach
		</select>
		
		<select id="ships_from" name="ships_from" class="dropdown-wrapper">
			<option value="all">Ships from</option>
			@foreach(config('countries') as $index => $country)
				<option value="{{ $index }}" @if(isset($ships_from) && $ships_from == $index) selected @endif>{{ $country }}</option>
			@endforeach
		</select>
	
		<select id="ships_to" name="ships_to" class="dropdown-wrapper">
			<option value="all">Ships to</option>
			@foreach(config('countries') as $index => $country)
				<option value="{{ $index }}" @if(isset($ships_to) && $ships_to == $index) selected @endif>{{ $country }}</option>
			@endforeach
		</select>
    
<button class="btn" type="submit" style="background:#eaeaea; width: 93px" >Filter</button>    
    </form>
</div>