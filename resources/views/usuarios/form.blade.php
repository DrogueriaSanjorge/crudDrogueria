<div class="form-group">
  <label for="Cedula" class="control-label">{{'Cedula'}}</label>
  <input type="text"  class="form-control {{$errors->has('Cedula')?'is-invalid':''}}" 
  name="Cedula" 
  id="Cedula"
  value="{{ isset($usuarios->Cedula)?$usuarios->Cedula:old('Cedula')}}">
  {!! $errors->first('Cedula','<div class="invalid-feedback">:message</div>') !!} 
  </div>


<div class="form-group">
<label for="Nombres" class="control-label">{{'Nombres'}}</label>
<input type="text"  class="form-control {{$errors->has('Nombres')?'is-invalid':''}}" 
name="Nombres" 
id="Nombres"
value="{{ isset($usuarios->Nombres)?$usuarios->Nombres:old('Nombres')}}">
{!! $errors->first('Nombres','<div class="invalid-feedback">:message</div>') !!} 
</div>


<div class="form-group">
<label for="Apellidos" class="control-label">{{'Apellidos'}}</label>
<input type="text" class="form-control {{$errors->has('Apellidos')?'is-invalid':''}}" 
 name="Apellidos" 
 id="Apellidos" 
value="{{ isset($usuarios->Apellidos)?$usuarios->Apellidos:old('Apellidos')}}"> 
{!! $errors->first('Apellido','<div class="invalid-feedback">:message</div>') !!} 
</div>

<div class="form-group">
<label for="Empresa" class="control-label">{{'Empresa'}}</label>
<input type="text" class="form-control {{$errors->has('Empresa')?'is-invalid':''}}"
 name="Empresa"
  id="Empresa"
value="{{ isset($usuarios->Empresa)?$usuarios->Empresa:old('Nombres')}}"> 
{!! $errors->first('Empresa','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Cargo" class="control-label">{{'Cargo'}}</label>
<input type="text" class="form-control {{$errors->has('Cargo')?'is-invalid':''}}" name="Cargo" id="Cargo" 
value="{{ isset($usuarios->Cargo)?$usuarios->Cargo:old('Cargo')}}"> 
{!! $errors->first('Cargo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Area_Visita" class="control-label">{{'Area_Visita'}}</label>
<input type="text" class="form-control {{$errors->has('Area_Visita')?'is-invalid':''}}" 
name="Area_Visita"
 id="Area_Visita" 
value="{{ isset($usuarios->Area_Visita)?$usuarios->Area_Visita:old('Area_Visita')}}"> 
{!! $errors->first('Area_Visita','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
<label for="Anfitrion" class="control-label">{{'Anfitrion'}}</label>
<input type="text"  class="form-control {{$errors->has('Anfitrion')?'is-invalid':''}} " 
name="Anfitrion"
 id="Anfitrion" 
value="{{ isset($usuarios->Anfitrion)?$usuarios->Anfitrion:old('Anfitrion')}}"> 
{!! $errors->first('Anfitrion','<div class="invalid-feedback">:message</div>') !!}
</div>


<input type="submit" class="btn btn-success " value="ACEPTAR">

<a class="btn btn-primary" href="{{ url('usuarios') }}">REGRESAR</a>