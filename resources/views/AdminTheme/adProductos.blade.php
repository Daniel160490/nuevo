<!DOCTYPE html>
<html lang="en">
    @include('AdminTheme.themeAdmin.head')

<body id="mimin" class="dashboard">
    
    @include('AdminTheme.themeAdmin.header')


    <div class="container-fluid mimin-wrapper">
  
        @include('AdminTheme.themeAdmin.menu')

        <!-- start: Content -->
        <div id="content">
                <div class="col-md-12 padding-0">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-12 padding-0">
                      <div class="panel box-shadow-none content-header">
                          <div class="panel-body">
                            <div class="col-md-12">
                                <h3 class="animated fadeInLeft">Administración de Productos - Añade productos nuevos</h3>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="box-v5 panel">
                        <div class="panel-body">
                            <div class="panel-heading" style="text-align:center;">
                              <br>
                              @include('AdminTheme.themeAdmin.botonesAdministracion')
                              <br>
                            </div>

                            <br>

                            <form  action="{{ route('productos.index')}}" method="POST">
                              {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="idCategoria">Categoría del producto:</label>
                                    <select class="form-control" name="idCatedoria" id="idCategoria">
                                                    
                                        @foreach($categorias as $categoria)
                                            <option value="{{ $categoria->idCategoria }}"> 
                                                {{ $categoria->Nombre }}
                                            </option>
                                        @endforeach
    
                                    </select>
    
                                </div>
                              
                              
                                <div class="form-group">
                                    <label for="Nombre">Nombre</label>
                                    <input type="text" class="form-control" name="Nombre" id="Nombre">
                                </div>

                                <div class="form-group">
                                    <label for="Descripcion">Descripción</label>
                                    <input type="text" class="form-control" name="Descripcion" id="Descripcion">
                                </div>

                                <div class="form-group">
                                    <label for="Precio">Precio</label>
                                    <input type="text" class="form-control" name="Precio" id="Precio">
                                </div>

                                <br>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit"  value="Guardar" class="btn btn-success btn-primary">
                                    <a href="{{ route('productos.index') }}" class="btn btn-info btn-primary" >Atrás</a>
                                </div>	
                                
                            </form>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        <!-- end: Content -->      
    </div>

    

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/flot/jquery.flot.min.js"></script>
<script src="asset/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="asset/js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="asset/js/plugins/flot/jquery.flot.navigate.min.js"></script>
<script src="asset/js/plugins/flot/jquery.flot.stack.min.js"></script>

<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>

<!-- end: Javascript -->
</body>
</html>