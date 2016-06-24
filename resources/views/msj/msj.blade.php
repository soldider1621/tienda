@if (\Session::has('error'))
	<div class="row">
    	<div class="col-xs-12">
		    <div class="alert alert-danger alert-alt fade in closeTime">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    	{{ Session::get('error') }}
	    	</div>
	    </div>
    </div>
	{{ Session::flush('error') }}
@endif

@if (\Session::has('message'))
	<div class="row">
		<div class="col-xs-12">
		    <div class="alert alert-info alert-alt fade in closeTime">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    	{{ Session::get('message') }}
	    	</div>
    	</div>
	</div>
	{{ Session::flush('message') }}
@endif

@if ($errors->any())
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-danger alert-alt fade in closeTime">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <br/>
@endif