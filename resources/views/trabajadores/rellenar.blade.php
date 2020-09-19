@extends('layouts.app')
@section('content')
<div>
    <form>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label >Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="">
          </div>
          <div class="form-group col-md-2">

                <label>Edad</label>
                <input type="text" class="form-control" id="edad" placeholder="">
          </div>
          <div class="form-group col-md-2">
            <label>Camisa</label>
        <input type="text" class="form-control" id="camisa" placeholder="">
        </div>
        <div class="form-group col-md-2">
            <label>calzado</label>
            <input type="text" class="form-control" id="calzado">
        </div>
        <div class="form-group col-md-2">
          <label>pantalon</label>
          <input type="text" class="form-control" id="pantalon">
      </div>
        </div>
        <div class="form-group">
          <label >Calle</label>
          <input type="text" class="form-control" id="calle" placeholder="">
        </div>
        <div class="form-group">
          <label >colonia</label>
          <input type="text" class="form-control" id="colonia" placeholder="">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Localidad</label>
            <input type="text" class="form-control" id="localidad">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Estado</label>
            <select id="estado" onchange="cargarmunicipio();" class="form-control">
              <option value="no">Seleccione uno...</option>
              <option value="Aguascalientes">Aguascalientes</option>
              <option value="Baja California">Baja California</option>
              <option value="Baja California Sur">Baja California Sur</option>
              <option value="Campeche">Campeche</option>
              <option value="Chiapas">Chiapas</option>
              <option value="Chihuahua">Chihuahua</option>
              <option value="CDMX">Ciudad de México</option>
              <option value="Coahuila">Coahuila</option>
              <option value="Colima">Colima</option>
              <option value="Durango">Durango</option>
              <option value="Estado de México">Estado de México</option>
              <option value="Guanajuato">Guanajuato</option>
              <option value="Guerrero">Guerrero</option>
              <option value="Hidalgo">Hidalgo</option>
              <option value="Jalisco">Jalisco</option>
              <option value="Michoacán">Michoacán</option>
              <option value="Morelos">Morelos</option>
              <option value="Nayarit">Nayarit</option>
              <option value="Nuevo León">Nuevo León</option>
              <option value="Oaxaca">Oaxaca</option>
              <option value="Puebla">Puebla</option>
              <option value="Querétaro">Querétaro</option>
              <option value="Quintana Roo">Quintana Roo</option>
              <option value="San Luis Potosí">San Luis Potosí</option>
              <option value="Sinaloa">Sinaloa</option>
              <option value="Sonora">Sonora</option>
              <option value="Tabasco">Tabasco</option>
              <option value="Tamaulipas">Tamaulipas</option>
              <option value="Tlaxcala">Tlaxcala</option>
              <option value="Veracruz%20de%20Ignacio%20de%20la%20Llave">Veracruz</option>
              <option value="Yucatán">Yucatán</option>
              <option value="Zacatecas">Zacatecas</option>
            </select>
          </div>
          <div>
              <select name="municipio" id="municipio" onchange="cargarcolonia();">

              </select>
          </div>

          <div>
            <select name="colonia" id="colonia">
                <option value="">Selecciona colonia</option>
            </select>
        </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Codigo Postal</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
</div>
@endsection
@section('scripts')
<script>


    function cargarmunicipio(){


        var municipio = $("#municipio");
        municipio.empty();
        var estado = document.getElementById('estado').value;
        $.ajax({

            url:'https://api-sepomex.hckdrk.mx/query/get_municipio_por_estado/'+estado,
            dataType: 'json',
            success: function(r)
            {

                newa= r.response;
                municipio.append($('<option>').text("Select"));
                for(var i = 0;i<newa.municipios.length;i++)
                {
                    municipio.append('<option value="' + newa.municipios[i]+ '">' + newa.municipios[i] + '</option>');
                }


            }
        })
    }
    function cargarcolonia(){


var colonia = $("#colonia");
var municipio = document.getElementById('municipio').value;
$.ajax({

    url:'https://api-sepomex.hckdrk.mx/query/get_colonia_por_municipio/'+municipio,
    dataType: 'json',
    success: function(r)
    {
        var datos = "";
        t = r.response;
        console.log(t);

        for(var i = 0;i<t.colonia.length;i++)
                {
                    console.log(t.colonia[i]);
            datos += '<option>'+t.colonia[i]+'</option>'
                }
                alert("agregando")
                $("#colonia").html(datos);

  }
})
}
</script>

@endsection('scripts')

