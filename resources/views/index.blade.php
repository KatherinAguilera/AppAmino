@extends('layouts.principal')
	@section('content')
	@include('alerts.errors')
	@include('alerts.request')
	 <div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="images/logamino.png" alt="" /></a>
					<p>Amino Cinema</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-info">
				<h1>Ingresa con tu cuenta</h1>
				{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('correo','Correo:')!!}	
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo' ,  'required' =>'example@ingreso.com'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('contrasena','Contraseña:')!!}	
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña',  'required' =>''])!!}
					</div>
					{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
			</div>
	</div>
		<div class="review-slider">
		 <ul id="flexiselDemo1">
			<li><img src="images/r1.jpg" alt=""/></li>
			<li><img src="images/r2.jpg" alt=""/></li>
			<li><img src="images/r3.jpg" alt=""/></li>
			<li><img src="images/r4.jpg" alt=""/></li>
			<li><img src="images/r5.jpg" alt=""/></li>
			<li><img src="images/r6.jpg" alt=""/></li>
		 </ul>
		</div>
	@endsection	