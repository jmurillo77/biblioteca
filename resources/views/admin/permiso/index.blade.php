@extends("theme.$theme.layout")
@section('Titulo')
    Permisos
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
      <div class="card card-blue">
        <div class="card-header with-border">
          <h3 class="card-title">Permisos</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body table-responsive p-0">
          <table class="table table-bordered table-hover table-striped text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($permisos as $permiso)
                <tr>
                    <td>{{$permiso->IdPermiso}}</td>
                    <td>{{$permiso->Nombre}}</td>
                    <td>{{$permiso->Slug}}</td>
                    <td></td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
@endsection
