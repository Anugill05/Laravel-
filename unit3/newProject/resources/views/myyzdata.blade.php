<h1>Generating framwork via url and action</h1>
<a href="{{ url('second')}}">Click here for url</a>
<br>
<br>
<a href="{{ action([App\Http\Controllers\BrainController::class,'second']) }}">Click here for action</a>