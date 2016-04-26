@extends('layouts.principal')
	@section('content')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logamino.png" alt="" /></a>
					<p>Amino Cinema</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<!---contact-->
<div class="main-contact">
		 <h3 class="head">CONTACTANOS</h3>
		 <p>Te ayudaremos!</p>
		 <div class="contact-form">
			 <form>
				 <div class="col-md-6 contact-left">
					  <input type="text" placeholder="Nombre" required/>
					  <input type="text" placeholder="Correo" required/>
					  <input type="text" placeholder="Telefono" required/>
				  </div>
				  <div class="col-md-6 contact-right">
					 <textarea placeholder="Mensaje"></textarea>
					 <input type="submit" value="ENVIAR"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
	     </div>
</div>
	@endsection	