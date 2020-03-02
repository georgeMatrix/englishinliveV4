<a href="{{ route('calificaciones.edit', $id) }}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
<button id="eliminar{{$id}}" onclick="deleteRecord({{$id}});" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
<a href="{{url('getPdf/'.$id.'/'.$adultoNino)}}" class="btn btn-secondary btn-sm" ><i class="fas fa-file-pdf"></i></a>

