<a href="{{ route('controlEscolar.edit', $id) }}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
<button id="eliminar{{$id}}" onclick="deleteRecord({{$id}});" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
