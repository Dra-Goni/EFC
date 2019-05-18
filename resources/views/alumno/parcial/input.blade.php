<div class="form-row">
        <div class="form-group col-12">
            <label for="inputEmail">Rut</label>   
            <input type="text"  value="{{$Alumnos->ALU_RUT ?? ''}}"  class="form-control" name="ALU_RUT" >    
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="inputEmail">Celular</label>   
            <input type="text"  value="{{$Alumnos->ALU_CELULAR ?? ''}}"  class="form-control" name="ALU_CELULAR" >    
        </div>
    </div>
    <div class="form-row">
            <div class="form-group col-12">
                <label for="inputEmail">Correo Electronico</label>   
                <input type="text"  value="{{$Alumnos->ALU_MAIL ?? ''}}"  class="form-control" name="ALU_MAIL" >    
            </div>
        </div>
        