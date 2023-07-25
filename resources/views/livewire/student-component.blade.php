<main role="main" class="col-md-12 pt-3 px-4">

    <h2>Estudiantes</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)
          <tr>
              <td>{{ $student->id }}</td>
              <td>{{ $student->first_name }}</td>
              <td>{{ $student->last_name }}</td>
              <td>{{ $student->email }}</td>
              <td>{{ $student->phone }}</td>
              <td>{{ $student->address }}</td>
              <td>

                <a class="btn btn-danger text-white" wire:click="$emit('deleteStudent', {{ $student->id }})">Borrar</a>

              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
